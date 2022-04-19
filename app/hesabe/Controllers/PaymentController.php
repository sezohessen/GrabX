<?php
namespace App\hesabe\Controllers;

require_once(app_path().'/hesabe/Misc/Constants.php');
require_once(app_path().'/hesabe/Misc/PaymentHandler.php');
require_once(app_path().'/hesabe/Helpers/ModelBindingHelper.php');
require_once(app_path().'/hesabe/Libraries/HesabeCrypt.php');

use App\hesabe\Helpers\ModelBindingHelper as HelpersModelBindingHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use Constants;
use HesabeCrypt;
use Illuminate\Http\Request;
use Models\HesabeCheckoutResponseModel;
use PaymentHandler;

/**
 * This Class handles the form request to the checkout controller
 * and receive the response and displays the encrypted and decrypted data.
 *
 * @author Hesabe
 */
class PaymentController extends Controller
{
    public $paymentApiUrl;
    public $secretKey;
    public $ivKey;
    public $accessCode;
    public $hesabeCheckoutResponseModel;
    public $modelBindingHelper;
    public $hesabeCrypt;


    public function index()
    {
        dd(1);
        return view('Payment.Payment');
    }

    public function __construct()
    {
        $this->paymentApiUrl = Constants::PAYMENT_API_URL;
        // Get all three values from Merchant Panel, Profile section
        $this->secretKey = Constants::MERCHANT_SECRET_KEY;  // Use Secret key
        $this->ivKey = Constants::MERCHANT_IV;              // Use Iv Key
        $this->accessCode = Constants::ACCESS_CODE;         // Use Access Code
        $this->hesabeCheckoutResponseModel = new HesabeCheckoutResponseModel();
        $this->modelBindingHelper = new HelpersModelBindingHelper();
        $this->hesabeCrypt = new HesabeCrypt();   // instance of Hesabe Crypt library
        /* New Line */
        $this->merchantCode = Constants::MERCHANT_CODE;
    }


    /**
     * This function handles the form request and get the response
     *
     * @return void
     */
    public function formSubmit(Request $request)
    {
        if($request->type==1){
            $request->validate([
                'name'              => 'required|string|max:255',
                'phone'             => 'required',
                'email'             => 'nullable|email|max:255',
                'governorate_id'    => 'required|exists:governorates,id',
                'city_id'           => 'required|exists:cities,id',
                'unit_type'         => 'required|between:1,3',
                'street'            => 'required|max:500',
                'house_num'         => 'required|max:500',
                'special_direction' => 'nullable|max:500',
            ]);
        }else{
            $request->validate([
                'name'              => 'required|string|max:255',
                'phone'             => 'required',
                'email'             => 'nullable|email|max:255',
                'make'              => 'required',
                'color'             => 'required'
            ]);
        }
        if (isset($_POST['submit'])) {

            // Initialize the Payment request encryption/decryption library using the Secret Key and IV Key from the configuration
            $paymentHandler = new PaymentHandler($this->paymentApiUrl, $this->merchantCode, $this->secretKey, $this->ivKey, $this->accessCode);

            // Getting the payment data into request object
            $requestData = $this->modelBindingHelper->getCheckoutRequestData($_POST);

            // POST the requested object to the checkout API and receive back the response
            $response = $paymentHandler->checkoutRequest($requestData);

            //Get encrypted and decrypted checkout data response
            [$encryptedResponse , $hesabeCheckoutResponseModel] = $this->getCheckoutResponse($response);

            // check the response and validate it
            if ($hesabeCheckoutResponseModel->status == false && $hesabeCheckoutResponseModel->code != Constants::SUCCESS_CODE) {
                echo "<p style='word-break: break-all;'> <b>Encrypted Data</b>:- ".$encryptedResponse."</p>";
                echo "<p><b>Decrypted Data</b>:- </p>";
                echo "<pre>";
                print_r($hesabeCheckoutResponseModel);
                exit;
            }
            // Redirect the user to the payment page using the token from the checkout API response
            return $this->redirectToPayment($hesabeCheckoutResponseModel->response['data']);
        }

        /*
         * To use this method, make sure your SuccessUrl or FailureUrl
         * points to this method in which you'll receive a "data" param
         * as a GET request. Then you can process it accordingly.
         */
        if (isset($_GET['id']) && isset($_GET['data'])) {
            $responseData = $_GET['data'];

            //Decrypt the response received
            $decryptedResponse = $this->getPaymentResponse($responseData);

            echo "<p style='word-break: break-all;'> Encrypted Data:- ".$responseData."</p>";
            echo "<p><b>Decrypted Data</b>:- </p>";
            echo "<pre>";
            print_r($decryptedResponse);
            exit;
        }
    }

    /**
     * Redirect to payment gateway to complete the process
     *
     * @param string $token Encrypted data
     *
     * @return null [<description>]
     */
    public function redirectToPayment($token)
    {
        header("Location: $this->paymentApiUrl/payment?data=$token");
        exit;
    }

    /**
     * Process the response after the transaction is complete
     *
     * @return array De-serialize the decrypted response
     *
     */
    public function getPaymentResponse($responseData)
    {
        //Decrypt the response received in the data query string
        $decryptResponse = $this->hesabeCrypt::decrypt($responseData, $this->secretKey, $this->ivKey);

        //De-serialize the decrypted response
        $decryptResponseData = json_decode($decryptResponse, true);

        //Binding the decrypted response data to the entity model
        $decryptedResponse = $this->modelBindingHelper->getPaymentResponseData($decryptResponseData);

        //return decrypted data
        return $decryptedResponse;
    }

    /**
     * Process the response after the form data has been requested.
     *
     * @return array De-serialize the decrypted response
     *
     */
    public function getCheckoutResponse($response)
    {
        // Decrypt the response from the checkout API
        $decryptResponse = $this->hesabeCrypt::decrypt($response, $this->secretKey, $this->ivKey);

        if (!$decryptResponse) {
            $decryptResponse = $response;
        }

        // De-serialize the JSON string into an object
        $decryptResponseData = json_decode($decryptResponse, true);

        //Binding the decrypted response data to the entity model
        $decryptedResponse = $this->modelBindingHelper->getCheckoutResponseData($decryptResponseData);

        //return encrypted and decrypted data
        return [$response , $decryptedResponse];
    }
}

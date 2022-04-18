<?php

require_once(app_path().'/hesabe/Libraries/HesabeCrypt.php');

/**
 * This Class handles the payment checkout request and response.
 *
 * @author Hesabe
 */
class PaymentHandler
{
    public $baseUrl;
    public $merchantCode;
    public $secretKey;
    public $ivKey;
    public $accessCode;
    public $hesabeCrypt;
    public $odelBindingHelper;

    public function __construct($paymentApiUrl, $merchantCode, $secretKey, $ivKey, $accessCode)
    {
        $this->baseUrl = $paymentApiUrl;
        // Get all three values from Merchant Panel, Profile section
        $this->merchantCode = $merchantCode;      // Use Merchant Code
        $this->secretKey = $secretKey;            // Use Secret key
        $this->ivKey = $ivKey;                    // Use Iv Key
        $this->accessCode = $accessCode;          // Use Access Code
        $this->hesabeCrypt = new HesabeCrypt();   // instance of Hesabe Crypt library
    }

    /**
     * Create request for Payment
     *
     * @param object $data Models\CheckoutData
     *
     * @return array [$response , $decryptResponseData] Encrypted data and decrypted data
     *
     */
    public function checkoutRequest($data)
    {
        /// Serialize the payment data into JSON string
        $requestDataJson = json_encode($data);

        // Encrypt the JSON Serialized string
        $encryptedData = $this->hesabeCrypt::encrypt($requestDataJson, $this->secretKey, $this->ivKey);

        // POST the serialized string to the checkout API and receive back the response
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$this->baseUrl/checkout",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('data' => $encryptedData),
            CURLOPT_HTTPHEADER => array(
                "accessCode: $this->accessCode",
                "Accept: application/json"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        //Get encrypted data response
        return $response;
    }
}

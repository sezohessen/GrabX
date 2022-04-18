<?php

/**
 * This class is used for defining constant.
 *
 * @author Hesabe
 */
class Constants
{
    public const VERSION = "2.0";

    //Payment API URL
    public const PAYMENT_API_URL = "https://sandbox.hesabe.com";

    // Get below values from Merchant Panel, Profile section
    public const ACCESS_CODE         = "c333729b-d060-4b74-a49d-7686a8353481";
    public const MERCHANT_SECRET_KEY = "PkW64zMe5NVdrlPVNnjo2Jy9nOb7v1Xg";
    public const MERCHANT_IV         = "5NVdrlPVNnjo2Jy9";
    public const MERCHANT_CODE       = "842217";

    // This URL are defined by you to get the response from Payment Gateway after success and failure
    public const RESPONSE_URL = "http://localhost/success-payment";
    public const FAILURE_URL = "http://api2-kit-php.test/index.php/?id=842217";

    //Codes
    public const SUCCESS_CODE = 200;
    public const AUTHENTICATION_FAILED_CODE = 501;
}

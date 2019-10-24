<?php
require_once (AUTHORIZATION_PATH . "/UserAuthorizedController.php");
require_once ("BraintreeConfig.php");
require_once (PAYPAL_PATH . '/lib/Braintree.php');

final class Braintree extends UserAuthorizedController
{
    /**
     * __construct
     *
     * @access public
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct();

        // first set the config credentials
        BraintreeConfig::setCredentials();
    }

    /**
     * GET
     * @throws ApiException
     */
    public function get($id)
    {
        $braintreeToken = Braintree_ClientToken::generate();

        $data = [
            "token" => $braintreeToken,
            "success" =>true
        ];

        // send the response
        $this->send($data);
    }

    /**
     * POST
     * @throws ApiException
     */
    public function post($id)
    {
        // make call to Pay-Pal web-api
        $result = Braintree_Transaction::sale([
            'amount' => $id,
            'paymentMethodNonce' => 'fake-valid-nonce',
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        $this->send($result);
    }
}


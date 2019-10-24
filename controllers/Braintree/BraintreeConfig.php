<?php

/**
 * TODO Read here for production
 * Credentials Made By Braintree.
 * This credentials need to be
 * changed when the site goes in
 * production.
 */
class BraintreeConfig
{
    /**
     * __construct
     *
     * @access public
     */
    public static function  setCredentials()
    {   // credentials
        Braintree_Configuration::environment('sandbox');
        Braintree_Configuration::merchantId('8zjpcspnhczxp758');
        Braintree_Configuration::publicKey('rzfj5p7m55h6rwf5');
        Braintree_Configuration::privateKey('54ceda8228b4e7e8ecdd94f005eef832');
    }
}
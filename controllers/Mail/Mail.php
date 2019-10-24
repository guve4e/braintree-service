<?php
require_once (AUTHORIZATION_PATH . "/UserAuthorizedController.php");
require_once ("Order.php");
require_once ("MailReceipt.php");

final class Mail extends UserAuthorizedController
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
    }

    /**
     * POST
     * @throws ApiException
     */
    public function post($id)
    {
        $order = $this->getJsonData();

        $sendMail = new MailReceipt($order);
        $sendMail->sendMailReceipt();

        $result = "success";

        $this->send($result);
    }
}


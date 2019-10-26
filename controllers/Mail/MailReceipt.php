<?php

final class MailReceipt
{
    private $message = "";

    private $order;

    private $htmlContent = "
        ";

    /**
     * MailReceipt constructor.
     * @param $products
     * @param $info
     * @throws ApiException
     */
    public function __construct($order)
    {
        if (!isset($order) )
            throw new ApiException("Mail has failed. Bad Parameters in MailRecepit constructor!");

        $this->order = $order;
    }

    private function foo()
    {
        return "
            <!doctype html>
<head>
     

<style>

    .uk-grid+.uk-grid,.uk-grid-margin,.uk-grid>*>.uk-panel+.uk-panel {
        margin-top: 24px
    }
    .uk-table td {
        border-bottom-color: rgba(0,0,0,.12)
    }
    .uk-table th {
        border-bottom: 1px #444
    }
    .uk-table thead th {
        border-bottom: 2px solid rgba(0,0,0,.12)
    }
    .uk-table tfoot td,.uk-table tfoot th,.uk-table thead th {
        font-style: normal;
        font-weight: 400;
        color: #727272;
        font-size: 14px
    }
    .uk-table td {
        border-bottom-color: #e0e0e0
    }
    .uk-text-small {
        font-size: 12px
    }
    .uk-text-muted {
        color: #757575!important
    }
    .uk-text-danger {
        color: #e53935!important
    }
    .uk-text-success {
        color: #7cb342!important
    }
    .uk-margin-bottom {
        margin-bottom: 16px!important
    }
    .uk-margin-medium-bottom {
        margin-bottom: 32px!important
    }
    .uk-margin-large-bottom {
        margin-bottom: 48px!important
    }
    .md-bg-blue-grey-500 {
        background-color: #607d8b!important
    }
    .md-card {
        background: #fff;
        position: relative;
        -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
        box-shadow: 0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
        border: none
    }
    .md-card .md-card-content {
        padding: 16px
    }
    #header_main,#page_content,#top_bar {
        will-change: margin;
        -webkit-transition: margin 280ms;
        transition: margin 280ms
    }
    .invoice_header {
        height: 72px;
        padding: 20px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: -16px -16px 24px
    }
    .invoice_header>img {
        max-height: 100%;
        width: auto
    }
    .invoice_footer {
        border-top: 1px solid rgba(0,0,0,.12);
        margin-top: 40px;
        height: 64px;
        padding: 8px;
        font-size: 13px;
        text-align: center;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        line-height: 20px
    }
    .invoice_footer>span {
        font-weight: 700;
        font-size: 24px;
        vertical-align: -4px;
        padding: 0 8px
    }
    .invoice_content {
        position: relative
    }
    .invoice_content address p+p {
        margin-top: 0
    } 
    html {
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        background: #ececec
    }
    body {
        min-height: 100%;
        font: 400 14px/1.42857143 Roboto,sans-serif;
        padding-top: 48px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }
    h1,h2,h3,h4,h5,h6 {
        font-family: Roboto,\"Helvetica Neue\",Helvetica,Arial,sans-serif;
        font-weight: 500
    }
    .heading_a {
        margin: 0;
        font: 400 18px/24px Roboto,sans-serif
    }
    .heading_b {
        margin: 0;
        font: 400 22px/28px Roboto,sans-serif
    }
    .uk-text-large {
        font-size: 16px;
        font-weight: 400;
        margin: 0 0 16px
    }
    *>.uk-text-large {
        margin-top: 16px
    }
    .uk-text-small {
        font-size: 12px!important
    } 
    .uk-text-upper {
        text-transform: uppercase
    }
    .uk-text-italic {
        font-style: italic
    }
    address {
        margin: 0
    } 
    address p {
        margin: 0
    }
    address p+p {
        margin-top: 4px
    }
    #page_content:before {
        content: '';
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,.3);
        display: block;
        opacity: 0;
        -webkit-transition: opacity .4s;
        transition: opacity .4s;
        z-index: -1
    } 
    #page_content_inner {
        padding: 24px 24px 100px
    } 
    html {
        font: 400 14px/20px \"Helvetica Neue\",Helvetica,Arial,sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        background: #fff;
        color: #444
    }
    body {
        margin: 0
    }
    b,strong {
        font-weight: 700
    }
    audio,canvas,iframe,img,svg,video {
        vertical-align: middle
    }
    audio,canvas,img,svg,video {
        max-width: 100%;
        height: auto;
        box-sizing: border-box
    }
    img {
        border: 0
    }
    address,blockquote,dl,fieldset,figure,ol,p,pre,ul {
        margin: 0 0 15px 0
    }
    *+address,*+blockquote,*+dl,*+fieldset,*+figure,*+ol,*+p,*+pre,*+ul {
        margin-top: 15px
    }
    h1,h2,h3,h4,h5,h6 {
        margin: 0 0 15px 0;
        font-family: \"Helvetica Neue\",Helvetica,Arial,sans-serif;
        font-weight: 400;
        color: #444;
        text-transform: none
    }
    .uk-h3,h3 {
        font-size: 18px;
        line-height: 24px
    }
    address {
        font-style: normal
    }
    .uk-grid {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-wrap: wrap;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0;
        padding: 0;
        list-style: none
    }
    .uk-grid:after,.uk-grid:before {
        content: \"\";
        display: block;
        overflow: hidden
    }
    .uk-grid:after {
        clear: both
    }
    .uk-grid>* {
        -ms-flex: none;
        -webkit-flex: none;
        flex: none;
        margin: 0;
        float: left
    }
    .uk-grid>*>:last-child {
        margin-bottom: 0
    }
    .uk-grid {
        margin-left: -25px
    }    
    .uk-grid>* {
        padding-left: 25px
    }    
    .uk-grid+.uk-grid,.uk-grid-margin,.uk-grid>*>.uk-panel+.uk-panel {
        margin-top: 25px
    }
    .uk-grid-collapse {
        margin-left: 0
    }    
    .uk-grid-collapse>* {
        padding-left: 0
    }
    [class*=uk-width] {
        box-sizing: border-box;
        width: 100%
    }    
    .uk-width-1-1 {
        width: 100%
    }    
    .uk-width-small-2-5,.uk-width-small-4-10 {
        width: 40%
    }    
    .uk-width-small-3-5,.uk-width-small-6-10 {
        width: 60%
    }    
    .uk-width-medium-4-5,.uk-width-medium-8-10 {
        width: 80%
    }
    .uk-width-large-7-10 {
        width: 70%
    }
    .uk-table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        margin-bottom: 15px
    }   
    .uk-table td,.uk-table th {
        padding: 8px 8px;
        border-bottom: 1px solid #ddd
    }    
    .uk-table th {
        text-align: left
    }   
    .uk-table td {
        vertical-align: top
    }    
    .uk-table thead th {
        vertical-align: bottom
    }
    .uk-table-middle,.uk-table-middle td {
        vertical-align: middle!important
    }
    .uk-text-small {
        font-size: 11px;
        line-height: 16px
    }    
    .uk-text-large {
        font-size: 18px;
        line-height: 24px;
        font-weight: 400
    }    
    .uk-text-bold {
        font-weight: 700
    }   
    .uk-text-muted {
        color: #999!important
    }
    .uk-text-success {
        color: #659f13!important
    }
    .uk-text-danger {
        color: #d85030!important
    }
    .uk-text-center {
        text-align: center!important
    }
    .uk-container-center {
        margin-left: auto;
        margin-right: auto
    }
    .uk-float-right {
        float: right
    }   
    [class*=uk-float-] {
        max-width: 100%
    }  
    .uk-margin-bottom {
        margin-bottom: 15px!important
    }
    .uk-margin-large-bottom {
        margin-bottom: 50px!important
    }
    .uk-margin-top-remove {
        margin-top: 0!important
    }

</style>
</head>
<body>
    <div id='page_content' style=\"position: center\">
        <div id='page_content_inner'>
                        <div class='uk-grid'>
                            <div class='uk-width-large'>
                                <div class='md-card md-card-single' id='invoice'>
                                        <div class='md-card-content invoice_content'>
                
                                                <div class='invoice_header md-bg-blue-grey-500'>
                                                    <img src='http://thevitcserum.ddns.net/assets/img/logo_light.png' alt=' height='30' width='140'/>
                                                    <img class='uk-float-right' src='http://thevitcserum.ddns.net/assets/img/others/html5-css-javascript-logos.png' alt=' height='80' width='205'/>
                                                </div>
                                           
                                            <div class='uk-margin-medium-bottom'>
                                                
                                                <h3 class='heading_a uk-margin-bottom'> Invoice 111 </h3>
                                               
                                                <span class='uk-text-muted uk-text-small uk-text-italic'>Date:</span> <span class='uk-text-bold'>{$this->order['modifiedOn']}</span>
                                            </div>
                                            <div class='uk-grid'>
                                                <div class='uk-width-small-3-5'>
                                                    <div class='uk-margin-bottom'>
                                                        <span class='uk-text-muted uk-text-small uk-text-italic'>From:</span>
                                                        <address>
                                                            <p><strong>AVA Cosmetics</strong></p>
                                                            <p>500 N Elm</p>
                                                            <p>Chicago, IL</p>
                                                        </address>
                                                    </div>
                                                    <div class='uk-margin-medium-bottom'>
                                                        <span class='uk-text-muted uk-text-small uk-text-italic'>Shipping Address:</span>
                                                        <address>
                                                            <p><strong>{$this->order['user']['shippingInfo']['name']}</strong></p>
                                                            <p>{$this->order['user']['shippingInfo']['address']['streetName']}</p>
                                                            <p>{$this->order['user']['shippingInfo']['address']['city']} {$this->order['user']['shippingInfo']['address']['state']}, {$this->order['user']['shippingInfo']['address']['zip']}</p>
                                                        </address>
                                                        <span class='uk-text-muted uk-text-small uk-text-italic'>Phone Number: {$this->order['user']['shippingInfo']['phoneNumber']}</span>
                                                    </div>
                                                </div>
                                                <div class='uk-width-small-2-5'>
                                                    <span class='uk-text-muted uk-text-small uk-text-italic'>Total:</span>
                                                   <p class='heading_b uk-text-success'>{$this->order['cost']}</p>
                                                    <p class='uk-text-small uk-text-muted uk-margin-top-remove'>Including shipping</p>
                                                </div>
                                            </div>
                                            <div class='uk-grid uk-margin-large-bottom'>
                                                <div class='uk-width-1-1'>
                                                    <table class='uk-table'>
                                                        <thead class='thread'>
                                                            <tr class='uk-text-upper'>
                                                                <th class='uk-text-center'>Image</th>
                                                                <th class='uk-text-center'>Description</th>
                                                                <th class='uk-text-center'>Quantity</th>
                                                                <th class='uk-text-center'>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        {$this->makeProducts()}
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>      
                                            <div class='invoice_footer'>
                                                Tillman, Brakus and Weissnat<span>&middot;</span>723 Treutel Stravenue East Dashawn, MS 63908<br>
                                                </span>+75(8)4629016459<span>&middot;</span>rodriguez.edward@gmail.com 
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                
        </div>
    </div>
</body>
</html>
        ";
    }

    private function makeHtml()
    {
        $this->message = "
                <html>
                    <head>
                        <title>Thank you for purchasing the vitamin C serum</title> 
                    </head>
                    <body >
                        <div>
                            {$this->makeInfoSection()}
                            {$this->makeTotalSection()}
                            {$this->makeProductSection()}
                            {$this->makeSignature()}
                        </div>
                    </body>
                </html>
            ";
    }

    private function makeTotalSection()
    {
        return "
            <div>
                <div>
                    Total:
                    <p>$ {$this->order["cost"]}</p>
                    <p>Including shipping
                </div>
            </div>
            ";
    }

    private function makeProducts()
    {
        $productHtml = "";

        $productArray = $this->order['user']['shoppingCart']['products'];

        $image = "someimage.png";

        foreach($productArray as $product)
        {
            $productHtml .= "
                <tr>
                    <td>{$image}</td>
                    <td style='background-color: #e0e0e0;'>{$product['price']}</td>
                    <td>{$product['quantity']}</td>
                    <td>{$product['totalCost']}</td>
                </tr>
                ";
        }
        return $productHtml;
    }

    private function makeProductSection()
    {
        return "
            <div>
                <div>
                    <table cellpadding='border: 2px dashed #FB4314; width: 100%; style'>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                            <tbody>
                             {$this->makeProducts()}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            ";
    }

    private function makeInfoSection()
    {
        return "
            <div>
                <h3> Thank you for your purchase! </h3>
                <span>Date: {$this->order['modifiedOn']} </span>
                <br/><br/>
                <span>Name: {$this->order['user']['shippingInfo']['name']} <span></span>
                <br/><br/>
                <span>Shipping Address:</span> <span></span><br/>
                <span></span> {$this->order['user']['shippingInfo']['address']['streetName']} <span></span><br/>
                <span> {$this->order['user']['shippingInfo']['address']['city']} {$this->order['user']['shippingInfo']['address']['state']}, {$this->order['user']['shippingInfo']['address']['zip']}</span> <span></span>
                <br/><br/>
                <span>Phone Number: {$this->order['user']['shippingInfo']['phoneNumber']} </span> <span></span>
                <br/><br/>
            </div>
            ";
    }

    private function makeSignature()
    {
        return "
        <div>
            <div>
                <span >Payment to:</span>
                <p>
                <p>Please pay within 3 days</p>
            </div>
        </div>
        <div>
            Prohaska-Wisoky<span>&middot;</span>511 Donnelly Shoals Suite 278
            East Gillian, SC 41932<br>
            </span>808.288.9583<span>&middot;</span>bbosco@hotmail.com            
         </div>
        ";
    }

    public function sendMailReceipt()
    {
        $this->makeHtml();

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '. 'AVA Cosmetika ' .'<'. 'order@avacosmetika.com' .'>' . "\r\n";

        // use wordwrap() if lines are longer than 70 characters
        $message = wordwrap($this->message,70);
        $email = $this->order['user']['shippingInfo']['email']['address'];

        if(mail($email,"AVA Cosmetics Receipt", $this->foo(), $headers))
        {
            Logger::logMsg("MAIL","Email successful");
        }
        else
        {
            $errorMessage = error_get_last()['message'];
            Logger::logMsg("MAIL","Email NOT successful");
            throw new ApiException("Mail was not sent!{$errorMessage}",101);
        }
    }
}
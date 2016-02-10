//=======================================================================//
//==> Class constructor, with default settings that can be overridden <==//
//=======================================================================//
public function __construct($config = "") {
 
    //default settings
    $settings = array(
        'business' => 'jeremy@jdmweb.com', //paypal email address
        'currency' => 'GBP', //paypal currency
        'cursymbol' => '&pound;', //currency symbol
        'location' => 'GB', //location code (ex GB)
        'returnurl' => 'http://mysite/myreturnpage', //where to go back when the transaction is done.
        'returntxt' => 'Return to My Site', //What is written on the return button in paypal
        'cancelurl' => 'http://mysite/mycancelpage', //Where to go if the user cancels.
        'shipping' => 0, //Shipping Cost
        'custom' => '' //Custom attribute
    );
 
    //overrride default settings
    if (!empty($config)) {
        foreach ($config as $key => $val) {
            if (!empty($val)) {
                $settings[$key] = $val;
            }
        }
    }
 
    //Set the class attributes
    $this->business = $settings['business'];
    $this->currency = $settings['currency'];
    $this->cursymbol = $settings['cursymbol'];
    $this->location = $settings['location'];
    $this->returnurl = $settings['returnurl'];
    $this->returntxt = $settings['returntxt'];
    $this->cancelurl = $settings['cancelurl'];
    $this->shipping = $settings['shipping'];
    $this->custom = $settings['custom'];
    $this->items = array();
}

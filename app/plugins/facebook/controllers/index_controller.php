<?php

class IndexController extends FacebookAppController {

    var $uses = array();

    function __construct() {
        parent::__construct();
    }

    function beforeFilter() {
		$this->Auth->allow("index");
        App::import('Lib', 'Facebook.Facebook');
        
    }
        function index() {



            $this->layout = 'facebook';


            $app_id = "210615615621665";
            $app_secret = "b2a6c7386668146e5f8d00625be27b5b";

            $canvas_page = "http://apps.facebook.com/mihinlanka/";

            $auth_url = "http://www.facebook.com/dialog/oauth?client_id="
                    . $app_id . "&redirect_uri=" . urlencode($canvas_page);

           // $signed_request = $_REQUEST["signed_request"];

          //  list($encoded_sig, $payload) = explode('.', $signed_request, 2);

           // $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

            if (empty($data["user_id"])) {
               // echo("<script> top.location.href='" . $auth_url . "'</script>");
            } else {

                $this->facebook = new Facebook(array(
                    'appId' => '210615615621665',
                    'secret' => 'b2a6c7386668146e5f8d00625be27b5b',
                    'cookie' => true,
                    'domain' => 'mihinlanka-dev.com'
                ));

             //   echo ("Welcome User: " . $data["user_id"]);
             
               // $session = $this->facebook->getSession();

             



        $me = null;
// Session based API call.
       
               // $uid = $this->facebook->getUser();
                //$me = $this->facebook->api('/FriendList');


        
            }
        }


        function terms(){

$this->layout = 'facebook';
        }

        function conditions_of_carriage(){
$this->layout = 'facebook';

            
        }
        function authSuccess(){


            $session = $this->facebook->getSession();

        $me = null;
// Session based API call.
        if ($session) {
            try {
                $uid = $facebook->getUser();
                $me = $facebook->api('/me');
            } catch (FacebookApiException $e) {
                var_dump($e);
            }
        }
    }
        

        

}

?>
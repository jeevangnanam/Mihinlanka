<?php

class PaymentsController extends AppController {

    var $name = 'Payments';
    var $scaffold;
    var $components = array('Session', 'Email');

    function add() {

        if (isset($this->data)) {

            $this->Payment->create();
            $this->data['Payment']['merchent_reference'] =  substr($this->data['Payment']['name'],0,3).time();
			if ($this->Payment->save($this->data)) {
                            $this->Session->setFlash(__('The payment has been saved', true));
				
            $invoice = file_get_contents("http://localhost:81/Sampath/Payphp.asp?amount=".$this->data['Payment']['amount']."&merchent_reference=".$this->data['Payment']['merchent_reference']);

                $content = "<i>Please wait...</i>";
                $content .= "<form method='post'  action='https://epay.sipg.lk/ipg/Servlet_HyDirectPAccCustom' name='frm1' id='frm1'>";
                $content .= "<input type='hidden' id='MerchantInvoice' name='MerchantInvoice' value=$invoice />";
                $content .= "</form>";
            $this->set('content', $content);
            
                        }else{
                                $this->Session->setFlash(__('The payment has not been saved.Please try again.', true));
                        }
        } else {
           
        }
    }

    function update(){


        
        if(isset($this->data)){

                $this->Payment->updateAll(array('Payment.transection_status' => "'".$this->data['Payment']['transection_status']."'"),array('Payment.merchent_reference' => $this->data['Payment']['merchent_reference']));
            
        }

        if(isset($this->data['Payment']['transection_status'])){

            $payer = $this->Payment->find('all',array("conditions" => array('Payment.merchent_reference' => $this->data['Payment']['merchent_reference'])));
            
            $message  = "Dear ".ucfirst($payer[0]['Payment']['name']) .",<br /><br />".
            $message .= "<h4 >Thank you.Your payment has been processed and will be contact with you shortly. Please find below a summary of your transaction</h4><br />";
            $message .= "Transaction  status : ".$this->data['Payment']['transection_status'];
            $message .= "<br />Transaction  reference number : <b style='font-size:16px'>".$this->data['Payment']['merchent_reference']."</b>";
            $message .= "<br />Mihinlanka reference number : ".$payer[0]['Payment']['reference_no'];
            $message .= "<br />Amount : ".$payer[0]['Payment']['amount'];
            $message .= "<br /> Should you have any clarifications please contact us on <a href='mailto:info@mihinlanka.com'>info@mihinlanka.com</a>";
            $message .= "<br /><br />Yours Sincerely<br />Mihin Lanka";
            $this->_sendConfirmMail($payer);
            $this->set('message',$message);
            
        }
    }
       function _sendConfirmMail($payer=NULL) {

        //@todo: uncomment this line on live and remove the below $this->Email->to = "Amila <amila@mihinlanka.com>";
        $this->Email->to = $payer[0]['Payment']['name']." <".$payer[0]['Payment']['email'].">";
       // $this->Email->bcc = array("Cherankrish <cherankrish@gmail.com>","Amila <amila@mihinlanka.com>");
        $this->Email->subject = 'Mihinlanka payment confirmation';
        $this->Email->replyTo = 'info@mihinlanka.com';
        $this->Email->from = 'Mihinlanka <info@mihinlanka.com>';
        $this->Email->template = 'payment'; // note no '.ctp'
        $this->Email->layout = 'payment';
        //Send as 'html', 'text' or 'both' (default is 'text')
        $this->Email->sendAs = 'html'; // because we like to send pretty mail
        //Set view variables as normal

        $this->set('name', $payer[0]['Payment']['name']);
        $this->set('email', $payer[0]['Payment']['email']);
        $this->set('phone', $payer[0]['Payment']['phone']);
        $this->set('mihin_reference', $payer[0]['Payment']['reference_no']);
        $this->set('merchant_reference', $payer[0]['Payment']['merchent_reference']);
        $this->set('date', $payer[0]['Payment']['date']);
        $this->set('message', $payer[0]['Payment']['additional_info']);
        $this->set('amount', "Rs. ".$payer[0]['Payment']['amount']);
        $this->set('status', $payer[0]['Payment']['transection_status']);
        //Do not pass any args to send()
        $this->Email->send();
    }
}
?>
<section style="width:74%">
    <h2>Confirm the order</h2>


    <p>Please use this form to send the details to us</p>
    <?= $form->create('ShoppingOrder',array('controller' => 'checkout', 'action' => 'checkout' ,'model' => 'ShoppingOrder'));?>
        <div id="contact_form">
           
             <?= $this->element('messages/common_message'); ?>

        <fieldset>

            <p><label for="contact_name">Name&#58;</label>
                <?= $form->input('name',array( 'label' => false ,'div' => false ,'error' => false));?>
            </p>
        </fieldset>
        <fieldset>
            <p><label for="contact_email">Email&#58;</label>
                <?= $form->input('email',array( 'label' => false ,'div' => false,'error' => false));?></p>
        </fieldset>
        <fieldset>
            <p><label for="contact_email">Phone&#58;</label>
                <?= $form->input('phone',array( 'label' => false ,'div' => false,'error' => false));?></p>
        </fieldset>
        <fieldset>
            <p><label for="ticketno">Ticket No&#58;</label>
                <?= $form->input('ticket_no',array( 'label' => false ,'div' => false,'error' => false));?></p>
        </fieldset>
        <fieldset>
            <p><label for="flight_date">Flight DateNo&#58;</label>
                <?= $form->input('flight_date',array( 'label' => false ,'div' => false,'id' => 'flight_date'));?></p>
        </fieldset>
        <fieldset>
            <p><label for="contact_message">Message&#58;</label>
                 <?= $form->input('message',array( 'label' => false ,'div' => false ,'type' => 'textarea','error' => false));?>
            </p>
        </fieldset>
        <p><label for="contact_send"></label>
            <?= $form->input('order_date',array( 'label' => false ,'div' => false ,'type' => 'hidden' ,'value' => date('Y-m-d h:i:s')));?>
            <input id="contact_send" name="send" type="submit" value="Send Order Details" /></p>


        </div>

    <br /><br />
   <?= $form->end(); ?>
</section>
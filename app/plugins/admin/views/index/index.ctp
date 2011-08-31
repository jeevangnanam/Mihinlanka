<div id="loginWrapper"><div id="loginLeft">
        
        <img src="http://www.mihinlanka.com/img/logo/logo.gif" />
    </div>
    <div id="login" >
        <?php
        echo $this->Form->create('User', array('controller' => 'user', 'action' => 'login'));
        echo $this->Form->inputs(array(
            'legend' => false,
            'username',
            'password'
        ));
        echo $this->Form->end('Login');
        ?>
    </div>
</div>
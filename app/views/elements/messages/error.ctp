<div class="error">
    <div style="float:left;"> <img src="/img/icons/exclamation.png" /></div>
    <div style="margin-left:25px;">
    <?foreach($errors as $error): ?>

    <li><?=$error;?></li>
    <?endforeach;?>
    </div>
</div>
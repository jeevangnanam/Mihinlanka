<div id="contentInner">
    <h2><?= __("Download forms"); ?></h2><br /><br />
    <p><?= __("Downloads desc"); ?></p><br /><br />

            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblStyleEng">
            <tr></tr>
            
            <? foreach($downloads as $download): ?>
  <tr>
    <td><?= $download['Download']['title'];?> <span style="color: #666;font-size:10px">Updated on : <?= $download['Download']['date'];?> </span></td>
    <td><div id="buttons" style="padding:0px;margin:0px">
      <p><a title="Download special payment plans government pensioners(Sinhala PDF Document)" href="<?= $download['Download']['path'];?>" target="_blank"><?= __("Download"); ?> <img src="/img/icons/page_white_acrobat.png" border="0" /></a>
        
        
      </div></td>
  </tr>
<? endforeach; ?>

</table>
 
 </div>

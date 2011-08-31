<div style="padding:0px;height:300px;background-image:url(/img/Mihin_lanka_clouds_big.jpg);" valign="top" align="" >
   <br /> <h2 style="margin-bottom:5px;"><?= __("<b style='color:#006699'>Quick</b> price check on the <b style='color:#006699'>lowest</b> fares"); ?></h2>


<br /><br /><br />

                <div>
                    <table width="100%" border="0">

                        <tr>
                            <td><i><b><font size="2">From</font></b></i></td>
                            <td><i><b><font size="2">To</font></b></i></td>
                             <td><i><b><font size="2">Return
trip?</font></b></i></td>
                             <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><div id="wrapper"><?=$this->Form->input('from',array('type' => 'select' ,'options' => $lowfairFrom ,'label' => false ,'id' => 'from'));?></div></td>
                            <td><div id="wrapper"><?=$this->Form->input('to',array('type' => 'select' ,'options' => $lowfairTo , 'label' => false , 'id' => 'to'));?></div></td>
                            <td align="left">    <?= $this->Form->checkbox('returnTrip', array('value' => 'yes', 'id'=> 'returnTrip')); ?></td>
                            <td align="left"><img alt="Search" style="margin-top:2px;margin-bottom:1px;cursor:pointer" src="/img/gobtn.png" id="searchPrice" /></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table>


          </div>

                <div id="res"></div>
            </td>

</div>
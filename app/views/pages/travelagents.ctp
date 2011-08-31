<?= $html->meta('description', 'List of travel agents through which you can book a flight with mihin lanka', array('type' => 'description', 'inline' => false)); ?>
<script type="text/javascript">
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        // if (restore) selObj.selectedIndex=0;
    }
</script>
<div id="contentInner">
    <h2><?= __("Travel Agents"); ?></h2><br />
    <?= __("Travel Agents desc"); ?>

    <div id="services">
        <div class="graybox">   <?= __("Please select the location"); ?> <font face="sans">:</font>    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)" style="width:200px">
               
                <?foreach($countries as $country): ?>
                <option value="/pages/travelagents/country:<?= $country;?>" <? echo (($selectedCountry == $country)) ? 'selected' : ''; ?>><?=$country;?></option>
                <?endforeach;?>
                <!--<option value="/pages/travelagents/country:dubai" <? echo (($selectedCountry == 'dubai')) ? 'selected' : ''; ?>>Dubai</option>
                <option value="/pages/travelagents/country:france" <? echo (($selectedCountry == 'france')) ? 'selected' : ''; ?>>France</option>
                <option value="/pages/travelagents/country:four" <? echo (($selectedCountry == 'four')) ? 'selected' : ''; ?>>four</option>
                -->
            </select></div>
    </div>



        <div id="travel-agents-srilanka">
            <br /><br />
            <h2><?= __("Travel Agents in"); ?> <font face="sans" style="font-size:18px;"><?=$selectedCountry;?></font></h2>
          <div id="services">
                        <div class="message"><?= __("Search the agents"); ?>  <font face="sans">:</font> </i><input  class="agents" type="text"  style="background:url(/img/icons/search.png) no-repeat;padding-left:15px;background-color:white;"/></div>
                    </div>
            
            
            
            
            
  
            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="" id="services">
               
                <tbody>
                    <tr></tr>
                    <?$counter =1; ?>
               <?foreach($travelAgents as $travelAgent): ?>

                    <?if($counter==1) echo "<tr>"; $counter++;?>
               
                        <td class='agents' >
                        <div class="message_no_margin" style="font-family: arial;font-size:13px;"><h4 style="font-family: sans"><?=$travelAgent['TravelAgent']['name']; ?></h4>
                                <?if(isset($travelAgent['TravelAgent']['address']) and !empty($travelAgent['TravelAgent']['address'])): ?>
                               <?=  nl2br($travelAgent['TravelAgent']['address']); ?><br /><br />
                                <?endif;?>

                                <?if(isset($travelAgent['TravelAgent']['phone']) and !empty($travelAgent['TravelAgent']['phone'])): ?>
                                <img src="/img/icons/telephone.png"  title="Phone" alt="Phone"/>&nbsp;&nbsp;<?=$travelAgent['TravelAgent']['phone']; ?><br />
                                <?endif;?>

                                <?if(isset($travelAgent['TravelAgent']['fax']) and !empty($travelAgent['TravelAgent']['fax'])): ?>
                               <img src="/img/icons/printer.png" title="Fax" alt="Fax"/>&nbsp;&nbsp;<?=$travelAgent['TravelAgent']['fax']; ?><br />
                                <?endif;?>
                              
                                <?if(isset($travelAgent['TravelAgent']['email']) and !empty($travelAgent['TravelAgent']['email'])): ?>
                               <img src="/img/icons/email.png" title="Email" alt="Email"/>&nbsp;&nbsp;<a href="mailto:<?=$travelAgent['TravelAgent']['email']; ?>"><?=$travelAgent['TravelAgent']['email']; ?></a>
                                <?endif;?> <br />
                            </p></div></td>
                    
                    <?if($counter == 3){ echo "</tr>"; $counter=1;}?>
                <?endforeach;?>
 
                </tbody>
            </table>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>


</div>
<script>

    $($(".agents")).showFilter("table tbody tr", { criteria: function(e) { return [e.children(".agents").text()]; } });
</script>
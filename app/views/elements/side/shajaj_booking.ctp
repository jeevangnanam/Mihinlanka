<div style="margin-top:-3px;">
<form id="form1" name="form1" method="post" action="http://fly.mihinLanka.com/CAB/SessionHandler.aspx?target=%2fCAB%2fIBE.aspx&pub=%2flk%2fEnglish&Tab=1&s=&h=">
    <table width="280px" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2" ><div style="float:left;margin-right:100px"><?= __("Travel Itinerary");?></div><div style='float:left;margin-right:4px;'><img src='/img/icons/flightM.png' /></div><div style='padding-top:4px;'><a href="http://fly.mihinlanka.com/CAB/IBE/SearchAvailability.aspx" target="_blank" ><?= __("Multiple destinations"); ?></a></div></td>

        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>


        <tr>
            <td colspan="2" ><table width="260" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td width="40" ><?= __("From");?></td>
                        <td><!--<input name="seldcity1" type="text" id="seldcity1" />-->
                        	<select name="seldcity1" style="width:75px;">
                            	<option value="CMB">Colombo-Sri Lanka</option>
                                <option value="SHJ">Sharjah</option>
                            </select>
                        </td>
                        <td><?= __("Depart");?></td>
                        <td><input type="text" name="selddate1" id="selddate1"  style="width: 65px;background-image: url( '/img/icons/calander.png');background-repeat: no-repeat;padding: 3px 0px 1px 16px;border:solid 1px #999;" value="<?=date('d M y')?>"/></td>
                    </tr>
                </table></td>

        </tr>
        <tr>
            <td colspan="2" ><table width="260" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td width="40"><?= __("To");?></td>
                        <td><!--<input type="text" name="selacity1" id="selacity1"  style="width:75px;"/>-->
                        	<select name="selacity1" style="width:75px;">
                            	<option value="SHJ">Sharjah</option>
                            	<option value="CMB">Colombo-Sri Lanka</option>
                                
                            </select>
                        </td>
                        <td style="height:25px"><div id="retSpan"><?= __("Return");?></div></td></td>
                        <td><input type="text" name="seladate1" id="seladate1"  style="width: 65px;background-image: url( '/img/icons/calander.png');background-repeat: no-repeat;padding: 3px 0px 1px 16px;border:solid 1px #999;" value="<?=date('d M y',time()+(60*60*24*7));?>" /></td>
                    </tr>
                </table></td>

        </tr>
        <tr>
          <td colspan="2" >&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" ><?= __("Number of passengers");?></td>

        </tr>


        <tr>
            <td colspan="2" >&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" >
                 <table width="90%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><?= __("Adults");?></td>
                        <td><select name="seladults" id="seladults" style="z-index: 5">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select></td>
                        <td><?= __("Children");?></td>
                        <td><select name="selchildren" id="selchildren">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>

                            </select></td>
                        <td><?= __("Infants");?></td>
                        <td><select name="selinfants" id="selinfants">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select></td>
                    </tr>
                </table>
                
            </td>
        </tr>
        <tr><td colspan="2" >&nbsp;</td></tr>
        <tr align="left">

            <td >
                        <table border="0" width="100%">
                            <tr>
                                <td width="100px"><?= __("Return trip");?></td>
                                <td><input name="tidbox" type="checkbox" id="tidbox" value="SB"  checked="checked"  /></td>
                            </tr>
                        </table>
                        </td>
          
        </tr>
       
      
        <tr>
            <td colspan="2" >&nbsp;</td>
        </tr>
        <tr>

            <td colspan="2"  style="padding-bottom:3px"><table width="260"  border="0" cellspacing="0" cellpadding="0">
                    <tr class="SearchPrferences">
                        <td><div><?= __("Schedule");?></div><div><input type="radio"  value="1" style="width: 15px;" id="rBySchedule" name="resultby"></div></td>
                        <td><div><?= __("Price");?></div><div><input type="radio" style="width: 15px;" value="0" id="rByPrice" name="resultby"></div></td>
                        <td><div><?= __("Price").__("(Flexible date)");?></div><div><input type="radio"  style="width: 15px;" value="2" id="rByPriceFlex" name="resultby" checked="checked"></div></td>

                    </tr>
                </table>
            </td>

        </tr>
        <?php if (isset($language) and !empty($language) and $language != 'eng'): ?>
        
        <? else: ?>
        <tr>
            <td colspan="2"  style="border-top:dotted 1px #1b75bb;">&nbsp;</td>
        </tr>
        <? endif; ?>
        


        <tr>
            <td colspan="2" align="left" style='padding:0px;margin:0px;height:1px'>
                <table  border="0" cellpadding="0" cellspacing="0" width="95%">

                    <tr>
                        <td><input name="promocode" type="text" id="promocode" value="MJPROM7" readonly="readonly"/>
                        </td>
                        <td align="right">
                            <input type="hidden" id="tid" name="tid" value="SB" />
                            <button style="width:75px;"  type="submit" id="searchFormSubmit"><img src="/img/search.png"   style="margin-top:2px;margin-bottom:1px;" alt="Search"/></button>
                        </td>
                    </tr>
                    <tr>
                    <td colspan="2" style="padding-top:3px"></td>
                    </tr>
                </table>
            </td>

          
        </tr>
        <tr>
          <td colspan="2" align="left" valign="top" style='padding:0px;margin:0px;height:1px'>
          	<div align="center" style="width:150px; height:22px; margin:auto;">
            <?php if (isset($language) and !empty($language) and $language == 'sin'){ ?>
            <?php echo $this->Html->image("lettr.png", array(
                        "alt" => "", "style" => "float:right;margin-right:10px;","border"=>"0",
                        'url' => array('controller' => 'pages', 'action' => 'how_to_book_video')
                    )); ?>
            <?php }else{ ?>
            	<a href="/how-to-book-mihin-lanka"><?= __("Guide to Booking Online");?></a>
            <?php } ?>
            </div>
          </td>
        </tr>
    </table>
</form>
</div>
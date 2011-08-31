 <div id="bookingEngineSmall">

<form id="searchFormSubmit" name="searchFormSubmit" method="post" action="http://fly.mihinLanka.com/CAB/SessionHandler.aspx?target=%2fCAB%2fIBE.aspx&pub=%2flk%2fEnglish&Tab=1&s=&h=">
    <table  border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td ><div style="float:left;margin-right:80px">Travel Itinerary</div><div><i><a href="/files/Mihin Guide to Booking Online.pptx">How to book? </a></i></div></td>

        </tr>
     <tr><td>&nbsp;</td>
     </tr>


        <tr>
            <td><table  border="0" cellspacing="1" cellpadding="0" width="100%">
                    <tr>
                        <td  style="width:40px;">From</td>
                        <td><input type="text" name="seldcity1" id="seldcity1" /></td>
                        <td>Depart</td>
                        <td><input type="text" name="selddate1" id="selddate1"  style="width: 65px;background-image: url( '/img/icons/calander.png');background-repeat: no-repeat;padding: 3px 0px 1px 16px;border:solid 1px #999;" value="<?=date('d M y')?>"/></td>
                    </tr>
                </table></td>

        </tr>
        <tr>
            <td ><table  border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td style="width:40px">To</td>
                        <td><input type="text" name="selacity1" id="selacity1"  /></td>
                        <td style="width:40px" align="right"><div id="retSpan">Return</div></td></td>
                        <td align="right"><input type="text" name="seladate1" id="seladate1"  style="width: 65px;background-image: url( '/img/icons/calander.png');background-repeat: no-repeat;padding: 3px 0px 1px 16px;border:solid 1px #999;" value="<?=date('d M y',time()+(60*60*24*7));?>" /></td>
                    </tr>
                </table></td>

        </tr>

        <tr>
          <td >&nbsp;</td>
        </tr>
        <tr>
            <td >
                 <table  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>Adults</td>
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
                        <td>Children</td>
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
                        <td>Infants</td>
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
        <tr>
          <td >&nbsp;</td>
        </tr>
        <tr>

            <td >

                <table border="0" cellpadding="0" cellspacing="0">

                    <tr>
                        
                        <td style="padding-left:5px;">
                            Return? <input name="tidbox" type="checkbox" id="tidbox" value="SB" style="width:10px;" checked="checked" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
     
        <tr>
          <td >&nbsp;</td>
        </tr>
        <tr>
            <td >Search preferences | <a href="http://fly.mihinlanka.com/CAB/IBE/SearchAvailability.aspx" target="_blank"><?= __("Multiple destinations"); ?></a></td>
        </tr>
        <tr>

            <td  style="padding-bottom:3px"><table width="260"  border="0" cellspacing="0" cellpadding="0">
                    <tr class="SearchPrferences">
                        <td><div>Schedule</div><div><input type="radio"  value="1" style="width: 15px;" id="rBySchedule" name="resultby"></div></td>
                        <td><div>Price</div><div><input type="radio" style="width: 15px;" value="0" id="rByPrice" name="resultby"></div></td>
                        <td><div>Price (Flexible date)</div><div><input type="radio"  style="width: 15px;" value="2" id="rByPriceFlex" name="resultby" checked="checked"></div></td>

                    </tr>
                </table>
            </td>

        </tr>

        <tr>
            <td align="left">
                <table  border="0" cellpadding="0" cellspacing="0" width="95%">

                    <tr>
                        <td><input type="text" name="promocode" id="promocode" value="" onClick="this.value=''"/>
                        </td>
                        <td align="right">
                            <input type="hidden" id="tid" name="tid" value="SB" />
                            <button style="width:75px;"  type="submit"><img src="/img/search.png"   style="margin-top:2px;margin-bottom:1px;" alt="Search"/></button>
                        </td>
                    </tr>
                </table>
            </td>


        </tr>
    </table>
</form>
</div>
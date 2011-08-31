<?= $html->meta('description', 'We currently fly to 7 destinations across Asia and the Middle East. Click here to view the Mihin Lanka Flight schedule.', array('type' => 'description', 'inline' => false)); ?>
<script type="text/javascript">
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='/pages/flight-schedule/"+selObj.options[selObj.selectedIndex].value+"'");
        // if (restore) selObj.selectedIndex=0;
    }
</script>

<div id="contentInner">
    <h2><?=__("Flight Schedule");?></h2><br />
	<?= __("Flight schedules det.."); ?><br />
    <div id="services">
        <div class="graybox">   <?= __("Please select the location");?> <font face="sans">:</font>
            <?= $this->Form->input('jumpMenu',array('type' => 'select','options' => $routes ,'label' => false ,'div' => false ,'onChange' => "MM_jumpMenu('parent',this,0)" ,'selected' => $selectedRoute));?>
        </div>
    </div>

    <? if (isset($selectedCountry) and ($selectedCountry == 'colombo-dubai-colombo')): ?>
        <br /><br />
        <div id="services">
            <div class="message"><?= __("Search in locations");?> <font face="sans">:</font> </i><input class="agents"    type="text"  style="background:url(/img/icons/search.png) no-repeat;padding-left:15px;background-color:white;"/></div>
        </div>
<table  class="tblStyle" width="100%" cellpadding="" cellspacing="1">
            <thead style="font-size:9px;">
                <tr>
                    <th  ><?= __("Flight No");?></th>
                    <th width="45" scope="col" ><?= __("Dep Airport");?></th>
                    <th ><?= __("Dep Terminal"); ?></th>
                    <th ><?= __("Dep Time");?> </th>
                    <th ><?= __("Arr Airport");?> </th>
                    <th ><?= __("Arr Terminal");?></th>
                    <th ><?= __("Arr Time"); ?></th>
                    <th ><?= __("Frequency"); ?></th>
                    <th ><?= __("Period"); ?></th>
                    <th ><?= __("Stops"); ?></th>

                </tr>
            </thead>

            <tbody>
                <? foreach($flightSchedulesNormal as $flightSchedule): ?>   
                <tr>
                    <td class='agents'><?=$flightSchedule['Flight']['name'];?> </td>
                    <td class='agents'><?=$flightSchedule['DepartureDestination']['code'];?></td>
                    <td class='agents'><?=$flightSchedule['DepartureTerminal']['name'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['departure_time'];?></td>
                    <td class='agents'><?=$flightSchedule['ArrivalDestination']['code'];?></td>
                    <td class='agents'><?=$flightSchedule['ArrivalTerminal']['name'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['arrival_time'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['frequency'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['period'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['stops'];?></td>
                </tr>
                <? endforeach;?>

                <? if(count($flightSchedulesChange)>0):?>
                <tr>
                    <td colspan="10">
                        <i>Schedule change</i>
                    </td>
                </tr>
                <? foreach($flightSchedulesChange as $flightSchedule): ?>
                <tr>
                    <td class='agents'><?=$flightSchedule['Flight']['name'];?> </td>
                    <td class='agents'><?=$flightSchedule['DepartureDestination']['code'];?></td>
                    <td class='agents'><?=$flightSchedule['DepartureTerminal']['name'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['departure_time'];?></td>
                    <td class='agents'><?=$flightSchedule['ArrivalDestination']['code'];?></td>
                    <td class='agents'><?=$flightSchedule['ArrivalTerminal']['name'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['arrival_time'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['frequency'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['period'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['stops'];?></td>
                </tr>
                <? endforeach;?>

                <? endif;?>


                <? if(count($flightSchedulesCancel)>0):?>
                <tr>
                    <td colspan="10">
                        <i>Flight cancel</i>
                    </td>
                </tr>
                <? foreach($flightSchedulesCancel as $flightSchedule): ?>

                <tr>
                    <td class='agents'><?=$flightSchedule['Flight']['name'];?> </td>
                    <td class='agents'><?=$flightSchedule['DepartureDestination']['code'];?></td>
                    <td class='agents'><?=$flightSchedule['DepartureTerminal']['name'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['departure_time'];?></td>
                    <td class='agents'><?=$flightSchedule['ArrivalDestination']['code'];?></td>
                    <td class='agents'><?=$flightSchedule['ArrivalTerminal']['name'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['arrival_time'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['frequency'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['period'];?></td>
                    <td class='agents'><?=$flightSchedule['FlightSchedule']['stops'];?></td>
                </tr>
                <? endforeach;?>
                <? endif;?>
            </tbody>
        </table>

    <? endif; ?>
</div>
<script>

    $($(".agents")).showFilter("table tbody tr", { criteria: function(e) { return [e.children(".agents").text()]; } });
</script>
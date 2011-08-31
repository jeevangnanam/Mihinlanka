<div id="contentInner">
    <h2><?= __("Flight Destinations"); ?></h2><br /><br />


    <section id="services">
        <div class="flightList" style="float:left;">
        <ol>
        <?
        foreach ($destinations as $destination):
        ?>
            <li> <?= $destination['Destination']['place'] . " <font face='times'>- " . $destination['Destination']['code'] . "</font><br />";?></li>
        <?
        endforeach;
        ?>
        </ol>
        </div>
        <div style="float:right;">
            <a href="/img/Route_Map_zoom.jpg" rel="facebox"  ><img src="/img/Route_Map_mid.jpg" /></a>
        </div>
    </section>

</div>    <div id="buttons">
        <p><a title="Flight schedules" href="/pages/flight-schedule"><?= __("Flight Schedule"); ?> <img src="/img/icons/flight1.gif" /></a>


    </div>
<?= $html->meta('description', 'All the timings of the Mihin Lanka flights , Flight time to Dubai , Male , Dhaka , Trichi , Gaya , Varanasi , Kuwait , Jakarta ', array('type' => 'description', 'inline' => false)); ?>
 <?if(!isset($language) or $language == 'eng'): ?>
<div id="contentInner">
    <div id="services">
    <h2>Arrivals & Departures</h2>
    We are committed to ensuring not only that your flight is pleasant, but also that the entire process from the moment of entering the airport is hassle-free and effortless. 
Therefore, all our check-in counters are open 3 hours prior to departure and close 45 minutes prior to departure, giving you ample time to check-in.

    <br /><br /><br />

    <div class="section">
    <h3>Special arrangements exclusively for Mihin Lanka passengers at Bandaranaike International Airport</h3>
    <div >
    <ol>

        <li><p>Check-in Counters especially designated to Mihin Lanka – Counters 33, 34, 35 

Note – It is faster to get to the check-in counters through the second security check to the left, as you enter.
<p></li>
        <li><p>Boarding Gate – Check boarding pass and flight information display screens for precise boarding gate.</p></li>
        <li><p>Dedicated Baggage Belt for Arrival – Belt no 5 located on the Ground Floor.</p></li>
    </ol><br />
    </div>
    </div>


        <div class="message">
        <div>For more information on assistance for first time travelers and passengers requiring special support, please contact +94 (0)773 865 312.</div>
        </div>
  
   <br /><br />
    <div class="section">
        <h3>Emergency Contact Numbers</h3>

        <ol>
            <li><p>Bandaranaike International Airport (Colombo Office)  24hour hotline – +94117800452/453 or +94 (0) 773 865 312</p></li>
            <li>* Mishandled Baggage - +94 (0)772 440 520</li>
            <li>Call Canter (Information on flight delays and any other assistance) - +94 112 00 22 55 or +94 (0) 773 865 312</li>
        </ol>


    </div>
     
    <div class="section"><br /><br />
    	<h3>Jakarta Airport Tax</h3>
        <br />
        Jakarta Airport Tax amounting to approximately IDR 150,000 or USD 20 is to be paid at Jakarta Departure Terminal (Not included in air fare).
        </div>
    
</div>

<?else: ?>
<?= $this->element("translate/$language/pages/arrivals_and_departures"); ?>
    <?endif;?>
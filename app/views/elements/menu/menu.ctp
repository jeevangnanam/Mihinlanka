<ul id="topnav">
    <li> <a href="/" class="home">Home</a> </li>
    <li> <a href="#" class="flights">Flights</a>
        <div class="sub">
            <ul style="width:200px;">


                <li><?= $html->link(__("Flight Schedule",true),array("controller" => "pages", "action" => "flight_schedule","language" => $language)); ?></li>
                <li><?= $html->link(__("Destination",true),array("controller" => "destinations","language" => $language)); ?> </li>
                <li><?= $html->link(__("Baggage allowance",true),array("controller" => "pages","action" => "baggage_allowance", "language" => $language)); ?></li>
                <li><?= $html->link(__("On-Board Service",true),array("controller" => "pages","action" =>"on_board_service","language" => $language)); ?></li>
                <li><a href="/pages/arrivals-and-departures" title="Arrivals and Departures"><?= __("Arrivals Departures");?></a></li>
                <li><a href="/pages/duty-free-service-in-mihinlanka" title="Duty Free"><?= __("Duty Free");?></a></li>
                <li><a href="/pages/mihinlanka-faq" title="FAQ"><?= __("FAQ");?></a></li>
            </ul>
        </div>
    </li>
    <li> <a href="#" class="bookings">Bookings</a>
        <div class="sub">
            <div class="row">
                <ul style="width: 200px;">
                    <li><a href="/pages/how-to-book-in-mihinlanka"><?= __("How to book");?></a></li>
                    <li><a href="/pages/payment-options"><?= __("Payment options");?></a></li>
                    <li><a href="/pages/travelagents"><?= __("Travel Agents");?></a></li>
                    
                    <li><a href="/pages/travel-regulations"><?= __("Travel Regulations");?></a></li>
                    <li><a href="/pages/packages"><?= __("Packages");?></a></li>
                    <li><a href="/pages/mihinlanka-faq"><?= __("FAQ");?></a></li>
                </ul>

            </div>
        </div>
    </li>
    <li> <a href="#" class="contactus">Contact Us</a>

        <div class="sub">
            <div class="row">
                <ul style="width: 200px;">
                    <li><a href="/pages/travelagents"><?= __("Travel Agents");?></a></li>
                    <li><a href="/pages/mihinlanka-offices"><?= __("Our offices");?></a></li>
                    <li><a href="/pages/mihinlanka-call-centers"><?= __("Call center");?></a></li>
                    <li><a href="/pages/feedback-centers"><?= __("Feedback center");?></a></li>
                    <li><a href="/feedback"><?= __("Feedback");?></a></li>
                    <li><a href="/downloads/forms"><?= __("Downloads");?></a></li>

                </ul>

            </div>
        </div>
    </li>
    <li> <a href="#" class="about_mihin">About Mihin</a>

        <div class="sub">
            <div class="row">
                <ul style="width: 200px;">
                    <li><a href="/pages/about-mihinlanka"><?= __("Mihinlanka");?></a></li>
                    <li><a href="/pages/airline-careers-in-srilanka"><?= __("Careers");?></a></li>
                </ul>

            </div>
        </div>
    </li>
    <li id="promo">
        <a href="/promotions" class ="promotions" title="Promotions">Promotions</a>
    </li>
</ul>
<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */


Router::connect('/:language/:controller/:action/*', array(),array('language' => '[a-z]{3}'));
Router::connect('/:plugin/:language/:controller/:action/*', array(),array('language' => '[a-z]{3}'));


Router::connect('/', array('controller' => 'pages', 'action' => 'home', 'home'));


/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
Router::connect('/pages/flight-schedule/*', array('controller' => 'pages', 'action' => 'flight_schedule'));
Router::connect('/pages/destinations/*', array('controller' => 'pages', 'action' => 'destinations'));
Router::connect('/pages/baggage-allowance/*', array('controller' => 'pages', 'action' => 'baggage_allowance'));
Router::connect('/pages/on-board-service/*', array('controller' => 'pages', 'action' => 'on_board_service'));
Router::connect('/pages/arrivals-and-departures/*', array('controller' => 'pages', 'action' => 'arrivals_and_departures'));
Router::connect('/pages/mihinlanka-faq/*', array('controller' => 'pages', 'action' => 'faq'));
Router::connect('/dubai-shopping-festival/*', array('controller' => 'pages', 'action' => 'dubai_shopping_festival'));
Router::connect('/how-to-book-mihin-lanka/*', array('controller' => 'pages', 'action' => 'how_to_book_video'));

Router::connect('/pages/how-to-book-in-mihinlanka/*', array('controller' => 'pages', 'action' => 'how_to_book'));
Router::connect('/pages/payment-options/*', array('controller' => 'pages', 'action' => 'payment_options'));
Router::connect('/pages/travelagents/*', array('controller' => 'pages', 'action' => 'travelagents'));
Router::connect('/pages/mihinlanka-fares/*', array('controller' => 'pages', 'action' => 'fares'));
Router::connect('/pages/travel-regulations/*', array('controller' => 'pages', 'action' => 'travel_regulations'));
Router::connect('/pages/packages/*', array('controller' => 'pages', 'action' => 'packages'));
Router::connect('/pages/duty-free-service-in-mihinlanka/*', array('controller' => 'pages', 'action' => 'duty_free'));
Router::connect('/pages/duty-free/*', array('controller' => 'pages', 'action' => 'duty_free'));
Router::connect('/sharjah10/*', array('controller' => 'pages', 'action' => 'sharjah10'));
Router::connect('/pages/paybycash/*', array('controller' => 'pages', 'action' => 'paybycash'));


Router::connect('/pages/mihinlanka-offices/*', array('controller' => 'pages', 'action' => 'offices'));
Router::connect('/pages/mihinlanka-call-centers/*', array('controller' => 'pages', 'action' => 'callcenters'));
Router::connect('/pages/feedback-centers/*', array('controller' => 'pages', 'action' => 'feedback_centers'));



Router::connect('/pages/about-mihinlanka/*', array('controller' => 'pages', 'action' => 'about'));
Router::connect('/pages/airline-careers-in-srilanka/*', array('controller' => 'pages', 'action' => 'careers'));
Router::connect('/pages/mihinlanka-location-map/*', array('controller' => 'pages', 'action' => 'location_map'));
Router::connect('/pages/how-to-book-guide/*', array('controller' => 'pages', 'action' => 'how_to_book_guide'));
Router::connect('/pages/packages-to-maldives/*', array('controller' => 'pages', 'action' => 'packages_to_maldives'));


//travel reviews
Router::connect('/pages/srilanka_travel_review/*', array('controller' => 'pages', 'action' => 'srilanka_travel_review'));
Router::connect('/pages/dubai_travel_review/*', array('controller' => 'pages', 'action' => 'dubai_travel_review'));

Router::connect('/pages/gaya_travel_review/*', array('controller' => 'pages', 'action' => 'gaya_travel_review'));
Router::connect('/pages/varanasi_travel_review/*', array('controller' => 'pages', 'action' => 'varanasi_travel_review'));
Router::connect('/pages/tiruchirapalli_travel_review/*', array('controller' => 'pages', 'action' => 'tiruchirapalli_travel_review'));
Router::connect('/pages/kuwait_travel_review/*', array('controller' => 'pages', 'action' => 'kuwait_travel_review'));
Router::connect('/pages/maldives_travel_review/*', array('controller' => 'pages', 'action' => 'maldives_travel_review'));
Router::connect('/pages/dhaka_travel_review/*', array('controller' => 'pages', 'action' => 'dhaka_travel_review'));
Router::connect('/pages/jakarta_travel_review/*', array('controller' => 'pages', 'action' => 'jakarta_travel_review'));
Router::connect('/pages/shajah_travel_review/*', array('controller' => 'pages', 'action' => 'shajah_travel_review'));

Router::connect('/pages/gaya_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/srilanka_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/dakha_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/dubai_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/jakarta_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/kuwait_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/maldives_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/tiruchirapalli_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/varanasi_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/shajah_shopping_popup/*', array('controller' => 'pages', 'action' => 'gaya_shopping_popup'));
Router::connect('/pages/mihin-holidays/*', array('controller' => 'pages', 'action' => 'holidays'));
Router::connect('/pages/glimpse-of-sri-lanka/*', array('controller' => 'pages', 'action' => 'glimpse_of_sri_lanka'));
Router::connect('/pages/srilanka-at-a-glance/*', array('controller' => 'pages', 'action' => 'srilanka_at_a_glance'));



Router::connect('/pages/mc_add/*', array('controller' => 'pages', 'action' => 'mc_add'));
Router::connect('/pages/mc_remove/*', array('controller' => 'pages', 'action' => 'mc_remove'));


Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));





Router::connect('/promotions/index', array('controller' => 'promotions', 'action' => 'index'));
Router::connect('/promotions/mihinlanka-hsbc-promotion-one', array('controller' => 'promotions', 'action' => 'hsbc_promotion_one'));
Router::connect('/promotions/mihinlanka-jakarta-promotion-one', array('controller' => 'promotions', 'action' => 'jakarta_promotion_one'));



Router::connect('/survey/*', array('controller' => 'survey_users', 'action' => 'index'));


/* Admin routs */


Router::connect('/admin/pages/home', array('plugin' => 'admin', 'controller' => 'pages', 'action' => 'home'));
Router::connect('/admin/pages/*', array('plugin' => 'admin', 'controller' => 'pages', 'action' => 'home'));
Router::connect('/admin', array('plugin' => 'admin', 'controller' => 'users', 'action' => 'login'));


/* Custom routs - old mihinlanka site */


Router::connect('/terms-conditions.htm', array('controller' => 'pages', 'action' => 'display', 'mihinlanka-terms-and-conditions'));
Router::connect('/conditions_of_carriage.htm', array('controller' => 'pages', 'action' => 'display', 'conditions-of-carriage'));
Router::connect('/duty-free.htm', array('controller' => 'pages', 'action' => 'duty_free'));
Router::connect('/call-centres.htm', array('controller' => 'pages', 'action' => 'callcenters'));
Router::connect('/baggage-allowance.htm', array('controller' => 'pages', 'action' => 'baggage_allowance'));
Router::connect('/our-offices.htm', array('controller' => 'pages', 'action' => 'offices'));
Router::connect('/on-board-service.htm', array('controller' => 'pages', 'action' => 'on_board_service'));
Router::connect('/flight-schedule.htm', array('controller' => 'pages', 'action' => 'flight_schedule'));
Router::connect('/special-offers.htm', array('controller' => 'promotions', 'action' => 'index'));
Router::connect('/Packages.htm', array('controller' => 'pages', 'action' => 'packages'));
Router::connect('/destinations.htm', array('controller' => 'destinations', 'action' => 'index'));
Router::connect('/about-mihin-lanka.htm', array('controller' => 'pages', 'action' => 'about'));
Router::connect('/Dubai_visa.htm', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/arrivals-departures.htm', array('controller' => 'pages', 'action' => 'arrivals_and_departures'));


/*
 * new action for holiday packages
 */

Router::connect('/holidays/glimpse-of-sri-lanka/*', array('controller' => 'holidays', 'action' => 'glimpse_of_sri_lanka'));
Router::connect('/holidays/srilanka-at-a-glance/*', array('controller' => 'holidays', 'action' => 'srilanka_at_a_glance'));
Router::connect('/holidays/jakarta-tour-2days-3night/*', array('controller' => 'holidays', 'action' => 'jakarta_tour_2'));
Router::connect('/holidays/jakarta-tour-3days-4night/*', array('controller' => 'holidays', 'action' => 'jakarta_tour_3'));

/* Custom routs ends */


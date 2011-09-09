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


Router::connect('/pages/how-to-book-in-mihinlanka/*', array('controller' => 'pages', 'action' => 'how_to_book'));
Router::connect('/pages/payment-options/*', array('controller' => 'pages', 'action' => 'payment_options'));
Router::connect('/pages/travelagents/*', array('controller' => 'pages', 'action' => 'travelagents'));
Router::connect('/pages/mihinlanka-fares/*', array('controller' => 'pages', 'action' => 'fares'));
Router::connect('/pages/travel-regulations/*', array('controller' => 'pages', 'action' => 'travel_regulations'));
Router::connect('/pages/packages/*', array('controller' => 'pages', 'action' => 'packages'));
Router::connect('/pages/duty-free-service-in-mihinlanka/*', array('controller' => 'pages', 'action' => 'duty_free'));
Router::connect('/pages/duty-free/*', array('controller' => 'pages', 'action' => 'duty_free'));




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


Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));





Router::connect('/promotions/index', array('controller' => 'promotions', 'action' => 'index'));
Router::connect('/promotions/mihinlanka-hsbc-promotion-one', array('controller' => 'promotions', 'action' => 'hsbc_promotion_one'));
Router::connect('/promotions/mihinlanka-jakarta-promotion-one', array('controller' => 'promotions', 'action' => 'jakarta_promotion_one'));
Router::connect('/promotions/*', array('controller' => 'promotions', 'action' => 'display'));


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





/* Custom routs ends */


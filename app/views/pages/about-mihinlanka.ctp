<?= $html->meta('description', 'Learn more about the national airline in Sri Lanka.', array('type' => 'description', 'inline' => false)); ?>
 <?if(!isset($language) or $language == 'eng'): ?>
 
<div id="contentInner">
    <h2>Mihin Lanka</h2><br /><br />

    <div id="services">
       <div class="article">
           <h3>About mihin..</h3>
           <div>
The world beyond… within reach.<br /><br />

Mihin Lanka is the budget airline of the Democratic Socialist Republic of Sri Lanka and commenced its operations on 24th April 2007.<br /><br />

Traveling overseas is no more a seldom materialized dream as Mihin Lanka has ventured through the barriers of affordability and provided an economical and cost-effective solution to people from all walks of life. It is in fact not simply a cheaper option but indeed an affordable, value for money option, at the end of which your satisfaction is guaranteed.<br /><br />

Traveling with Mihin Lanka is an experience of itself as our cordial and well trained staff are committed to ensuring you have a pleasant flight and are at all times comfortable. Your convenience and comfort is indeed our highest priority. In fact, we are the only budget airline that serves complimentary refreshments to our valued passengers, complementing their travel experience with us.<br /><br />

Mihin Lanka is represented by appointed General Sales Agents in India, Dubai, Maldives, Kuwait ,Dhaka and Jakarta. In Sri Lanka we have more than 100 active agents out of which 75 agents are registered with us and actively promoting our services.<br /><br />

Mihin Lanka operates its international flights from Bandaranaike International Airport and the airport is equipped with up-to-date aircraft landing systems. It also boasts modern facilities and terminals where passengers are offered a wide range of services.<br /><br />

Our aim is to establish and continue long-term and reliable business contacts as we strive towards going beyond simply meeting the expectations of our valued passengers. We understand that it is all about them and take every endeavour to ensure their utmost fulfillment is guaranteed.<br /><br />


           </div>
       </div>
    </div>

</div>
<?else: ?>
<?= $this->element("translate/$language/pages/about-mihinlanka"); ?>
    <?endif;?>
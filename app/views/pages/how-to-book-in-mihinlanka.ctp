<?if(!isset($language) or $language == 'eng'): ?>
<div id="contentInner">
    <h2>How to Book</h2><br />  
Booking your flight through Mihin Lanka is one of the simplest tasks in planning out your trip, as we have a wide range of options to suit your preference. Your convenience and providing you with the best service is always our foremost priority.<br /><br />
Therefore, you can book a flight for yourself, your family or friends by adopting any of the following methods:

<br /><br /><br />
<table width="100%" border="0"  class="formatTable">
  <tr>
    <td width="50%"><b>Online</b><br /> Purchase your ticket online in the convenience of your living room. The relevant e-Ticket will be emailed to you immediately confirming such booking.</td>
    <td width="50%"><b>Call Center</b><br />Call Mihin Lanka's Call Centre in Colombo <br /><br />(Within Sri Lanka) dial: (0)11 2 00 22 55 <br />(Outside Sri Lanka) dial: +94 112 00 22 55
</tr>
  <tr>
    <td width="50%"><b>Sales Offices</b><br />Visit any of Mihin Lanka's Sales Offices to purchase your ticket over the counter.</td>
    <td width="50%"><b>Travel Agents</b><br />Purchase your ticket through one of Mihin Lanka's preferred Travel Agents.</td></tr>
</table>
<?else: ?>
<?= $this->element("translate/$language/pages/how-to-book-in-mihinlanka"); ?>
    <?endif;?>
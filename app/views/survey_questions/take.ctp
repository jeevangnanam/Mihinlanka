<div id="contentInner">
    <?if(isset($surveyUserName)): ?>
    <h2 style="color: #009900">Thank you <?=$surveyUserName;?>.Please answer the following questions..</h2><br /><br />

    <?endif;?>
    <?if(isset($error)): ?>
    <div class="error"><?=$error;?></div>

    <?endif;?>
  <form name="form1" method="post" action="">
    <table width="100%" border="0" cellpadding="10" cellspacing="5" id="survey">
      <tr>
        <td colspan="2" align="center"><h3><img src="/img/icons/world.png" /> &nbsp;WEBSITE RELATED QUESTIONS</h3></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>How did you get to know of the Mihin Lanka Website?</h2></td>
      </tr>
      <tr>
        <td colspan="2"><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="1[]" type="checkbox"  value="Search Engine">
              <label for="1[]">Search Engine</label></td>
            <td><input name="1[]" type="checkbox"  value="Facebook">
              <label for="1[]">Facebook</label></td>
          </tr>
          <tr>
            <td><input name="1[]" type="checkbox"  value="Advertisement">
              <label for="1[]">Advertisement</label></td>
            <td><input name="1[]" type="checkbox" id="checkbox5" value="Word of Mouth">
              <label for="2[]">Word of Mouth</label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Other
              <label for="how_did_you_know_mihin_web"></label>
              <input type="text" name="how_did_you_know_mihin_web" id="how_did_you_know_mihin_web"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>What is your main objective of visiting the Mihin Lanka Website?</h2></td>
      </tr>
      <tr>
        <td><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="2[]" type="checkbox"  value="To book a ticket">
              <label for="2[]">To book a ticket</label></td>
            <td><input name="2[]" type="checkbox" id="checkbox6" value="To find out your contact details">
              To find out your contact details
              <label for="2[]"></label></td>
          </tr>
          <tr>
            <td><input name="2[]" type="checkbox" id="checkbox7" value="To get more information about mihinlanka">
              <label for="6[]">To get more information about mihinlanka</label></td>
            <td><input name="2[]" type="checkbox" id="checkbox8" value="To see what are the promotions that you are having">
              <label for="7[]">To see what are the promotions that you are having</label></td>
          </tr>
          <tr>
            <td><input name="2[]" type="checkbox" id="checkbox9" value="Career Opportunities">
              Career Opportunities</td>
            <td><input name="2[]" type="checkbox" id="checkbox10" value="Just passing through">
              Just passing through</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>Please rank your opinion about the Mihin Lanka website on the below scale (1 Poor – 5 Excellent)</h2></td>
      </tr>
      <tr>
        <td><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input type="radio" name="3" id="radio" value="Poor">
              Poor</td>
            <td><input type="radio" name="3" id="radio2" value="Satisfactory">
              Satisfactory</td>
            <td><input type="radio" name="3" id="radio3" value="Good">
              Good</td>
            <td><input type="radio" name="3" id="radio4" value="Very good" checked>
              Very good</td>
            <td><input type="radio" name="3" id="radio5" value="Excellent">
              Excellent</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><br /><br /><br /><h3><img src="/img/icons/flight.gif" /> &nbsp;ONLINE BOOKING RELATED</h3></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>Have you booked online with Mihin Lanka before?</h2></td>
      </tr>
      <tr>
        <td><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input type="radio" name="4" id="radio11" value="YES" checked>
              YES</td>
            <td><input type="radio" name="4" id="radio12" value="NO">
              No</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><div class="_temp"><h2>How many times?</h2></div></td>
      </tr>
      <tr>
        <td>
            <div class="_temp">
            <table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="5" type="radio"   value="1-3" >
              <label for="5[]">1-3</label></td>
          </tr>
          <tr>
            <td><input name="5" type="radio"   value="4-6">
              <label for="5[]">4-6</label></td>
          </tr>
          <tr>
            <td><input name="5" type="radio"   value="More than 7 times">
              More than 7 times</td>
          </tr>
        </table>

            </div>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>What is the main reason of your travel?</h2></td>
      </tr>
      <tr>
        <td><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="6[]" type="checkbox" id="checkbox16" value="Business">
              <label for="checkbox16">Business</label></td>
            <td><input name="6[]" type="checkbox" id="checkbox17" value="Visiting friends and family">
              Visiting friends and family
              <label for="checkbox17"></label></td>
          </tr>
          <tr>
            <td><input name="6[]" type="checkbox" id="checkbox18" value="Holiday">
              <label for="checkbox18">Holiday</label></td>
            <td><input name="6[]" type="checkbox" id="checkbox19" value="Religious">
              <label for="checkbox19">Religious</label></td>
          </tr>
          <tr>
            <td> Other
              <label for="main_reason_of_your_travel"></label>
              <input type="text" name="main_reason_of_your_travel" id="main_reason_of_your_travel"></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>What made you choose Mihin Lanka over another airline?</h2></td>
      </tr>
      <tr>
        <td><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="7[]" type="checkbox" id="checkbox20" value="Air Fare">
              <label for="checkbox20">Air Fare</label></td>
            <td><input name="7[]" type="checkbox" id="checkbox21" value="Service">
              Service
              <label for="checkbox21"></label></td>
          </tr>
          <tr>
            <td> Other
              <label for="main_reason_of_your_travel"></label>
              <input type="text" name="what_made_to_choose_mihinlanka" id="textfield2"></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F0F0F0"><h2>Please rank your experience in booking online on the below scale (1 Poor – 5 Excellent)</h2></td>
      </tr>
      <tr>
        <td><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input type="radio" name="8"   value="poor">
              Poor</td>
            <td><input type="radio" name="8"   value="ok">
              Ok</td>
            <td><input type="radio" name="8"   value="good"  >
              Good</td>
            <td><input type="radio" name="8"   value="verygood" checked>
              Very good</td>
            <td><input type="radio" name="8"   value="excellent">
              Excellent</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">Please leave your comments</td>

      </tr>
      <tr>
        
        <td colspan="2"><textarea name="9" id="9" cols="40" rows="4"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="button" id="button" value="Submit answers.."></td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
<script>
    $('#radio11').click(function() {
$('._temp').show(400);
        
});

$('#radio12').click(function() {

        $('._temp').hide(400);
});
    </script>
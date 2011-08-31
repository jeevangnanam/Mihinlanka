<div id="contentInner">
<?php echo $this->Form->create('SurveyUser');?>
<br /><br />
        <div class="graybox"  ><img src='../img/icons/comments.png' style="margin-right:5px"/>We would greatly appreciate if you can take a few moments to complete the below survey form from Mihin Lanka</div><br /><br />
        <table class="tblStyle" cellpadding="0" cellspacing="0" width="100%">
        <tr></tr>

        <tr>
            <td width="15%" align="right"> Name :
            </td>
            <td> <?php echo $this->Form->input('name',array('label' => false,'size' => 50)); ?>
            </td>
        </tr>
        
        <tr>
            <td width="15%" align="right"> Email :
            </td>
            <td> <?php echo $this->Form->input('email',array('label' => false,'size' => 50)); ?>
            </td>
        </tr>
        
        <tr>
            <td width="15%" align="right"> Country :
            </td>
            <td> <?php echo $this->Form->input('country_id',array('label' => false)); ?>
            </td>
        </tr>
        
        <tr>
            <td width="15%" align="right"> Age group :
            </td>
            <td> <?php echo $this->Form->input('age_group',array('label' => false,'type' => 'select', 'options' => array('Below 18' => 'Below 18', '18-25' => '18-25' ,'26-34' => '26-34' , '35-54' => '35-54' , 'Over 55' => 'Over 55'))); ?>
            </td>
        </tr>
        
        
        <tr>
            <td width="15%" align="right"> Profession :
            </td>
            <td> <?php echo $this->Form->input('profession',array('id' => 'profession','label' => false,'type' => 'select', 'options' => array('Business Owner' => 'Business Owner', 'Professional-senior Management' => 'Professional-senior Management' ,'Professional-Non Executive' => 'Professional-Non Executive' , 'Housewife/unemployed' => 'Housewife/unemployed' , 'Consultant/Free Lance' => 'Consultant/Free Lance' , 'Other(please specify)' => 'Other(please specify)'))); ?>
            <?php echo $this->Form->input('other_profession',array('label' => false,'disabled' => true,'style' => 'margin-left:3px', 'size' => 31)); ?>
            </td>
        </tr>
            <tr>
                <td>
                </td>
                
                <td align="right">
                    <?php echo $this->Form->input('date',array('label' => false,'type' => 'hidden' ,'value' => date('Y-m-d h:i:s'))); ?>
                   <input  name="send" type="submit" value="Begin Survey >>"  style="padding:4px;"/></p>
                </td>
            </tr>
        </table>
	

<?php echo $this->Form->end();?>
</div>
<script>
    $('#profession').change(function() {
        if($("#profession option:selected").text() == 'Other(please specify)'){

            $('#SurveyUserOtherProfession').attr('disabled', '');
            $('#profession').attr('name','temp');
            $('#SurveyUserOtherProfession').attr('name','data[SurveyUser][profession]');
        }else{
             $('#SurveyUserOtherProfession').attr('disabled', 'disabled');
             $('#profession').attr('name','data[SurveyUser][profession]');
            $('#SurveyUserOtherProfession').attr('name','temp');
        }
});
    </script>
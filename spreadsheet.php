<?php
$sfirstname = $_GET['firstname']; 
$slastname = $_GET['lastname']; 
$semail = $_GET['email']; 
$sphone = $_GET['phone'];
$sappliedBefore = $_GET['appliedBefore'];
$sinterests = $_GET['interests'];
$sexperience = $_GET['experience'];

?>

<body onload="document.ss-form.submit();">

<div class="ss-form"><form action="https://docs.google.com/forms/d/19hIrjQCzu5sC6VgLaHBDb8iuKH6RMzeiGkJ8tjdItsI/formResponse" method="POST" id="ss-form" target="_self" onsubmit="" style="display:none;" ><ol role="list" class="ss-question-list" style="padding-left: 0">
<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1509527711"><div class="ss-q-title">firstname
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1509527711" value='<?php echo $sfirstname ?> ' class="ss-q-short" id="entry_1509527711" dir="auto" aria-label="firstname  " title="">
<div class="error-message" id="1197553984_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_235241312"><div class="ss-q-title">lastname
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.235241312" value='<?php echo $slastname?>' class="ss-q-short" id="entry_235241312" dir="auto" aria-label="lastname  " title="">
<div class="error-message" id="1959102452_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_384549494"><div class="ss-q-title">email
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.384549494" value='<?php echo $semail ?>' class="ss-q-short" id="entry_384549494" dir="auto" aria-label="email  " title="">
<div class="error-message" id="810403916_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_644064012"><div class="ss-q-title">phone
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.644064012" value='<?php echo $phone ?>' class="ss-q-short" id="entry_644064012" dir="auto" aria-label="phone  " title="">
<div class="error-message" id="1068537643_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1577836567"><div class="ss-q-title">FirstTimeApplication
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1577836567" value='<?php echo $sappliedBefore ?>'class="ss-q-short" id="entry_1577836567" dir="auto" aria-label="FirstTimeApplication  " title="">
<div class="error-message" id="238778372_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1703427045"><div class="ss-q-title">interests
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1703427045" value='<?php echo $sinterests ?>'  class="ss-q-short" id="entry_1703427045" dir="auto" aria-label="interests  " title="">
<div class="error-message" id="299107938_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1534936843"><div class="ss-q-title">experience
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1534936843" value='<?php echo $sexperience ?>' class="ss-q-short" id="entry_1534936843" dir="auto" aria-label="experience  " title="">
<div class="error-message" id="1587149168_errorMessage"></div>
<div class="required-message">This is a required question</div>
</div></div></div>
<input type="hidden" name="draftResponse" value="[,,&quot;-5035750193493916797&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fvv" value="0">


<input type="hidden" name="fbzx" value="-5035750193493916797">

<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
</td>
</tr></tbody></table></div></ol></form></div>

</body>

<script type="text/javascript">
window.onload = function() {

document.getElementById("ss-form").submit();
}


</script> 

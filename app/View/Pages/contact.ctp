<?php 
	// File from app/View/Elements
	echo $this->element('header');
?>



<div id="top-content" class="row">

	<div class="span5">
		<h1>Contact</h1>
		<center><?php echo $this->Html->image('parfait-logo.png', array('width' => 380, 'height'=>380, 'alt' => 'Parfait Logo')); ?></center>
		<p></p>
		<p>Questions, comments, concerns?  Email <a href="mailto:parfaituva@gmail.com">parfaituva@gmail.com</a>!</p>
		
	</div>
</div>


<div id="main-content" class="row">
	<div class = "span9">
	<!-- This is where we'll have current activities/announcements? Flexible - let me know what you all think would be useful -->
	<p>Suscribe to Parfait's listserv by entering your email address here:</p>
	<?php
	/*<form style="padding-top:14px;padding-left:6px;padding-bottom:14px;" action="http://feedburner.google.com/fb/a/mailverify" class="emailform" method="post" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=reddtechblog', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow">
		<input class="emailText" name="email" onblur="if (this.value == &quot;&quot;) {this.value = &quot;Enter your email...&quot;;}" onfocus="if (this.value == &quot;Enter your email...&quot;) {this.value = &quot;&quot;}" type="text" value="Enter your email...">
		<input alt="" class="emailButton" title="" type="submit" value="SignUp">
	</form>*/
	?>
	
	<?php
		
		
		
		// Please specify your Mail Server - Example: mail.yourdomain.com.
		ini_set("SMTP","mail.virginia.edu");

		// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
		ini_set("smtp_port","25");

		// Please specify the return address to use
		//ini_set('sendmail_from', $_REQUEST['email']);
		
		if (isset($_REQUEST['email']))
		//if "email" is filled out, send email
		{
		  //send email
		  $email = $_REQUEST['email'] ;
		  $subject = $_REQUEST['subject'] ;
		  //$message = $_REQUEST['message'] ;
		  $message = "";
		  mail("mdl8pd@virginia.edu", $subject,
		  $message, "From:" . $email);
		  echo "Thank you for suscribing to the Parfait listserv!";
		}
		else
		//if "email" is not filled out, display the form
		{
		  /*echo "<form method='post' action='contact'>
		  Email: <input name='email' type='text'><br>
		  Subject: <input name='subject' type='text'><br>
		  Message:<br>
		  <textarea name='message' rows='15' cols='40'>
		  </textarea><br>
		  <input type='submit'>
		  </form>";*/
		  echo "<form method='post' action='contact'>
		  Email: <input name='email' type='text'><br>
		  Subject: <input name='subject' type='text'><br>
		  <input type='submit'>
		  </form>";
		}
		
		
	?>
	
	
	<?php
		//echo('<button type="button" onclick="alert(\'Your email address was successfully sent!\');">Add me to the Parfait listserv</button>');
		//echo('<button id="fat-btn" onclick="alert(\'You were successfully added to the Parfait listserv\');" data-loading-text="sending..." class="btn btn-primary">Add me to the Parfait listserv </button>');
	?>
	<p></p>
	<p>If you are currently suscribed to Parfait's listserv but would like to unsuscribe, please enter your email address here:</p>
	<?php
		//echo('<button type="button" onclick="alert(\'Your email address was successfully sent!\');">Add me to the Parfait listserv</button>');
		echo('<button id="fat-btn" onclick="alert(\'You were successfully removed from the Parfait listserv\');" data-loading-text="sending..." class="btn btn-primary">Remove me from the Parfait listserv (Sorry to see you go!) </button>');
	?>
	</div>
</div>

<?php
	// File from app/View/Elements
	echo $this->element('footer');
?>

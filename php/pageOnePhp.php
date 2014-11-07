<?php include "../templates/top.php" ?>

		<strong> API in PHP </strong>
		<p>
		THIS PAGE HAS ONE FORM WHERE TO INSERT A "KEY" AND SOME TEXT THAT IS GOING TO BE RETRIEVED LATER.
		<br/>
		Please note that the your_key is the primary key in the database, so make it unique to avoid errors
		Also <strong> DO NOT USE your real passwords, </strong> this site is not secure
		<br/>
	<br/>
		<form name="pageTwophp" id="pageTwoPhpId" action="" method="post">
			<label>Your&nbsp;Key:</label> 
				<input required type="text" name="key" id="key" maxlength=25 size=30 tabindex=1 /></br></br>
			<label>Comment:</label> 
				<input required type="text" name="comment" id="comment" size= 30 maxlength=255 tabindex=2 /></br>
			
			<input type="submit" name="submitForm" id="submitForm" value="Send form"  />
		</form>
		<?php 
		if(isset($_POST['submitForm']))
		{
			include "doStuffWithForm.php"	;
		}
		?>

		<p>
		What I have also done is to create the API so that if send the URI http://www.fc572.me/php/api.php?your_key={your_key} 
		</br> then it will return the comment 			that you have been inserted in the previous form
		</p>
		
	<!--div class="linkButtonLeft"> <a href="pageOnePhp.php"> Prev </a> </div--> 
	<div class="linkButtonRight"> <a href="pageTwoPhp.php"> Next </a> </div>
		</div><!--centre-->
<?php include "../templates/bottom.php"?>

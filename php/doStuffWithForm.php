<?php
//in here it should send the value of the form to a database

		if(validateInput($_POST['key']))
		{
				if(validateInput($_POST['comment']))
				{
					$your_key = $_POST['key'];
					$comment = $_POST['comment'];
					
					if(connectAndAddToComments($your_key,$comment))
					{
						?><div class="comment box"> "The record has been inserted" </div> <?php
					}
					else
					{
						echo "FAILURE";
					}
				}
				
				else 
				{
					?><div class="comment box"> "Please insert a valid comment" </div> <?php
				}
		}
		else
		{
			?><div class="comment box"> "Please insert a valid key" </div> <?php
		}

function validateInput($validateMe)
{
	if(empty($validateMe))
	{
		return False;
	}
	elseif(validateField($validateMe))
	{
		return False;
	}
	else
	{
		return True;
	}
}


function validateField($validateMe)
{
	if (preg_match("/[^a-z,A-Z,0-9,' ','@','.']/", $validateMe, $matches)) 
	{
		return True; //the regex is in negative, so if there are special chars is meant to return true so that the validation can fail
	}
	else
	{
		return False;
	}
}

function connectAndAddToComments($your_key,$comment)
{
	$link = mysqli_connect("localhost", "fcDbUser", "Zarathustra1111", "fc572Database");
	if($link)
		{
			mysqli_query($link,"INSERT INTO webdriverTest(your_key, comment) VALUES ('$your_key','$comment')");
				
			$insertedValueCount = mysqli_affected_rows($link);
			//echo "The total amount of rows affected was " .$insertedValueCount ."<br/>";
			
			mysqli_close($link);
			if($insertedValueCount >= 1)
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
		else
		{
			echo "Can't connect to localhost. Error: %s\n", mysqli_connect_error();
		}
}

?>

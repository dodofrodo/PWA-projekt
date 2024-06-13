<?php

    include "../functions/functions.php";
	
	if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_subject']) && isset($_POST['contact_message']))
	{
		
		$contact_name = test_input($_POST['contact_name']);
        $contact_email  = test_input($_POST['contact_email']);
        $contact_subject = test_input($_POST['contact_subject']);
        $contact_message = test_input($_POST['contact_message']);        

        try
        {
            mail("your email",$contact_subject,$contact_message);
            echo "<div class='alert alert-success'>";
                echo " Poruka je uspješno poslana";
            echo "</div>";
        }
        catch(Exception $ex)
        {
            echo "<div class='alert alert-warning'>";
                echo " Došlo je do greške prilikom slanja poruke, pokušajte ponovo!";
            echo "</div>";
        }

	}

?>
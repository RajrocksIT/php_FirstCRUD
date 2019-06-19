<?php
/**
 * PraviinM
 */


//Making the POST look pretty.
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    require_once("config.php");

// Assigning $_POST values to individual variables for reuse.

//This is where we can write functions to check if the firstname, lastname are names and not numbers.
//Somethinglike --- $firstname = FunctionToCheck($_POST['firstname'];
//or        $cleanFirstname  = functionToCheck($firstname); -- move the post to a variable first and then check for errors.

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['emailaddress'];




$checkfirstname = firstname_no_meta_characters($firstname);
$checklastname = lastname_no_meta_characters($lastname);
$checkemailaddress = email_format($emailaddress);

echo $checkfirstname,"<br>";
echo $checklastname,"<br>";
echo $checkemailaddress,"<br>";




    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $dob = $_POST['dateofbirth'];
    $email = $_POST['emailaddress'];

if ($checkfirstname == "No special characters please" or $checklastname == "No special characters please" or $checkemailaddress == "Invalid email format")
{echo " No data inserted";}
else{
    $newuser = createNewUser($fname, $lname, $dob, $email, $city, $zip);
    echo $newuser;
}


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
?>

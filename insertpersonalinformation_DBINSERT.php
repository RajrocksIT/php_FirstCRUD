<?php
/**
 * Rajesh
 */


//Making the POST look pretty.
echo "<pre>";
print_r($_POST);
echo "</pre>";

require_once("config.php");



$add1 = $_POST['address1'];
$add2 = $_POST['address2'];
$ssn = $_POST['ssn'];
$city = $_POST['city'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$mobile = $_POST['mobile'];



//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$personalinformation = insertpersonalinformation($add1, $add2, $ssn, $city, $country, $zip, $mobile);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
echo $personalinformation;
?>

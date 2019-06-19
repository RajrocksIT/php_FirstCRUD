<?php
/**
 * PraviinM
 */

//Create a new user

/**
 * @param $fname
 * @param $lname
 * @param $dob
 * @param $email
 * @param $city
 * @param $zip
 *
 * @return bool
 */
function createNewUser($fname, $lname, $city, $zip, $dob, $email)
{
  global $mysqli, $db_table_prefix;
  //Generate A random userid
  $character_array = array_merge(range(a, z), range(0, 9));
  $rand_string = "";
  for ($i = 0; $i < 6; $i++) {
    $rand_string .= $character_array[rand(
      0, (count($character_array) - 1)
    )];
  }
 // echo $rand_string;
 // echo $fname;
 // echo $lname;
 // echo $dob;
 // echo $email;
 // echo $city;
  //echo $zip;
  $stmt = $mysqli->prepare(
    "INSERT INTO " . $db_table_prefix . "user (
		userid,
		FirstName,
		LastName,
		City,
		Zip,
		DateOfBirth,
		EmailAddress,
		MemberSince,
		active
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		?,
		?,
        '" . time() . "',
        1
		)"
  );
  $stmt->bind_param("ssssss", $fname, $lname, $city, $zip, $dob, $email);
  $result = $stmt->execute();
  $stmt->close();
  return $result;

}




function insertpersonalinformation($add1, $add2, $ssn, $city, $country, $zip, $mobile)
{
    global $mysqli, $db_table_prefix;
    //Generate A random account id
    $character_array = array_merge(range(a, z), range(0, 9));
    $rand_string = "";
    for ($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }
    // echo $rand_string;
    // echo $add1;
    // echo $add2;
    // echo $ssn;
    // echo $city;
    // echo $country;
    //echo $zip;
    //echo $mobile;
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "userpii (
		userpiiid,
		address1,
		address2,
		ssn,
		city,
		country,
		zip,
		mobile
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("sssssss", $add1, $add2, $ssn, $city, $country, $zip, $mobile);
    $result = $stmt->execute();
    $stmt->close();
    return $result;

}


function firstname_no_meta_characters($firstname)
{
    $nameErr ="";
    $fname = $firstname;
    if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
        $nameErr = "No special characters please";
    }
    return $nameErr;
}

function lastname_no_meta_characters($lastname )
{
    $nameErr ="";
    $lname = $lastname;
    if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
        $nameErr = "No special characters please";
    }
    return $nameErr;
}

function email_format($emailaddress)
{
    $emailErr ="";
    $email = $emailaddress;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    return $emailErr;
}







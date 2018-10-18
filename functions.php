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
function createNewUser($fname, $lname, $dob, $email, $city, $zip)
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




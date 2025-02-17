<?php

include 'conn.php'; //connect to local host

$firstName = $conn->real_escape_string($_POST['firstName']); //assign variables
$lastName = $conn->real_escape_string($_POST['lastName']); //using real_escape_string to combat an sql injection attack
$postAddress = $conn->real_escape_string($_POST['postAddress']);
$phoneNum = $conn->real_escape_string($_POST['phoneNum']);
$email = $conn->real_escape_string($_POST['email']);
$category = $conn->real_escape_string($_POST['category']);
$sendMethod = $conn->real_escape_string($_POST['sendMethod']);

if($firstName == null || strlen($firstName) > 255){ //if statements to validate inputs
    echo "First name is required and must be less than 255 characters";
    exit;
}
if($lastName == null || strlen($lastName) > 255){ 
    echo "Last name is required and must be less than 255 characters";
    exit;
}
if($postAddress == null || strlen($postAddress) > 255){ 
    echo "Postal address is required and must be less than 255 characters";
    exit;
}
if($phoneNum == null || strlen($phoneNum) > 15){ 
    echo "Phone number is required and must be less than 15 characters";
    exit;
}
if($email == null || strlen($email) > 255){ 
    echo "email is required and must be less than 255 characters";
    exit;
}
if($category == null){ 
    echo "category is required";
    exit;
}
if($sendMethod == null){ 
    echo "Send method is required";
    exit;
}

//queries the database and adds the inputted values on the findMore page to the database
$conn->query("INSERT INTO CT_expressedInterest (forename, surname, postalAddress, mobileTelNo, email, sendMethod, catID) values ('$firstName', '$lastName', '$postAddress', '$phoneNum', '$email', '$sendMethod', '$category')");


//gets the categories from the CT_category database
$categoryQuery = $conn->query("SELECT * FROM CT_category WHERE catID = '$category'" );

$row = $categoryQuery->fetch_object();

$params = $_POST;
//sets value to the category description to be displayed
$params['category'] = $row->catDesc;

header("Location: success.php?". http_build_query($params));

?>
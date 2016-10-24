<?php

 
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userID"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["userID"]);
  }
  
  if (empty($_POST["userTrip"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["userTrip"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?php


    
if ($_SESSION["userID1"] == $_SESSION["userID"] && $_SESSION["classType"] == "economy") {
    echo "economy chosen";
} else if (($_SESSION["userID1"] == $_SESSION["userID"] && $_SESSION["classType"] == "Business") {
    
    echo "business chsen";
           } else (($_SESSION["userID1"] == $_SESSION["userID"] && $_SESSION["classType"] == "suits") {
        echo "suits chsen";
}
                   
    ?>

















<?php
// variable setting
$name = $_Request["Name"];
$email = $_Request["Email"];
$Phone = $_Request["Phone_no"];
$country = $_Request["Country"];
$massage = $_Request["Massage"];
 //check input fields
 if (empty($name) || empty($email) || empty($Phone) || empty($country) || empty($massage))
 {
   echo "fill all tha fields";
 }
 else{
   mail("kumarabhinay755@gmail.com", "webtech massage", $massage, "from: $name <$Email>" );
   echo "<script text="text/javascript">alert("Your massage sent sucessfully");
   window.history.log(-1)
   </script>";
 }
?>


<?php
if(isset($_POST['submit'])){
$name = $_POST['fullName'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$Message = $_POST['comment'];

$mailTo = "alifikry939@yahoo.com";
$header = "From: ".$mailFrom;
$txt = "you have reciverd email from".$name. ".\n\n".$Message;
mail($mailTo, $subject, $txt , $header);
header("location:index.php?mailsend");
}

?>
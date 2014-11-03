<?php


$email = $_POST['email'];
$phone = $_POST['tel'];
$onoma = $_POST['name'];
$msg = $_POST['comments'];

$minima = "Ο $onoma [$email] με τηλέφωνο $phone σας έστειλε το μήνυμα: /n";
$minima .= $msg;

if($msg != ''){

mail("Zografakis.ioannis@gmail.com", "Mail from Kera.gr Site", $minima);

echo "<h1>Your message has been sent</h1>";
echo "You will be redirected to the <a href=\"http://www.kera.gr\" />Home Page</a>";
echo "<script language=\"javascript\"> 
//setTimeout('location.href=\"http://www.kera.gr\"',2000); 
</script> 

";
}else{
echo "<h2>Πρέπει να γράψετε ένα κείμενο</h2>";
}




?>
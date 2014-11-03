<?php


$email = $_POST['email'];
$phone = $_POST['tel'];
$onoma = $_POST['name'];
$msg = $_POST['comments'];
$cou = $_POST['country'];

$minima = "Ο $onoma [$email] με τηλέφωνο $phone σας έστειλε το μήνυμα: /n";
$minima .= $msg;

if($msg != ''){

mail("Zografakis.ioannis@gmail.com", "Mail from Kera.gr Site", $minima);

echo "<h1>Το μήνυμα στάλθηκε!</h1>";
echo "Θα μεταφερθείτε στην <a href=\"http://www.kera.gr\" />αρχική σελίδα</a>";
echo "<script language=\"javascript\"> 
setTimeout('location.href=\"http://www.kera.gr\"',2000); 
</script> 

";
}else{
echo "<h2>Πρέπει να γράψετε ένα κείμενο</h2>";
}

?>

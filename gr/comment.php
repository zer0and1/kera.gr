<?php

$onoma = $_POST['name'];
$cou = $_POST['country'];
$msg = $_POST['comments'];


$minima = "Ο $onoma [$email]  από την χώρα: $cou σας έστειλε το μήνυμα: /n";
$minima .= $msg;

if($msg != ''){
 
mail("Zografakis.ioannis@gmail.com", "Mail from Kera.gr Site" ,$minima);

/*echo "<h1>Your comment has been submited</h1>";*/
header("Refresh: 0;url=thank_you.html");
/*
echo "Θα μεταφερθείτε στην <a href=\"http://www.kera.gr\" />αρχική σελίδα</a>";
echo "<script language=\"javascript\"> 

setTimeout('location.href=\"http://www.kera.gr\"',2000); 
</script> 

";*/

}else{
echo "<h2>You must write a text</h2>";
echo 'Θα μεταφερθείτε στην <a href=\"http://www.kera.gr/guest_book.php/" />αρχική σελίδα</a>';
}

?>

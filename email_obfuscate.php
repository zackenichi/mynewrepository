<?php 
$email = "username@sampledomain.com";
?>

<--- obfuscate via php --->

<?php 

$hidden_email = "";
for($ctr=0;$ctr<strlen($email);$ctr++){
$hidden_email .="&#" . ord($email[$ctr] . ";";
}

?>

<?php
if(!empty($hidden_email)){ ?>

<a href="mailto:"<?php echo $hidden_email; ?>">

<?php echo $hidden_email; ?>

</a>
<?php } ?>

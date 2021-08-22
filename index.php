<?php

include_once("index.html");

?>

<?php


if($_POST["message"]) {


mail("pconqueror07@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>
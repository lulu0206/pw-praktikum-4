<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$institution = $_POST['institution'];
$message = $_POST['message'];

if (!empty($email) && !empty ($message )){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $from = "received email form $name <$email> with phone number ($phone)";
        $body =  "body of message is $message";

        echo $from;
        echo $body;

    }

    else{
        echo "enter valid email";
    }
} else {
    echo "enter message anda email!";
}
?>
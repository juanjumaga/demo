<?php

$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        // demo
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match(/*demo*/) {
            // demo
        }
    }

    if (empty($_POST["email"])) {
        // demo
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var(/*demo*/)
        }
    }

    if (empty($_POST["phone"])) {
        // demo
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match(/*demo*/)
        }
    }

    if (empty($_POST["url"])) {
        /*demo*/
    } else {
        $url = test_input($_POST["url"]);
        if (!preg_match(/*demo*/)
        }
    }

    if (empty($_POST["message"])) {
        // demo
    } else {
        $message = test_input(/*demo*/);
    }

    if ($name_error === "" && /*demo*/){
        // demo
        unset(/*demo*/);
        foreach (/*demo*/){
            // demo
        }

        include "admin_mail.php";

        $to = $adminmail;
        $subject = "Contact Form Submit";
        if (/*demo*/)){
            /*demo*/
        }
    }

}

function test_input($data) {
    // demo
    return $data;
}
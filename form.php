<?php include ("form_process.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <link href="form.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
  <form id="contact" action="<?= // demo ?>" method="post">
    <h3>Contact Us</h3>
    <h4>we will respond as soon as possible</h4>
    <fieldset>
        <input placeholder="your name" type="text" tabindex="1" <!-- demo -->" autofocus>
        <span class="error"><?= $name_error; ?></span>
    </fieldset>
    <fieldset>
        <input placeholder="your email address" <!-- demo -->" tabindex="2">
        <span class="error"><?= $email_error; ?></span>
    </fieldset>
    <fieldset>
        <input placeholder="your phone number" <!-- demo -->" tabindex="3">
        <span class="error"><?= $phone_error; ?></span>
    </fieldset>
    <fieldset>
        <input placeholder="your website starts with http://" <!-- demo -->" tabindex="4">
        <span class="error"><?= $url_error; ?></span>
    </fieldset>
    <fieldset>
        <textarea placeholder="type your message here...." <!-- demo --></textarea>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit" <!-- demo -->>submit</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>
</div>
</body>
</html>
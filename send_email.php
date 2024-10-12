<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Az űrlap mezők feldolgozása
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-mail cím, ahova küldeni szeretnéd
    $to = "bazanmate5@gmail.com";  // Itt add meg az e-mail címed
    $subject = "Üzenet a weboldalról: $name";
    $body = "Név: $name\nEmail: $email\nÜzenet:\n$message";

    // További fejlécek
    $headers = "From: $email";

    // Az e-mail elküldése
    if (mail($to, $subject, $body, $headers)) {
        echo "Az üzenetet elküldtük!";
    } else {
        echo "Hiba történt az üzenet küldése közben.";
    }
}
?>

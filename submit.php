<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $options = $_POST["options"];
    $checkboxValues = isset($_POST["checkbox1"]) ? "4 Király 4 Királynő" : "";
    $checkboxValues .= isset($_POST["checkbox2"]) ? ", 3 Card Monte" : "";

    $to = "toth.andras0213@gmail.com"; // Az Ön email címe
    $subject = "Űrlap eredmény";
    $message = "Név: " . $name . "\nSaját vélemény: " . $message . "\nMelyik ment a legjobban? " . $options . "\nMelyik trükk(ök) nem sikerült(ek)? " . $checkboxValues;

    $headers = "From: your-email@example.com" . "\r\n" .
        "Reply-To: your-email@example.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Elküldés az emailben
    mail($to, $subject, $message, $headers);

    // Válasz visszaküldése a kliensnek
    http_response_code(200);
    echo "Űrlap sikeresen beküldve!";

    exit; // Kilépés a további kód végrehajtásának elkerülése érdekében
}
?>
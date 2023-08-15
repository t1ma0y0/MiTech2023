<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    
    $to = "nikita.08022000@gmail.com";
    $subject = "Новая заявка с сайта";
    $message = "Имя: $name\nТелефон: $phone";
    $headers = "From: nikita08022000@mail.ru"; 

    if (mail($to, $subject, $message, $headers)) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Произошла ошибка при отправке заявки.";
    }
}
?>
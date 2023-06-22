<?php

    if(!empty($_POST['tel'])) {
        $r = mail("s.ilchenko.mb@gmail.com", "Waterleaks: new request",
            "Date: " . date("Y-m-d H:i:s") . "\n" .
            "Phone: " . $_POST['tel'] . "\n" .
            (!empty($_POST['name']) ? ("Name: " . $_POST['name'] . "\n") : "") .
            (!empty($_POST['telegram']) ? ("Telegram: +" . "\n") : "") .
            (!empty($_POST['viber']) ? ("Viber: +" . "\n") : "") .
            (!empty($_POST['phone']) ? ("Phone: +" . "\n") : "") .
            (!empty($_POST['comment']) ? ("Comment: " . $_POST['comment'] . "\n") : "") .
            ""
        );
?>
<html>
<body>
<style type="text/css">
    * { font-family: Roboto,sans-serif; }
</style>
<?php
        if($r) {
?>
</body>
<h1>Запит відправлено! Зв'яжемось з вами найближчим часом.</h1>

<?php
        }
        else {
?>

<h1>Вибачте, сталась помилка. Передзвоніть будь-ласка нам за телефоном <a href="tel:+38 098 151 58 02">+38 098 151 58 02</a>.</h1>

<?php
        }
    }
?>

<a href="/">Поівернутись на головну</a>


</html>
</html>

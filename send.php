<?php

    if(!empty($_POST['tel'])) {
        mail("smnglf@gmail.com", "Waterleaks: new request",
            "Date: " . date("Y-m-d H:i:s") . "\n" .
            "Phone: " . $_POST['tel'] . "\n" .
            !empty($_POST['name'] ? ("Name: " . $_POST['name'] . "\n") : "") .
            !empty($_POST['name'] ? ("Comment: " . $_POST['comment'] . "\n") : "") .
            !empty($_POST['telegram'] ? ("Telegram: +" . "\n") : "") .
            !empty($_POST['viber'] ? ("Viber: +" . "\n") : "") .
            !empty($_POST['phone'] ? ("Phone: +" . "\n") : "") .
            "",
            "From: mail@waterleaks.com.ua"
        );
    }

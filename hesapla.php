<?php
    error_reporting(E_ALL);

    $num = isset($_POST["num"]) ? $_POST["num"] : null;

    echo divide($num);

    function divide($num)
    {
        if (is_null($num)) {
            return "Boş bir değer veremezsiniz. Lütfen bir sayı girin!";
        }
        elseif ($num % 3 == 0) {
            return "$num sayısının 3'e bölümünün sonucu: " . $num/3;
        }
        elseif (($num+1) % 3 == 0) {
            return "$num sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $num + 1;
        }
    }
?>
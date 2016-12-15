<?php
// Veritabanı sunucusuna bağlanacağım
$connection = @mysqli_connect("localhost", "root", "");
// Veritabanını seçeceğim
mysqli_select_db("videoLife", $connection);

// utf8 karakter seti ile haberleşeceğimi belirteceğim
mysqli_set_charset("utf8", $connection);

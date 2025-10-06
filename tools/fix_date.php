<?php

require_once('tools/tools.php');
require_once('settings.php');

global $mysql_host,$mysql_user,$mysql_user_pass,$mysql_database;
/** Создаем подключение к БД */
$mysqli = new mysqli($mysql_host,$mysql_user,$mysql_user_pass,$mysql_database);
/** Выполняем запрос SQL */
$sql = "SELECT * FROM manufactured_parts WHERE YEAR(date_of_production) = 2424;";
/** Если запрос не удачный -> exit */
if (!$result = $mysqli->query($sql)){ echo "Ошибка: Наш запрос не удался и вот почему: \n Запрос: " . $sql . "\n"."Номер ошибки: " . $mysqli->errno . "\n Ошибка: " . $mysqli->error . "\n"; exit; }
/** Разбор массива значений  */

while ( $row = mysqli_fetch_row($result)){

    $current_date = date_create($row[0]);
    $modified_date = $current_date;
    date_modify($modified_date, '-400 year');
    $sql1 = "UPDATE manufactured_parts SET date_of_production = '".date_format($current_date,'Y-m-d')."' WHERE date_of_production ='".$row[0]."' AND name_of_parts = '".$row[1]."' AND count_of_parts ='".$row[2]."' AND name_of_order = '".$row[3]."';";
    /** Выполняем запрос SQL */
    if (!$result1 = $mysqli->query($sql1)) { echo "Ошибка: Наш запрос не удался и вот почему: \n". "Запрос: " . $sql1 . "\n". "Номер ошибки: " . $mysqli->errno . "\n". "Ошибка: " . $mysqli->error . "\n";    exit;   }
}

echo "2424 parts fixed<p>";

$sql = "SELECT * FROM manufactured_parts WHERE YEAR(date_of_production) = 2323;";
/** Если запрос не удачный -> exit */
if (!$result = $mysqli->query($sql)){ echo "Ошибка: Наш запрос не удался и вот почему: \n Запрос: " . $sql . "\n"."Номер ошибки: " . $mysqli->errno . "\n Ошибка: " . $mysqli->error . "\n"; exit; }
/** Разбор массива значений  */

while ( $row = mysqli_fetch_row($result)){

    $current_date = date_create($row[0]);
    $modified_date = $current_date;
    date_modify($modified_date, '-300 year');
    $sql1 = "UPDATE manufactured_parts SET date_of_production = '".date_format($current_date,'Y-m-d')."' WHERE date_of_production ='".$row[0]."' AND name_of_parts = '".$row[1]."' AND count_of_parts ='".$row[2]."' AND name_of_order = '".$row[3]."';";
    /** Выполняем запрос SQL */
    if (!$result1 = $mysqli->query($sql1)) { echo "Ошибка: Наш запрос не удался и вот почему: \n". "Запрос: " . $sql1 . "\n". "Номер ошибки: " . $mysqli->errno . "\n". "Ошибка: " . $mysqli->error . "\n";    exit;   }
}

echo "2323 parts fixed<p>";

$sql = "SELECT * FROM manufactured_parts WHERE YEAR(date_of_production) = 0000;";
/** Если запрос не удачный -> exit */
if (!$result = $mysqli->query($sql)){ echo "Ошибка: Наш запрос не удался и вот почему: \n Запрос: " . $sql . "\n"."Номер ошибки: " . $mysqli->errno . "\n Ошибка: " . $mysqli->error . "\n"; exit; }
/** Разбор массива значений  */

while ( $row = mysqli_fetch_row($result)){

    $current_date = date_create($row[0]);
    $modified_date = $current_date;
    date_modify($modified_date, '+2020 year 1 month 1 day');
    $sql1 = "UPDATE manufactured_parts SET date_of_production = '".date_format($current_date,'Y-m-d')."' WHERE date_of_production ='".$row[0]."' AND name_of_parts = '".$row[1]."' AND count_of_parts ='".$row[2]."' AND name_of_order = '".$row[3]."';";
    /** Выполняем запрос SQL */
    if (!$result1 = $mysqli->query($sql1)) { echo "Ошибка: Наш запрос не удался и вот почему: \n". "Запрос: " . $sql1 . "\n". "Номер ошибки: " . $mysqli->errno . "\n". "Ошибка: " . $mysqli->error . "\n";    exit;   }
}

echo "0000 parts fixed <p>";



$sql = "SELECT * FROM manufactured_production WHERE YEAR(date_of_production) = 2424;";
/** Если запрос не удачный -> exit */
if (!$result = $mysqli->query($sql)){ echo "Ошибка: Наш запрос не удался и вот почему: \n Запрос: " . $sql . "\n"."Номер ошибки: " . $mysqli->errno . "\n Ошибка: " . $mysqli->error . "\n"; exit; }
/** Разбор массива значений  */

while ( $row = mysqli_fetch_row($result)){

    $current_date = date_create($row[0]);
    $modified_date = $current_date;
    date_modify($modified_date, '-400 year');
    $sql1 = "UPDATE manufactured_production SET date_of_production = '".date_format($current_date,'Y-m-d')."' WHERE date_of_production ='".$row[0]."' AND name_of_filter = '".$row[1]."' AND count_of_filters ='".$row[2]."' AND name_of_order = '".$row[3]."';";
    /** Выполняем запрос SQL */
    if (!$result1 = $mysqli->query($sql1)) { echo "Ошибка: Наш запрос не удался и вот почему: \n". "Запрос: " . $sql1 . "\n". "Номер ошибки: " . $mysqli->errno . "\n". "Ошибка: " . $mysqli->error . "\n";    exit;   }
}

echo "2424 filters fixed<p>";

$sql = "SELECT * FROM manufactured_production WHERE YEAR(date_of_production) = 2323;";
/** Если запрос не удачный -> exit */
if (!$result = $mysqli->query($sql)){ echo "Ошибка: Наш запрос не удался и вот почему: \n Запрос: " . $sql . "\n"."Номер ошибки: " . $mysqli->errno . "\n Ошибка: " . $mysqli->error . "\n"; exit; }
/** Разбор массива значений  */

while ( $row = mysqli_fetch_row($result)){

    $current_date = date_create($row[0]);
    $modified_date = $current_date;
    date_modify($modified_date, '-300 year');
    $sql1 = "UPDATE manufactured_production SET date_of_production = '".date_format($current_date,'Y-m-d')."' WHERE date_of_production ='".$row[0]."' AND name_of_filter = '".$row[1]."' AND count_of_filters ='".$row[2]."' AND name_of_order = '".$row[3]."';";
    /** Выполняем запрос SQL */
    if (!$result1 = $mysqli->query($sql1)) { echo "Ошибка: Наш запрос не удался и вот почему: \n". "Запрос: " . $sql1 . "\n". "Номер ошибки: " . $mysqli->errno . "\n". "Ошибка: " . $mysqli->error . "\n";    exit;   }
}

echo "2323 filters fixed<p>";
?>
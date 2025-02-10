<?php

$lastname = "иванов";
$firstname = "иван";
$middlename  = "иванович";

$fullName = "'{$lastname} {$firstname} {$middlename}'";
$fullName = ucwords($fullName);


$sublastname = mb_substr($lastname, 0, 1);
$subfirstname = mb_substr($firstname, 0, 1);
$submiddlename = mb_substr($middlename, 0, 1);

$fio = "'{$sublastname}{$subfirstname }{$submiddlename}'";
$fio = strtoupper($fio);

$surnameAndInitials = "'{$lastname} {$sublastname}.{$submiddlename}.'";
$surnameAndInitials = ucwords($surnameAndInitials);

echo "Полное имя: '{$fullName}'". PHP_EOL;
echo "Фамилия и инициалы: '{$surnameAndInitials}'". PHP_EOL;
echo "Аббревиатура: {$fio}\\". PHP_EOL;

?>
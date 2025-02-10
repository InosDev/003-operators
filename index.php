<?php

$lastname = "иванов";
$firstname = "иван";
$middlename  = "иванович";

$fullName = "'{$lastname} {$firstname} {$middlename}'";
$fullName = ucwords($fullName);


$sublastname = substr($lastname, 0, 2);
$subfirstname = substr($firstname, 0, 2);
$submiddlename = substr($middlename, 0, 2);

$fio = "'{$sublastname}{$subfirstname }{$submiddlename}'";
$fio = strtoupper($fio);

$surnameAndInitials = "'{$lastname} {$sublastname}.{$submiddlename}.'";
$surnameAndInitials = ucwords($surnameAndInitials);

echo "Полное имя: '{$fullName}'". PHP_EOL;
echo "Фамилия и инициалы: '{$surnameAndInitials}'". PHP_EOL;
echo "Аббревиатура: {$fio}". PHP_EOL;

?>
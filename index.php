<?php

$lastname = "иванов";
$firstname = "иван";
$middlename  = "иванович";

$lastname = mb_ucfirst($lastname);
$firstname = mb_ucfirst($firstname);
$middlename = mb_ucfirst($middlename);

$fullName = "'{$lastname} {$firstname} {$middlename}'";


$sublastname = mb_substr($lastname, 0, 1);
$subfirstname = mb_substr($firstname, 0, 1);
$submiddlename = mb_substr($middlename, 0, 1);

$fio = "'{$sublastname}{$subfirstname }{$submiddlename}'";

$surnameAndInitials = "'{$lastname} {$sublastname}.{$submiddlename}.'";
$surnameAndInitials = ucwords($surnameAndInitials);

echo "Полное имя: '{$fullName}'". PHP_EOL;
echo "Фамилия и инициалы: '{$surnameAndInitials}'". PHP_EOL;
echo "Аббревиатура: {$fio}\\". PHP_EOL;

?>
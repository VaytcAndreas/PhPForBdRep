<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            explode('\\', str_replace('BdphpWork', '', $class))
        ) . '.php';
});

$teacher = new Teacher(
'Максим',
'Зверев',
new DateTime('2013-05-08'),
'm',
"ISP 2022",
"JavaScript");

$group = new Group($teacher,'ISP 20-22', new DateTime(2020-01-01));
$student = new Student(
'Вайц',
'АНдреас',
new DateTime('2022-04-06'),
'm',
$group,
new DateTime('2022-04-06'));
$student->Expulsion(true,new DateTime(2020-01-01));
$teacher->setMiddleName('Владимирович');
print_r($student->getGroup());




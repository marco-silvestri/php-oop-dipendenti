<?php

include_once __DIR__ . '/Employee.php';

$employees = [
    [
    'Pippo', 
    'Baudo', 
    '01/01/1970', 
    'Male',
    'Receptionist',
    'HAL-901',
    0,
    0,
    16000
    ],
    [
    'Pippo', 
    'Franco', 
    '28/03/1982', 
    'Male',
    'Team Building',
    'AB-NORM',
    0,
    0,
    24000
    ],
    [
    'Barbara', 
    'D\'Urso', 
    '12/09/1969', 
    'Female',
    'PR & Marketing',
    '42-F',
    0,
    0,
    31000
    ],
];

$staff = [];

foreach ($employees as $employee) {
    $staff[] = new Employee(...$employee);
}
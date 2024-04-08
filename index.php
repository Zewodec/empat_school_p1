<?php
$first_name = 'Adam';
$last_name = 'Ivaniush';

// Конкатенація
echo 'Hello, my name is ' . $first_name . ' ' . $last_name . '!';

echo '<br>';
// Implode
$marks = [5, 4, 3, 5, 5, 5, 4, 3, 5, 2];
$marks_imploded = implode(', ', $marks);
echo '<br>My marks: ' . $marks_imploded . '.';

echo '<br>';
// Average mark
$average_mark = array_sum($marks) / count($marks);
echo '<br>Average mark: ' . $average_mark . '.';

echo '<br>';
// Explode
$some_text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit';
$words = explode(' ', $some_text);
echo '<br>Some Words: ' . $words[1] . ', ' . $words[3] . ', ' . $words[5] . '.';

// JSON
$student = [
    'first_name' => 'Adam',
    'last_name' => 'Ivaniush',
    'age' => 20,
    'marks' => [5, 4, 3, 5, 5, 5, 4, 3, 5, 2]
];

echo '<br>';

$student_json = json_encode($student);
echo '<br>Student JSON: ' . $student_json . '.';
echo  '<br>Student Name and Age: ' . 'Name: ' . $student['first_name'] . ' ' . $student['last_name'] . ', Age: ' . $student['age'] . '.';

// Приведення типів
$age = '20';
$age_int = (int)$age;
echo '<br>';
echo '<br>Age: ' . $age_int;

$age_str = (bool)$age;
echo '<br>Age: ' . $age_str;

// Порівняння
$age = 20;
$age_str = '20';

echo '<br>';
echo '== : ';
echo $age == $age_str;
echo '<br>=== : ';
echo (int)($age === $age_str);



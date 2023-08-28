<?php

echo '<pre>';

$programmingLanguages = ['PHP', "Java", 'Python'];
$programmingLanguages[] = 'C++';
array_push($programmingLanguages, 'GO', 'JavaScript', 'C');


# ------------------------------------------------------------------

$programmingLanguages = [
    'php' => '8.0',
    'go' => '3.9',
    'Java' => 11,
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019']
        ],
    ]
];



$programmingLanguages['go'] = '1.15';

echo "<p>". $programmingLanguages['python']['versions'][1]['version'] ." </p>";


print_r($programmingLanguages);
echo '<p>Count Languages = ' . count($programmingLanguages) . '</p>';

$programmingLanguages = ['PHP', "Java", 'Python'];


$array = [true=>'a', 1 => 'b', '1' => 'c', 1.8 => 'd'];
print_r($array);

echo array_key_exists('1', $array);
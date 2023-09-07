<?php

// Arry

$student = ['khan', 'khan@gmail.com'];


echo '<pre>';

print_r($student);

'</pre>';


echo "<br>";

// associative array


$student = [
    '$name' => "Khan",
    '$email' => "khan@gmail.com",
    '$phone' => "01759781138",
    '$blood' => "A-",
    '$status' => true,
];

echo'<pre>';

print_r($student);

echo'</pre>';

echo $student['$name'];

echo "<br>";

// multidimensional array

$student = [
    'user1' => [
        'id' => 01,
        '$name' => 'Khan',
        '$email' => 'khan@gmail.com',
        'sociallinks' => [
            'Facbook' => 'wwww.facbook.com',
            'Twitter' => 'wwww.twitter.com',
            'Instagram' => 'www.instagram.com',
        ]
    ],
    'user2' => [
        'id' => 02,
        '$name' => 'Khan2',
        '$email' => 'khan2@gmail.com',
    ],
    'user3' => [
        'id' => 03,
        '$name' => 'Khan3',
        '$email' => 'khan3@gmail.com',
    ],
    'user4' => [
        'id' => 04,
        '$name' => 'Khan4',
        '$email' => 'khan4@gmail.com',
    ],
    'user5' => [
        'id' => 05,
        '$name' => 'Khan5',
        '$email' => 'khan5@gmail.com',
    ],
];

echo'<pre>';

print_r($student['user1']['sociallinks']['Facbook']);

echo'</pre>';

echo "<br>";

// print_r($student['user1']['$name']);

echo ($student['user1']['sociallinks']['Facbook']);

echo "<br>";

// data sensitization

$student = [
    'id' => 01,
    '$name' => 'Khan',
    '$email' => 'KHan@gmail.com',
];
echo strtolower($student['$email']);

echo "<br>";

// every word's first letter is capital letter

$student = [
    'id' => 01,
    '$name' => 'hemal arifin',
    '$email' => 'KHan@gmail.com',
];
echo ucwords($student['$name']);

echo "<br>";

// first letter of a sentence is capital letter

$student = [
    'id' => 01,
    '$name' => 'hemal arifin',
    '$email' => 'KHan@gmail.com',
];

echo ucfirst($student['$name']);

echo "<br>"; 

// revers the following sentence

$captcha = "Hello world";
$usercaptcha = strrev($captcha);
if ($usercaptcha == $captcha){
echo "Wellcome back!";
}else {
    echo "Get out";
};

echo "<br>";

// find any word

$captcha = "Hello world";

echo strpos($captcha,'world');

echo "<br>";

// making php insensitive for a momemt!

$captcha = "Hello world";

echo stripos($captcha,'World');

echo "<br>";

//replece anything

$captcha = "Hello world";

$url = str_replace(' ','_',$captcha);

echo $url;


$captcha = "Hello world";

$url = strtolower(str_replace(' ','_',$captcha));

echo $url;

echo "<br>";

// cut line

$text = "Killer Asian hornets 'established in UK', experts say in horror warning";

$title = substr($text,0,20).'..........';

echo $title ;


echo "<br>";


// giving fixed character

$text = '                                     khan@gmail.com';
echo trim($text);


echo "<br>";

// Figer out string lenth.
$text = 'khan@gmail.com';
echo strlen ($text);

echo "<br>";

// Password encryption.
$text = 'Khan123';
echo sha1 ($text);

echo "<br>";

$text = 'Khan123';
echo md5 ($text);

echo "<br>";

$text = 'Khan123';
echo password_hash ($text, PASSWORD_BCRYPT);

echo "<br>";

$userpass = 'Khan123';
$dbpass = password_hash ($userpass, PASSWORD_BCRYPT);
var_dump (password_verify ($userpass, $dbpass));

echo "<br>";

// addslash
$str = addslashes('"Who" "are" "YOU?"');
echo($str); 

echo "<br>";

// Join array elements with a string:


$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

echo "<br>";

// Pad to the right side of the string, to a new length of 20 characters:

$roll = "2";
echo str_pad($$roll,7,"0");


<?php


$name=$_POST['name'];
//$dob=$_POST['dob'];
$salary=$_POST['salary'];
$age=$_POST['age'];
$data=$name.",".$salary.",".$age;


$file="file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "Thank you for submitting your data address!</h1]>";


?>
<html>
<head>
<title>Thank You Page</title>    
</head>
<body>
<h1><a href="form.html">GO BACK</a> </h1>    
    
</body>
</html>

<?php
 # Variable
$name = 'JC Dayauon';
$age = 29;
$stringOne = 'Email: ';
$stringTwo = 'demonlordex700@gmail.com';

$peopleOne = ['JC', 'Noctis', 'Charles'];
$peopleTwo = array('Regis', 'Kenji');
$ages = [20, 30, 40, 50];

$blogs = [
	['Sausage party', 'Bromance', 'lorem', 10],
	['WebZen', 'MU', 'lorem', 20],
	['Riot', 'League', 'lorem', 30]
];

$x = 5;
$y = 5;

$stringThree = 10;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>UC4L01</title>
</head>
<body>
	<h1>LMS UC4L01 </h1>
	Name: <?php echo $name; ?><br>
	Age: <?php echo $age; ?><br>

	
<?php
	echo $stringOne.$stringTwo;
	echo "<br>My Name is $name<br>";
	echo strlen($stringTwo) . ' is the length of my Email<br>';
	echo strtoupper($name);	
?>
<br>
	
<?php
	echo 'x=5, y=5, x+y is = ' . $x * $y;
	echo '<br>Math Operations 3 * (3+10) / 3 = ' . 3 * (3+10) / 3;	
	?>
<br>
	
<?php
	echo 'Nicnames ' . $peopleOne[1];
	echo '<br> Nicnames ' . $peopleTwo[0] . '<br>';
	print_r($ages) . '<br>';
?>
<br>
<?php
	print_r($blogs[0]);
	print_r('<br>'.$blogs[0][0]);
?>
</body>
</html>
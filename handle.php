<!DOCTYPE html>
<html>

<head>
	<meta name="author" content="Antov" />
	<title>PHP Homework</title>
    
    <style>
    p.red
    {
        color:red;
    }
    p.blue
    {
        color:blue;
    }
    </style>
</head>

<body>

<?php

if (isset($_GET["variable"])) {
	$variable = explode(",", $_GET["variable"]);
	echo implode(",", $variable);
}

?>
<br /><br />
<?php

//

$value = $_GET["variable"];
if(!is_numeric($value))
{
   ?> <p class="red">The parameter is not a number</p> <?php
}

?>
<br /><br />
<?php

if($value >= 0 && $value <= 19999)
{
    
}
else
{
    ?> <p class="red">The parameter is not within range [0, 19999]</p> <?php
}

?>
<br /><br />
<?php

require_once('prime.php');

$prime = isPrime($value);
if($prime == 1)
{
    echo"The number $value is prime !";
}
else
{
    ?> <p class="blue">The number <?php echo"$value" ?> is NOT a prime</p> <?php
}

?>

<br /><br />

</body>
</html>
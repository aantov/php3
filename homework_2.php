<!DOCTYPE HTML>
<head>
	<meta name="author" content="Antov" />

	<title>Homework 2</title>
</head>

<body>

<?php

$arr = range(20, 1000, 37);

require_once('prime.php');

function find_3_prime($arr)
{
    $counter = 3;
    foreach($arr as $value)
    {
        if(isPrime($value))
        {
            $counter--;
            echo "$value is prime !";
        }
        if($counter == 0)
        echo "The third prime number in the array is : $value";
        break;
    }
}

if(in_array(146, $arr))
{
    echo "146 is in the array ";
}
else
{
    echo "146 is not in the array ";
}

?>
<br /><br />
<?php

if(in_array(284, $arr))
{
    echo "284 is in the array ";
}
else
{
    echo "284 is not in the array ";
}

?>
<br /><br />
<?php

if(in_array(871, $arr))
{
    echo "871 is in the array ";
}
else
{
    echo "871 is not in the array ";
}

?>

</body>
</html>

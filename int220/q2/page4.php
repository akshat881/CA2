<?php
$a=$_POST['age'];

if (filter_var($a, FILTER_VALIDATE_INT, array("options" => array("min_range"=>26, "max_range"=>56)))) {
    echo("Age is valid");
} else {
    echo("Age is not valid");
}

?>
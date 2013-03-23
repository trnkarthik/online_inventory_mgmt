<?php

include("includes/connect.php");
include("includes/functions.php");

$id=$_GET['id'];



$query_string="update store_master set status=0 where id=$id ";
$query=mysql_query($query_string);

if(!$query)
{
    echo "Failed !";
}
else
{
redirect_to("my_cart.php");
}

?>
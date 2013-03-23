<?php

include("includes/connect.php");
include("includes/functions.php");

$id=$_GET['id'];
$quantity=$_POST[$id];


$query_string="update store_master set status=1,temp_qty=$quantity where id=$id ";
echo $query_string;

$query=mysql_query($query_string);

if(!$query)
{
    echo "Failed !";
}
else
{
redirect_to("select_books.php");
}

?>
<?php

include("master_entry_delete_titles.php");

$id=$_POST["key"];

$db_connect=mysql_connect("localhost","root","karthik");
if(!$db_connect)
{
    die("Could not log in to the database");
}
$db_name=mysql_select_db("book_store");
if(!$db_name)
{
    die("Can not find the database");
}


$query1="delete from store_master where id=$id";
$query2="delete from store_details where id=$id";

$result1=mysql_query("$query1");
$result2=mysql_query("$query2");
if(!$result1)
{
    die("Problem encountered in deleting data from STORE_MASTER table");
}
if(!$result2)
{
    echo mysql_errno($result2);
    die("Problem encountered in deleting data from STORE_DETAILS table");
}


?>
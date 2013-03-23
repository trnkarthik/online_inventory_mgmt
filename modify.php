<style>
#st1
{
 position:absolute;
 top:200px;
 left:400px;
 width:800px;
}
</style>
<?php
include("includes/template.php");
$db_connect = mysql_connect("localhost:3306", "root", "karthik");
if (!$db_connect)
{
     print "Error - Could not connect to MySQL,Database access restricted";
     exit;
}
 
$db_name=mysql_select_db("book_store");
if (!$db_name)
{
     print "Error - Could not connect to MySQL:Database not found";
     exit;
}

$l_or_i = $_POST['lang_item'];
$result=mysql_query("select id,cost_price,distribution_price from store_master where item_or_lang='$l_or_i' ");

if (!$result)
{
    print "Error - the query could not be executed";
    $error = mysql_error();
    print "<p>" . $error . "</p>";
    exit;
}

print "<table border=5px id=st1><caption>  </caption>";
print "<tr align = 'center'>";

// Get the number of rows in the result, as well as the first row
//  and the number of fields in the rows

$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$num_fields = mysql_num_fields($result);

// Produce the column labels

$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) 
    print "<th>" . $keys[2 * $index + 1] . "</th>";

print "</tr>";

// Output the values of the fields in the rows

for ($row_num = 0; $row_num < $num_rows; $row_num++) {
    print "<tr align = 'center'>";
    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++){
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<th><input type=text value=$value ></th> ";
    }

    print "</tr>";
    $row = mysql_fetch_array($result);
}
print "</table>";
 
?>





<html>
    <head>

<style>
    #s2{
          position:absolute;
          top:50%;
          left:65%;
          border:2px solid #7F4E52;
          padding:20 20 20 20;
       }
    #st1
      { 
          position:absolute;
          top:200px;
          left:300px;
          width:500px;
      }
</style>

</head>

<body>

<?php

include("includes/template.php");
include("includes/connect.php");

$query="select * from store_details";
$result=mysql_query("$query");



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
        print "<th>$value</th> ";
    }

    print "</tr>";
    $row = mysql_fetch_array($result);
}
print "</table>";
 
?>

        <div  id=s2>
            <form action="master_entry_del_tit_del.php" method="post">
        Enter id to delete : <input type="text" name=key><p/>
        <center><input type="submit" value="Delete" onClick="window.location.reload()"></center>
            </form>
        </div>
    </body>
</html>


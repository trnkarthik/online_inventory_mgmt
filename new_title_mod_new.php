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
include("template.php");
include("connect.php");
$l_or_i = $_POST['lang_item'];
$result=mysql_query("select id,cost_price,distribution_price from store_master where item_or_lang='$l_or_i' ");

if (!$result)
{
    print "Error - the query could not be executed";
    $error = mysql_error();
    print "<p>" . $error . "</p>";
    exit;
}

$arr=array();
 $count=0;
while($row=mysql_fetch_array($result))
{
 $arr[$count]=$row[0];
 $count++;
 $arr[$count]=$row[1];
 $count++;
}

echo "<form action='new_stock_update.php?rn=$row_number' method='post'>";

$rn=$row_number;

echo "<table border=5px id=st1>";
echo "<th>  </th>";
echo "<th>  Book/Item ID  </th>";
echo "<th>Quantity </th>";

for($i=0;$i<$count;$i++)
{
echo "<tr>";

echo "<td  style='color:red;width:40px' >";
echo "<input type='checkbox' onclick='if(this.checked==true){f2($i)}else{f1($i)}' >";
echo "</td>";
echo "<input type='hidden' value=$arr[$i] name=$i  >";
echo "<td><center>".$arr[$i]."</center></td>";
$k=$i+1;
echo "<td><center>"." <input type='text' disabled='disabled' value=$arr[$k] id=$i name=$k>"."</center> </td>";
echo "</tr>";
$i++;
}
echo "</table>";

  
echo "<input type='submit' value='Update' id=update_button onclick=f3()>";
echo "</form>";


 
?>





<?php
include("includes/template.php");
include("includes/connect.php");
$b_or_i=$_POST["a"];
echo $b_or_i;
if($b_or_i=="books")
{
 $l_or_i_val= $_POST["lang_item"];
}
else if($b_or_i=="items")
{
 $l_or_i_val="i";
}

$result=mysql_query("select id,quantity from store_master where item_or_lang='$l_or_i_val' ");

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
 $arr[$count]=$row[2];
 $count++;
}
$row_number=mysql_num_rows($result);
$rn=$row_number;
?>
<script>
var a;
var b;
function f1(a,b)
{
 var k1=document.getElementById(a);
 var k2=document.getElementById(b);
 k1.disabled="disabled";
 k2.disabled="disabled";
}
function f2(a,b)
{
 var k1=document.getElementById(a);
 var k2=document.getElementById(b);
 k1.disabled=false;
 k2.disabled=false;
}
function f4(){
 for(var i=0;i< <?php echo $row_number; ?> ;i++)
 {
  var j=2*i;
 var k=document.getElementById(j);
 k.disabled=false; 
 }
}

function f3()
{
var boxes = document.getElementsByTagName("input");
for (var i = 0; i < boxes.length; i++) {
myType = boxes[i].getAttribute("type");
if ( myType == "text") {
boxes[i].disabled=false;
}
}
}

</script>
<?php
echo "<form action='new_stock_update.php?rn=$row_number' method='post'>";


echo "<table border=5px id=st2>";
echo "<th> </th>";
echo "<th>  Book/Item ID </th>";
echo "<th>  Quantity  </th>";
//echo "<th>  Distribution Price </th>";


for($i=0;$i<$count;$i++)
{
 
 $k=$i+1;
 $l=$k+1;
 
echo "<tr>";
echo "<td  style='color:red;width:40px' >";
echo "<input type='checkbox' onclick='if(this.checked==true){f2($k,$l)}else{f1($k,$l)}' >";
echo "</td>";
echo "<input type='hidden' value=$arr[$i] name=$i  >";
echo "<td><center>".$arr[$i]."</center></td>";
echo "<td><center>"." <input type='text' disabled='disabled' value=0 id=$k name=$k>"."</center> </td>";
//echo "<td><center>"." <input type='text' disabled='disabled' value=$arr[$l] id=$l name=$l>"."</center> </td>";

echo "</tr>";
$i=$l;
}
echo "</table>";

  
echo "<input type='submit' value='Update' id=update_button onclick=f3()>";
echo "</form>";

?>





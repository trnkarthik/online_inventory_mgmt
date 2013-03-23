<?php
include("includes/template.php"); 
include("includes/connect.php");
?>
<?php
$result=mysql_query("select id,quantity from store_master; ");
$row_number=mysql_num_rows($result);
?>

<script>
function f1(a)
{
 var k=document.getElementById(a);
 k.disabled="disabled";
}
function f2(a)
{
 var k=document.getElementById(a);
 k.disabled=false;
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

 <!--page counter-->

<?php
 $sf=fopen("pc.txt","r");
 $data=fread($sf,10);
 echo "<span style='position:absolute;top:21%;left:85%;border:2px solid black'>";
 echo "Page Visits :  ";
 echo $data+1;
 echo "</span>";
 fclose($sf);
 $sf=fopen("pc.txt","w");
 fwrite($sf,$data+1,10);
 fclose($sf);
 ?>


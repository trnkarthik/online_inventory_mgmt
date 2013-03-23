<style>
#st1
{
 position:absolute;
 top:200px;
 left:400px;
 width:400px;
}
</style>
<script>
function f1()
{
 var k=document.getElementById("a2");
 k.disabled="disabled";
}
function f2()
{
 var k=document.getElementById("a2");
 k.disabled=false;
}
</script>
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

$result=mysql_query("select id,quantity from store_master; ");

if (!$result)
{
    print "Error - the query could not be executed";
    $error = mysql_error();
    print "<p>" . $error . "</p>";
    exit;
}
 
print "<table border=5px id=st1><caption>  </caption>";
print "<tr align = 'center'>";
 

   print "</tr>";
 
while($row=mysql_fetch_array($result))
{
 echo "<td  style='color:red;width:40px' >";
 echo "<input type='checkbox' id=a1  onclick='if(this.checked==true){f1()}else{f2()}' >";
 echo "</td>";
 echo "<td  style='color:red;width:100px' >$row[0]</td> ";
 print "<td style='color:red;width:100px'>
 <input type=text value=$row[1] style='color:red;width:100px' id=a2></td> ";
 print "</tr>";
}


print "</table>";


?>
<span style="position:absolute;top:300px;left:400px">
<input type="checkbox" id=aa1  onclick="if(this.checked==true){f1()}else{f2()}" >karthik
<input type="button" id=aa2 value=Submit >
</span>
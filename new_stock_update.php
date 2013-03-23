<?php
include("includes/connect.php");
include("i/master_entry.php");
$rn=$_GET["rn"];

 $arr=array();
 $queries=array();
 $res=array();
for($i=0;$i<$rn*2;$i++)
{
       $arr[$i]=$_POST["$i"];
}

for($nq=0,$in=0;$nq<$rn;$nq++,$in++)
{
    $l=$in+2;
$queries[$nq]="update store_master set quantity=(quantity+$arr[$l]) where id=$arr[$in]";
    $in++;
}

for($nq=0;$nq<$rn;$nq++)
{
$res[$nq]=mysql_query($queries[$nq]);
     if(!$res[$nq]){
         echo("Error in executing ".$queries[$nq].mysql_error()."<br/>");
         echo "<br/>New line :$nq";
        }
}

?>

<?php
include("connect.php");
include("master_entry.php");
$rn=$_GET["rn"];

 $arr=array();
 $queries=array();
 $res=array();
for($i=0;$i<$rn*3;$i++)
{
       $arr[$i]=$_POST["$i"];
}
for($nq=0,$in=0;$nq<$rn;$nq++,$in++)
{
    $l=$in+1;
    $k=$in+2;
    $queries[$nq]="update store_master set cost_price=$arr[$l],distribution_price=$arr[$k] where id=$arr[$in]";
    $in++;
    $in++;
}
for($nq=0;$nq<$rn;$nq++)
{
$res[$nq]=mysql_query($queries[$nq]);
     if(!$res[$nq]){
         die("Error in executing ".$queries[$nq].mysql_error());
        }
}

?>

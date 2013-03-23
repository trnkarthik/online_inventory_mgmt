<?php
 
include("includes/template.php"); 
include("includes/connect.php");

?>

<?php
  
 $id=$_POST["id"];
 $name=$_POST["name"];
 $cost_price=$_POST["cost_price"];
 $distribution_price=$_POST["distribution_price"];
 $quantity=$_POST["quantity"];
 $remarks=$_POST["remarks"];
 $radio_button=$_POST["radio_button"];
 
  
  if($radio_button=='books')
  {
    $lang_item=$_POST["lang_item"];
    $lang_item_val=$lang_item;
  }
 else
  {
    $lang_item_val='i';
  }
  

  
  $check="select * from store_details where id=$id";
  $check_stat=mysql_query($check) or die("checking ERROR!!!".mysql_error());
  $rows_check=mysql_num_rows($check_stat);
  if($rows_check==0)
  {
   $insert_store_details="insert into store_details(id,name) values($id,'$name')";
   $insert_store_details_stat=mysql_query($insert_store_details) or die("store_det_stat ERROR!!!".mysql_error());
       if($insert_store_details_stat)
        {
          ?>
          <span style= "position:absolute;top:40%;left:50%" ><h1> 1 Success</h1></span>
          <?php
           
        }
       else
        {
          ?>
          <span style= "position:absolute;top:40%;left:50%" ><h1> 1 Fail</h1></span>
          <?php
          echo "Error is".mysql_error();
        }
  }
  
  $insert_store_master="insert into store_master(id,item_or_lang,cost_price,distribution_price,quantity,remarks)
  values($id,'$lang_item_val',$cost_price,$distribution_price,$quantity,'$remarks')";
  $insert_store_master_stat=mysql_query($insert_store_master) or die("store_mast_stat ERROR!!!".mysql_error());
  if($insert_store_master_stat)
  {
          ?>
          <span style= "position:absolute;top:50%;left:50%" ><h1> 2 Success</h1></span>
          <?php
        }
  else
        {
          ?>
          <span style= "position:absolute;top:50%;left:50%" ><h1> 2 Fail</h1></span>
          <?php
           echo "Error is".mysql_error();
        }
  
  
?>

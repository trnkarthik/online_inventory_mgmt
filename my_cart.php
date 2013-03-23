<?php
include("includes/template_cust_entry.php");
include("includes/connect.php");

?>


<script>
         
        k=10;
        name=document.getElementById("name_input").value;
        date=document.getElementById("date_input").value;
        
        function f1()
        {
            var x=document.getElementById("i9");
            x.disabled=false;
            
        }
        function f2()
        {
            var x=document.getElementById("i9");
            x.disabled="disabled";
            
        }
        function generate_and_redirect(k)
        {
                var name=document.getElementById("name_input").value;
                var date=document.getElementById("date_input").value;
                var new_url="select_"+k+".php?"+"date="+date+"&"+"name="+name;
                //done creating url now we have to redirect
                alert(new_url);

        }
        function fname()
        {
                return name;
        }
        function fdate()
        {
                return date;
        }
        function get_quantity()
        {
                return 11;
        }
</script>

<div id=dataarea>                        <!--Data comes here-->

         <div id="cust_body_area" >
                     
            <hr> 
                
                
                <form action="select_books.php" method="post" >
                        
                <center>
                <table width=75%  >
                        <tr>
                            <td>
                                <a href="select_books.php" >
                                    Add more books
                                </a>
                            </td>
                            <td>
                                <a href="select_items.php" >
                                    Add more Items
                                </a>
                            </td>
                                
                        </tr>
                </table>
                </center>

                </form> 
                 
                
                
                <div id="main_results_area">
                        <!--
                        this is the main results display area dude!you should have some scrolling property enabled
                        -->
                        
                        <?php
                        
                        $query_string="select id,quantity from store_master where status=1";
                        $query=mysql_query($query_string);
                        $records_num=mysql_num_rows($query);
                        
                        //echo $records_num." results retrieved for search query ";
                        
                        ?>
                        <center>
                        <table style="width:80%" >
                                <tr >
                                        <td class=display_records_head align="center">
                                                ID
                                        </td>
                                        <td class=display_records_head align="center">
                                                Quantity
                                        </td>
                                       
                                       <!--
                                        <td class=display_records_head align="center">
                                                Required Quantity
                                        </td>
                                        -->
                                        <td class=display_records_head align="center" style="width:40%">
                                                Add to cart
                                        </td>
                                </tr>
                                
                                
                         
                        <?php
                        while($row=mysql_fetch_array($query))
                        {
                          
                          ?>
                          
                      <!--this is a bad idea but im dividing this php code because i too lazy to code a html table in
                      php using all those echo functions and double quotes...im sorry but i just hate it...
                      don't worry im not jeopardising efficiency of my code :) -->
                          
                          
                                <tr >
                                        <td class=display_records align="center">
                                                <?php echo $row[0]; ?>
                                        </td>
                                        <td class=display_records align="center">
                                                <?php echo $row[1]; ?>
                                        </td>
                                        <!--
                                        <td class=display_records align="center">
                                                <input type="text" style="width:50" >
                                        </td>
                                        -->
                                        <td class=display_records align="center">
                                                <a href="remove_from_cart.php?id=<?php echo $row[0]; ?>&
                                                quantity='<script> return get_quantity()</script>';
                                                " >
                                                 Remove from cart
                                                </a>
                                        </td>
                                </tr>
                                
                           <?php
                        }
                         
                        //end of while loop
                                
                        echo "</table> </center>";                        
                        
                        ?>                    
                        
                </div>
            
        </div>   
</div>
        
        
          
  
          
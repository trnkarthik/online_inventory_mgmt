<?php
include("includes/template_cust_entry.php");
?>


<script>
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
</script>

<div id=dataarea>                        <!--Data comes here-->

         <div id="cust_body_area" >
                     
            <hr/><br/> 
            <table>
                <tr>
                    <td>
                        
                        date :
                    </td>
                    <td>
                        <input type="text" id="date_input" value="<?php date_default_timezone_set('Asia/Calcutta');
                                                        echo date("d/m/Y") ;?>" style="width:35%">
                        (dd/mm/yyyy)
                    </td>
                </tr>
                <tr>
                    <td>
                        Name :
                    </td>
                    <td>
                        <input type="text" id="name_input" value="" >
                    </td>
                </tr>
            </table>
            <br/>
            
            <hr>
            
            <table style="position:relative;top:120%;left:5%;background:;width:90%">
                
                <tr>
                    <td style="width:50%">
                        Add to cart
                    </td>
                    <td>
                        
                        <!-- this is taken as alternate process because i got new idea...as cart is taken temporarily file
                               any changes can be made to it until all the changes are committed so ill follow
                               new method  
                        
                        <form action="new_stock_display.php" method="post">
                             <input type="radio"  name=a value=books  onclick='f1()' id=i1 > Books
                             
                             <select name=lang_item id=i9 disabled="disabled"> 
                            <option value=english>English</option>
                            <option value=telugu>Telugu</option>
                            <option value=hindi>Hindi</option>
                            <option value=oriya>Oriya</option>
                            <option value=kannada>Kannada</option>
                             </select>
                             
                             <p/>
                             
                            <input type="radio"  name=a value=items onclick='f2()' id=i2> Items
                        
                            
                               
                              
                            <input type="submit" value=Go >
                         </form>
                        
                        -->
                        
                        
                         <div id="cart_img">
                                <a href="my_cart.php">
                                <img src="images/cart.png" width=100% height=100% >
                                </a>
                             </div>
                         
                        <a href="select_books.php"> Books</a>
                        <br/>
                        <a href="select_items.php?date='<script>fdate();</script>'&name='<script>fname();</script>'"> Items</a>
                        <br/>
                        
                    </td>
                </tr>
            </table>
            <br/>
            <hr/>
           
        <input type="submit" value="End transaction" >
                
                
            
        </div>   
</div>
        
        
          
  
          
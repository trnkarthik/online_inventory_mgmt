<html>
    <head>
        <title>Books and items</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/template_style.css" />
        <script>
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
        </script>
    </head>
    <body>
        
        <?php
          include("includes/header.php");
          include("includes/sidebar.php");
          ?>
        
        <div id=dataarea>                        <!--Data comes here-->
            <form action="new_stock_display.php" method="post">
                    <div style="position:absolute;top:100px;left:200px">
                        <span style="position:absolute;left:0px;">
                             <input type="radio"  name=a value=books  onclick='f1()' id=i1 > Books
                        </span>
                        <span style="position:absolute;left:400px;">
                            <input type="radio"  name=a value=items onclick='f2()' id=i2> Items</p>
                        </span>
                    </div>  
             
                    <div style="position:absolute;left:19%;top:160px;">
                
                        <select name=lang_item style="width:100px" id=i9 disabled="disabled"> 
                            <option value=english>English</option>
                            <option value=telugu>Telugu</option>
                            <option value=hindi>Hindi</option>
                            <option value=oriya>Oriya</option>
                            <option value=kannada>Kannada</option>
                        </select>
                         </br>

            <input type="submit" value=Go style="width:100px;height:30px;position:absolute;left:190px;top:40px">
            </form>
                     </div>       
             
             
        </div>
        
            <?php
          include("includes/toptabbar.php");
          ?>
            
    </body>
</html>
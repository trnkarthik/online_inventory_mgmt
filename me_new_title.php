<html>
    <head>
        <title>Books and items</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/template_style.css" />
        <script>
        
        function init()
        {
        bid=0;
        bname=0;
        bk=0;
        it=0;
        cp=0;
        dp=0;
        qty=0;      
        }
        function settopbar()
        {
            document.g
        }
        
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
        function bid()
        {
            bid=1;
        }
        function bname()
        {
            bname=1;
        }
        function bk()
        {
            bk=1;
        }
        function it()
        {
            it=1;
        }
        function cp()
        {
            cp=1;
        }
        function dp()
        {
            dp=1;
        }
        function qty()
        {
            qty=1;
        }
        function check()
        {
            if(!(bid==1 && bname==1 && ( bk==1 || it==1) && cp==1 && dp==1 && qty==1))
            {
                alert("Please fill all the required fields");
            }
            else{
                alert("Thanks for filling all the details");
            }
        }
        </script>
    </head>
    <body onload="settopbar()">
        <?php
          include("includes/header.php");
          include("includes/sidebar.php");
          ?>
        
        
        <div id=dataarea>                        <!--Data comes here-->
           <span style="position:absolute;top:50px;left:375px;">
           <h2><i><u>Adding New Titles</u></i></h2>
           </span>
        
        <div style="position:absolute;top:130px;left:300px;width:80%">
            
            
            <form action="add_new.php" method="post" >
            
            
            <b>Book ID
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name=id onchange=bid()><p/>
                
            <b>Book Name
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name=name onchange=bname()>    
            
               
            <span style="position:absolute;top:90px;left:140px">
            <input type="radio"  name=radio_button value=books  onclick='f1()' id=i1  onchange=bk()> Books<br/> 
            <input type="radio"  name=radio_button value=items onclick='f2()' id=i2 onchange=it()> Items
                <span style="position:absolute;top:10px;left:100px;">
                <select name=lang_item style="width:100px" id=i9 disabled="disabled"> 
                <option value=english>English</option>
                <option value=telugu>Telugu</option>
                <option value=hindi>Hindi</option>
                <option value=oriya>Oriya</option>
                <option value=kannada>Kannada</option>
                </select>
                </span>
            </span>
            <div style="position:absolute;top:150px;left:0px">
            <b>Cost Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            :</b>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name=cost_price onchange=cp() >
    
            <p/>
            <b>Distribution Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            :
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name=distribution_price onchange=dp() >
            </b>
            <p/>
            <b>Quantity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            :
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name=quantity onchange=qty()>
            </b>
            <p/>
            <b>Remarks &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            :
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <textarea name=remarks>
                
            </textarea>
            </b>
            </div>
            
            
            <input type="submit" value="Submit" id="submit_button" onclick=check()>
            
            </form>
            
        </div>                    
             
             
        </div>
        
        <!--Dont see below... its just navbar(topbar) involves no role in php form so just forget it-->
        
          <?php
          include("includes/toptabbar.php");
          ?>
       
    </body>
</html>
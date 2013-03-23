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

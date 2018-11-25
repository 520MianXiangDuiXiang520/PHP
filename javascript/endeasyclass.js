/**
 * Created by lenovo on 2018/11/25.
 */
var object=document.getElementById("con");
function changecolor() {
con.style.color="red";
}
function changewidth() {
    con.style.width='300px';
    con.style.height='200px';
}
function non() {
    con.style.display="none";
}
function block() {
    con.style.display="block";
}
function changetype() {
    con.className="two";
}
function dele(){
    var y=confirm("你确定要重置样式吗")
    if(y==true)
    {
        con.className="three";
    }
}

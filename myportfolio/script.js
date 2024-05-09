console.log('ssss');

var menu = document.getElementById("button");
var link = document.querySelectorAll('.nav a');
console.log(link);
console.log(menu);

menu.onclick =function(){
for(i =0; i<= link.length;i++)
{
    link[i].style.display="block";
}
}
console.log(link);
// var btn = document.getElementsByClassName("nav")
// var addToCart = document.getElementsByClassName('.btn') = function(){

// }

// localStorage.setItem("name","Amrit")

// var name = localStorage.getItem("name")
// document.getElementById('name').innerHTML = name

let count = 0;
document.getElementById("decrease").onclick = function(){
  count-=1;
  document.getElementById().innerHTML = count;
}
document.getElementById("reset").onclick = function(){
  count=0;
  document.getElementById().innerHTML = count;
}
document.getElementById("increase").onclick = function(){
  count+=1;
  document.getElementById().innerHTML = count;
}
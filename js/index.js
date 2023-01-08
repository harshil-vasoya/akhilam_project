

var banner = document.getElementsByClassName("banner-slide");
var i = 0;j=2;
var slide = [];

slide[0] = document.getElementsByClassName("banner-slide")[0];
slide[1] = document.getElementsByClassName("banner-slide")[1];
slide[2] = document.getElementsByClassName("banner-slide")[2];

function change_slide(){
  slide[j].classList.add("b-a-out");
  setTimeout(() => {
    slide[j].style.display="none";
    slide[j].classList.remove("b-a-out")
    slide[i].style.display="block";
    i++;
    j++;
    if(i==3)i=0;
    if(j==3)j=0;
  },200);
}
change_slide();
setInterval(change_slide,4000);










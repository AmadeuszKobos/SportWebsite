var guzik = document.getElementById('light-color');
var naglowek = document.getElementById("naglowek");



guzik.addEventListener("click", function(){
    myFunction();
})

function myFunction(){
    document.getElementById("light-color").style.display = "none";
    document.getElementById("dark-color").style.display = "inline-block";
    document.getElementsByTagName("header")[0].style.background = "linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%)";
    document.getElementsByTagName("header")[0].style.color = "black";
    document.getElementsByTagName("footer")[0].style.background = "linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%)";
    document.getElementsByTagName("footer")[0].style.color = "black";
    document.getElementById("headimg1").style.filter = "none";
    document.getElementById("headimg2").style.filter = "none";
    document.getElementsByTagName("nav")[0].style.background = "linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%)";
    document.getElementsByTagName("nav")[1].style.background = "linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%)";
    var elements = document.getElementsByTagName("a");
	for(var i = 0; i < 14; i++){
		elements[i].style.color = "black";
	}
    document.getElementById("main-panel").classList.add('light-main');
    document.getElementById("log-reg-page").classList.add('light-main');
    document.getElementById("aboutus-page").classList.add('light-main');

}

var guzik2 = document.getElementById('dark-color')

guzik2.addEventListener("click", function(){
    myFunction2();
})

function myFunction2(){
    document.getElementById("dark-color").style.display = "none";
    document.getElementById("light-color").style.display = "inline-block";
    document.getElementsByTagName("header")[0].style.background = "linear-gradient(rgba(68, 68, 68, 0.9077380952380952) 19%, rgba(0, 0, 0, 0.9077380952380952) 65%)";
    document.getElementsByTagName("header")[0].style.color = "white";
    document.getElementsByTagName("footer")[0].style.background = "rgb(44, 42, 42)";
    document.getElementsByTagName("footer")[0].style.color = "white";
    document.getElementById("headimg1").style.filter = "invert()";
    document.getElementById("headimg2").style.filter = "invert()";
    document.getElementsByTagName("nav")[0].style.background = "rgb(44, 42, 42)";
    document.getElementsByTagName("nav")[1].style.background = "rgb(44, 42, 42)";
    var elements = document.getElementsByTagName("a");
    for(var i = 0; i < 14; i++){
		elements[i].style.color = "rgb(255, 220, 220)";
	}
    document.getElementById("main-panel").classList.remove('light-main');
    document.getElementById("log-reg-page").classList.remove('light-main');
    document.getElementById("aboutus-page").classList.remove('light-main');
}



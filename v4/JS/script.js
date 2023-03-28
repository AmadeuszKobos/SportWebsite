var fwd = document.getElementById('fwd');
var mid = document.getElementById('mid');
var def = document.getElementById('def');
var gk = document.getElementById('gk');
fwd.addEventListener("click", function(){
    show('fwd-players', 'mid-players', 'def-players', 'gk-players')
})
mid.addEventListener("click", function(){
    show('mid-players', 'fwd-players', 'def-players', 'gk-players')
})
def.addEventListener("click", function(){
    show('def-players', 'mid-players', 'fwd-players', 'gk-players')
})
gk.addEventListener("click", function(){
    show('gk-players', 'fwd-players', 'mid-players', 'def-players')
})

function show(a, b, c, d) {
    var a = document.getElementById(a);
    var b = document.getElementById(b);
    var c = document.getElementById(c);
    var d = document.getElementById(d);
    if (a.style.display == "block") {
      a.style.display = "none";
    } 
    else {
      a.style.display = "block";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
    }

}


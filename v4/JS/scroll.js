document.getElementById('scroll-top').onclick = (e) => {
    window.scrollTo(0,0)
}

const toTop = document.querySelector("#scroll-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})
const icon = document.querySelector(".icon");
const search = document.querySelector(".search");
icon.addEventListener("click", () => {
  search.classList.toggle("active");
});

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";

  var myIndex = 0;
  timer();
  
  function timer() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(timer, 15000);    
  }
}

butOne = document.getElementById("First");
butTwo = document.getElementById("Sec");
butOne.onclick = function () {
  console.log("hallo");
  document.getElementById("First").style.display = "none";
  document.getElementById("Sec").style.display = "block";
  document.getElementById("ID").style.display = "block";
};
butTwo.onclick = function () {
  document.getElementById("First").style.display = "block";
  document.getElementById("Sec").style.display = "none";
  document.getElementById("ID").style.display = "none";
};

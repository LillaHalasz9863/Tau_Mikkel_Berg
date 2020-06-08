var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var textbox = this.nextElementSibling;
    if (textbox.style.display === "block") {
      textbox.style.display = "none";
    } else {
      textbox.style.display = "block";
    }
  });
}
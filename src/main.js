document.addEventListener("DOMContentLoaded", function () {
  var open = document.getElementById("open");
  var close = document.getElementById("close");

  if (open) {
    open.addEventListener("click", function () {
      console.log("You are trying to open the menu.");
      document.getElementById("site-menu").style.display = "block";
    });
  }

  if (close) {
    close.addEventListener("click", function () {
      document.getElementById("site-menu").style.display = "none";
    });
  }
});

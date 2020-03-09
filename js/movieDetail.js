function showVideo() {
    var x = document.getElementById("video");
    var y = document.getElementById("image");
    var button = document.getElementById("videoButton");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display = "none";
      button.innerHTML="Ver poster";
    } else {
      x.style.display = "none";
      y.style.display = "block";
      button.innerHTML="Ver trailer";
    }
  }
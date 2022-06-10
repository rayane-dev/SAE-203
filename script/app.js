let togg1 = document.getElementById("togg1");
let d1 = document.getElementById("all-product2");

togg1.addEventListener("click", () => {
      if(getComputedStyle(d1).display != "none"){
        d1.style.display = "none";
      } else {
        d1.style.display = "block";
      }
    })
setInterval(() => {
  let clr = document.getElementById("clr").value;
  let nb = document.getElementById("number").value;
  let font = document.getElementById("font").value;

  let txt = document.getElementById("text");
  txt.style.color = clr;
  txt.style.fontFamily = font;
  txt.style.fontSize = nb + "px";

}, 100);
////////////////////////////skills////////////////////////////////////////////////////
document.getElementById("add-skill-btn").onclick = function () {
  document.getElementById("add-skill-card").style.display = "block";
  //   document.getElementById("overlay").style.display = "block";
};
document.getElementById("exit").onclick = function () {
  //   document.getElementById("overlay").style.display = "none";
  document.getElementById("add-skill-card").style.display = "none";
};
document.getElementById("submit").onclick = function () {
  location.reload();
};
////////////////////////////projects///////////////////////////////////////////////////
document.getElementById("add-projects-btn").onclick = function () {
  document.getElementById("add-projects-card").style.display = "block";
  //   document.getElementById("overlay").style.display = "block";
};
document.getElementById("exit-projects-btn").onclick = function () {
  console.log("he");
  //   document.getElementById("overlay").style.display = "none";
  document.getElementById("add-projects-card").style.display = "none";
};
//////////////////////////////jobs/////////////////////////////////////////////////
document.getElementById("add-old-jop-btn").onclick = function () {
  document.getElementById("add-old-jop-card").style.display = "block";
  //   document.getElementById("overlay").style.display = "block";
};
document.getElementById("exit-old-jop-btn").onclick = function () {
  //   document.getElementById("overlay").style.display = "none";
  document.getElementById("add-old-jop-card").style.display = "none";
};

var i = 0;
var txt = 'Write Your Words Here';
var txt2 = 'Best Platform For Writing Notes and Diaries.Your Notes With You Wherever You Go.Easy To Use and Protected System. Hello, Everyone! I am Deepak Chaudhary, A BCA student.I am dedicated and motivated learner and I am pursuing my degree in Computer Application. I have a strong passion for technology and always eager to learn new things. With my sharp mind and a positive attitude';
var speed = 100;
let k = 0;
let j = 0;
window.onload = function typeWriter() {
    if (i < txt.length) {
      document.getElementById("demo").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
}
function typeWriter2() {
  if (j < txt2.length){
    document.getElementById("demo1").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(typeWriter2, 70);
  }
}
setTimeout(typeWriter2,3500);



// function hideThem(){
//   var element = document.getElementById('main');
//   element.className = "letshideit";
// }

// setTimeout(hideThem, 5000);
//  Bootstrap tooltip code 
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
// Bootstrap tooltip code Ends 

// To Erase all the content of the page notes
function erasefunction(){
  document.getElementById('textarea').value = "";
}





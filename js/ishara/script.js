
    function myFunction() {
      var y = document.getElementById("fistdiv")
        var x = document.getElementById("demo");
        var z = document.getElementById("searchbtnmy")
        if (x.style.display === "none") {
            x.style.display = "block";
            z.style.display = "none";
            y.style.width= "30%";
            y.style.height="80%";
            y.style.transitionDuration="0.5s"
        } else {
            x.style.display = "none";
            y.style.width= "30%";
            y.style.height="20%";
            z.style.display = "block";
        }
    }
var i = 0;
var txt = 'Get all your laboratory tests done from home and reports delivered right to your doorstep. Simply follow the below steps .';
var speed = 80;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

function openCity(Name,elmnt,elmnt,gallery) {
  var i, tabcontent,gallery;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    
  }
  
  document.getElementById(Name).style.display = "block";
  
  

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

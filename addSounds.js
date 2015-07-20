var counter2 = 1;
var limit2 = 5;
function addSound(divName){
     if (counter2 == limit2)  {
          alert("You have reached the limit of sounds. ");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Sound " + (counter2 + 1) + " <br> <input type='text' name='mySounds[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter2++;
     }
}
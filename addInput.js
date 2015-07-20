var counter = 1;
var limit = 5;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of questions. ");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Question " + (counter + 1) + " <br> <input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
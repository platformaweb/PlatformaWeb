var counter3 = 1;
var limit3 = 10;
function addAnswer(divName){
     if (counter3 == limit3)  {
          alert("You have reached the limit of answers. ");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Answer " + (counter2 + 1) + " <br> <input type='text' name='myAnswers[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter3++;
     }
}
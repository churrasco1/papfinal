<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;login_professor.php"></meta>
</head>
<body>
    
</body>
<h3><bold><center>Registo efetuado com sucesso! <br> A redirecionar em...<span id="timer"></span></center></bold></h3>
</html>
<script>
    var count=3;

var counter=setInterval(timer, 1000); 

function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     
     return;
  }

  document.getElementById("timer").innerHTML=count + " segundos"; 
  
}
    </script>
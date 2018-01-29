<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com PHP e AJAX.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
    <script>
      function showHint(str){
        if(str.length == 0){
          document.getElementById("txtHint").innerHTML = "";
          return;
        }else{
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "gethint.php?q=" + str, true);
          xmlhttp.send();
        }
      }

    </script>
  </head>
  <body>
  <p><b>Start typing a name in the input field below:</b></p>
  <form>
  First name: <input type="text" onkeyup="showHint(this.value)">
  </form>
  <p>Suggestions: <span id="txtHint"></span></p>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>

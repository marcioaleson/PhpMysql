<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com PHP e AJAX.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
    <script>
      function showUser(str){
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
        }else{
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function{
          if(this.readyState == 4 && this.status == 200){
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "getuser.php?q=" + str, true);
      xmlhttp.send();
    }
    </script>
  </head>
  <body>
  <form>
    <select name="users" onchange="showUser(this.value)">
      <option value="">Select a person:</option>
      <option value="1">Peter Griffin</option>
      <option value="2">Lois Griffin</option>
      <option value="3">Joseph Swanson</option>
      <option value="4">Glenn Quagmire</option>
    </select>
  </form>
  <br>
  <div id="txtHint"><b>Person info will be listed here.</b></div>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>

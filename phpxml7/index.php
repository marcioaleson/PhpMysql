<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com XML e PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
  </head>
  <body>
    <?php
    //Initialize the XML parser
    $parser = xml_parser_create();

    //Function to use at the start of an element
    function start($parser, $element_name, $element_attrs){
      switch ($element_name) {
        case 'NOTE':
          # code...
          echo "--Note--<br>";
          break;
        case 'TO':
          # code...
          echo "To:";
          break;
        case 'FROM':
          # code...
          echo "From:";
          break;
        case 'HEADING':
          # code...
          echo "Heading:";
          break;
          case 'BODY':
            # code...
            echo "Message:";
            break;
      }
    }

      //Function to use at the end of an element
      function stop($parser, $element_name){
        echo "<br>";
      }

      //Function to use when finding character data
      function char($parser, $data){
        echo $data;
      }

      //Specify element hendler
      xml_set_element_handler($parser, "start", "stop");

     //Specify data handler
     xml_set_character_data_handler($parser, "char");

     //Open XML file
     $fp = fopen("note.xml","r");

     while ($data=fread($fp, 4096)) {
       # code...
       xml_parse($parser, $data, feof($fp)) or
       die(sprintf("XML Error: %s at line %d", xml_error_string(xml_get_error_code($parser)),
       xml_get_current_line_number($parser)));
     }

     //Free the XML parser
     xml_parser_free($parser);

          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>

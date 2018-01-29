<?php
//Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "Márcio";

//Get the q parameter from url
$q = $_REQUEST["q"];

$hint = "";

//Lookup all hint from array if $q is diffent from ""
if($q !== ""){
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($a as $name) {
    # code...
    if(stristr($q, substr($name, 0 , $len))){
      if ($hint === "") {
        # code...
        $hint = $name;
      } else {
        # code...
        $hint.=", $name";
      }

    }
  }
}

//Output "no suggestion if no hint was found or output correct values"
echo $hint === "" ? "no suggestion": $hint;


 ?>

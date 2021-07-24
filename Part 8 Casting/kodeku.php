<?php
$phi = 3.14;
echo (int) $phi;
echo "\n";

// more example
var_dump((int) 3.45); // 3
  echo "\n";
  var_dump((int) "3.45");  // 3 (string 3.45)
  echo "\n";
  var_dump((int) "9 Naga");  //9
  echo "\n";
  var_dump((int) "Naga Bonar"); // 0
  echo "\n";
  var_dump((int) "Wiro Sableng 212"); //0
  echo "\n";
  var_dump((int) FALSE); // 0
  echo "\n";
  var_dump((int) "1FALSE"); //1
  echo "\n";
  var_dump((int) array()); // 0
  echo "\n";
  var_dump((int) array("data")); //1
  echo "\n"; 
 
// Konversi menjadi Float
  var_dump((float) 3); // 3
  echo "\n";
  var_dump((float) "3.45");  // 3.45
  echo "\n";
  var_dump((float) "9 Naga");  //9
  echo "\n";
  var_dump((float) "Naga Bonar"); // 0
  echo "\n";
  var_dump((float) "Wiro Sableng 212"); //0
  echo "\n";
  var_dump((float) FALSE); // 0
  echo "\n";
  var_dump((float) "1FALSE"); //1
  echo "\n";
  var_dump((float) array()); // 0
  echo "\n";
  var_dump((float) array("data")); //1
  echo "\n";
 
// Konversi menjadi Boolean
  var_dump((bool) 3); // TRUE
  echo "\n";
  var_dump((bool) 0);  // FALSE
  echo "\n";
  var_dump((bool) -1);  // TRUE
  echo "\n";
  var_dump((bool) ""); // FALSE
  echo "\n";
  var_dump((bool) " "); //TRUE
  echo "\n";
  var_dump((bool) "0"); // FALSE
  echo "\n";
  var_dump((bool) "FALSE"); // TRUE (!) - karena string
  echo "\n";
  var_dump((bool) array()); // FALSE
  echo "\n";
  var_dump((bool) array("data")); // TRUE
  echo "\n";
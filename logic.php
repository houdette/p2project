<?php
function random_readable_pwd($length='3'){

  // the wordlist from which the password gets generated 
 
  $words = array ("chuckle", "puffins","particles","captain","maecja","pugncea","ubuesque","bulbous","tagine","marmitte", "councel", "mamcam", "mainland", "charisma", "falacious", "brainy", "gracious", "breathtaking", "malicious", "bravery","facile");
  
     
  if (count($words) == 0){ die('wordlist is empty!'); }

  
  /* choose a number of words to add */
    $pwd = '';
  for ($i=1; $i <= $length; $i++) { 
    $r = mt_rand(0, count($words)-1);
    $pwd .= "-" . $words[$r];
  }
  $pwd = substr($pwd, 1);
 

  /* NUMBERS */
  if (isset($_POST['addnumber']))
  {
    $num = mt_rand(1, 99);
    $pwd .= $num;
  }

  /* SYMBOLS */
  if (isset($_POST['addspecial']))
  {
    $syms = "!@#$%^&*()-+?";
    $int = rand(0,strlen($syms)-1);
    $rand_char = $syms[$int];

    $pwd .= $rand_char;
    
  }

  return $pwd;
}


?>
<!DOCTYPE html>

<html>

<head> 

<h2> Doudy's Password Generator</h2>
<h4> This page uses a "xkcd" style password. If you are not familiar with it, see below: </h4>
</head>
<body>
 
  <link type="text/css" rel="stylesheet" href="styles.css"/>
   <?php require "logic.php"?>

    <form action="" method="POST" role="form">
    
     <form action="" method="POST" role="form">

      <div class="form-group">
        <label>Number of words to include</label>
        <select id="numberwords" name="numberwords">
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
        </select>
      </div>

      <div class="form-group">
        <label>Add a number?</label>
        <input type="checkbox" name="addnumber" id="addnumber" checked="">
      </div>

      <div class="form-group">
        <label>Add a special character?</label>
        <input type="checkbox" name="addspecial" id="addspecial" checked="">
      </div>

      <button type="submit">Generate Password</button>
    </form>

    <div class="password">
    
      <?php
      if ($_POST['numberwords'])
        echo "Password is: " . random_readable_pwd($_POST['numberwords']);
    ?> 
    </body><br></br>
    <br></br>
   
   
   
    <img src='http://imgs.xkcd.com/comics/password_strength.png'/>
    
    

 
  </html>
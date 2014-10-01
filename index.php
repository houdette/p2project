<html><head><title>  Password generator</title>
<style type="text/css">
.password{
  background: #eee;
  padding: 20px;
}
</style>
</head>
<body>
  <h1> Doudy's Password generator</h2>
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

      <button type="submit">Generate</button>
    </form>

    <div class="password">
      <?php
      if ($_POST['numberwords'])
        echo "Password is: " . random_readable_pwd($_POST['numberwords']);
      
      ?>
    </div>

  </body>
  </html>
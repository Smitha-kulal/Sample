<!DOCTYPE HTML>
<html>
<head>
  <title>User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/cloudicon.png"/>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" title="style" />
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="User_Page1.html">Home</a></li>
          <li class="selected"><a href="User_Page3.php">View Shared Files</a></li>
          <li><a href="User_Page2.html">Decrypt Files</a></li>
          <li><a href="Index.html">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>View Shared Files :</h2>
        <br>
        <table style="width:100%;">
          <tr>
            <th>File Id</th>
            <th>File Name</th>
            <th>Action</th>
          </tr>
          <?php
            $files = glob("C:/Users/Sony/Dropbox/*.*");
            for($i = 0; $i < count($files); $i++) {
              $uploaded_file = $files[$i];
              $supported_file = array('txt', 'jpg', 'enc', 'dec');
              $ext = strtolower(pathinfo($uploaded_file, PATHINFO_EXTENSION));
              if(in_array($ext, $supported_file)) {
                echo "<tr><td>";
                echo $i+1;
                echo "</td><td>";
                echo basename($uploaded_file);
                echo "</td><td>";
                echo '<a href="Download.php?file=' . $uploaded_file . '">Download</a>';
                echo "</td></tr>";
              }
              else {
                continue;
              }
            }
          ?>
        </table>
      </div>
    </div>
    <div id="footer">
    </div>
  </div>
</body>
</html>
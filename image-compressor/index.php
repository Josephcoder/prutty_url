<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha256-OweaP/Ic6rsV+lysfyS4h+LM6sRwuO3euTYfr6M124g=" crossorigin="anonymous" />
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass">Sass</a></li>
        <li><a href="badges">Components</a></li>
        <li><a href="collapsible">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  
<div class="container">
<div class="row">
<div class="col s4"></div>
<div class="col s4">
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <h4>Upload your file</h4>
    <input type="file" name="uploaded_file"><br />
    <input type="submit" value="Upload" name="upload">
  </form></div>
  <div class="col s4"></div>
  </div>
</div>
</body>
</html>
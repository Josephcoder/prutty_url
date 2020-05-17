<?php
function base()
{
echo str_replace("index.php","",$_SERVER['PHP_SELF']);
}
$url = explode("/",$_SERVER['QUERY_STRING']);
?>
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
        <li><a href="<?php  base(); ?>sass">Sass</a></li>
        <li><a href="<?php  base(); ?>badges">Components</a></li>
        <li><a href="<?php  base(); ?>collapsible">JavaScript</a></li>
      </ul>
    </div>
  </nav>
 <?php
 if(isset($url[0]) && $url[0] != ''){
 if (file_exists('pages/' . $url[0] . '.php')) {
     require_once 'pages/' . $url[0] . '.php';
 }else{
  require_once 'pages/404.php';
 }
}else{
  require_once 'pages/home.php';
}
 ?>
</body>
</html>
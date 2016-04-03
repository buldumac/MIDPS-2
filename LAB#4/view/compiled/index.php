<?php # lastedit[1459706947] ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Mini Blog</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/view/css/1.css" type="text/css" media="screen,projection" />
</head>
<body>
<div id="container">
  <div id="header">
    <h1><?php echo Config::get('project.header_title'); ?></h1>
    <h2><?php echo Config::get('project.header_slogan'); ?></h2>
    <ul id="nav">
      <li><a href="/">Home</a></li>
    </ul>
  </div>
  <div id="sidebar">
    <h1>Github news</h1>
    <p>
      <?php foreach( $github as $id => $row ) { ?>
      - <b><?php echo $row['title']; ?></b><br>
      <i><?php echo date( 'j M, H:i:s', $row['time'] );; ?></i><br>
      <?php } ?>
    </p>
  </div>
  <div id="content">
    <h1><a href="#intro" id="intro">Introduction</a></h1>
    <h2>Everyting needs an intro!</h2>
    <p> Hello and welcome to miniBLOG! Thi've left everything very plain using mainly greys. These colours are all easily changed via the stylesheet. The backgorund image can be changed easily too by opening it in a graphics program and adjusting the hue/saturation. Got something to say? Say it with miniBLOG! </p>
  </div>
  <div id="footer">
    <p> Laboratorul Nr. 4 © <?php echo date('Y'); ?> </p>
  </div>
</div>
</html>

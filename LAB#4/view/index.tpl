<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Mini Blog</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/view/css/1.css" type="text/css" media="screen,projection" />
  <script type="text/javascript" src="/view/js/jquery-2.2.2.min.js"></script>
  <script type="text/javascript" src="/view/js/main.js"></script>
</head>
<body>
<div id="container">
  <div id="header">
    <h1>{{ Config::get('project.header_title') }}</h1>
    <h2>{{ Config::get('project.header_slogan') }}</h2>
    <ul id="nav">
      <li><a href="/" class="home">Home</a></li>
      <li><a href="#" class="add_new_article">Add new article</a></li>
    </ul>
  </div>
  <div id="sidebar">
    <h1>Github news</h1>
    <p>
      @begin foreach( $github as $id => $row )
      - <b>{{ $row['title'] }}</b><br>
      <i>{{ date( 'j M, H:i:s', $row['time'] ); }}</i><br>
      @end
    </p>
  </div>
  <div id="content">
    <div class="articles">
      <h1><a href="#intro" id="intro">Introduction</a></h1>
      <h2>Everyting needs an intro!</h2>
      <p> Hello and welcome to miniBLOG! Thi've left everything very plain using mainly greys. These colours are all easily changed via the stylesheet. The backgorund image can be changed easily too by opening it in a graphics program and adjusting the hue/saturation. Got something to say? Say it with miniBLOG! </p>
    </div>

    <div class="new-article hide">
      <h1>Create new article</h1>

      <p>
        <b>Title</b>:<br>
        <input type="text" name="title">
      </p>

      <p>
        <b>Author</b>:<br>
        <input type="text" name="author">
      </p>

      <p>
        <b>Title</b>:<br>
        <textarea name="text"></textarea>
      </p>

      <button class="create-article">Create new</button>

    </div>

    </div>
  </div>
</div>
</html>

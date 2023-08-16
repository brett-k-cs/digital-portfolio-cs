<!doctype html>
<html lang="en">
  <head>
    <title>Brett Kaplan's Digital Portfolio - CS III</title>
    <meta name="description" content="Digital Portfolio">
    <link href="../../styles.css" rel="stylesheet" />
  </head>
  <body>
      <nav class="mainNav">
	  <a href="../index.html">Comp Sci III</a>
	<a href="../../index.html">Home</a>
	<a href="../../aboutme.html">About Me</a>
	<a href="../../projects.html">Projects</a>
      </nav>
      <main>
	  <h1 style="text-align: left;">Computer Science III - Essays</h1>
	  <?php
      	  if ($handle = opendir('.')) {
	      while (false !== ($entry = readdir($handle))) {
		 if ($entry != "." && $entry != ".." && strpos($entry, "#") == false && strpos($entry, "~") == false && (strpos($entry, ".txt") != false || strpos($entry, ".html") != false) && (strpos($entry, "index") == false) && (strpos($entry, "Tutorial") == false)) {
		     list($title, $extension) = explode('.', $entry);
		     $entry = str_replace(" ", "%20", $entry);
		    echo "<h2><a href='$entry'>$title</a></h2>";
		 }
	     }
	     closedir($handle);
	 }
      ?>
    </main>
  </body>
  </html>

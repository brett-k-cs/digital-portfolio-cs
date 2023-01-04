<!doctype html>
<html lang="en">
  <head>
    <title>Brett Kaplan's Digital Portfolio - CS II</title>
    <meta name="description" content="Digital Portfolio">
    <link href="../../../../styles.css" rel="stylesheet" />
    <style>
     main {
	 padding-left: 3vw;
	 padding-right: 3vw;
     }
     h2 {
	 text-align: center;
     }
     .row {
	 display: flex;
	 width: 100%;
     }
     .column {
	 flex: 50%;
	 padding: 1vw;
     }
    </style>
  </head>
  <body>
      <nav class="mainNav">
	  <a href="../index.html">Comp Sci II</a>
	<a href="../../index.html">Home</a>
	<a href="../../aboutme.html">About Me</a>
	<a href="../../projects.html">Projects</a>
      </nav>
      <main>
	  <h1 style="text-align: centert;">Computer Science II - ISP Journals</h1>
	  <div class="row">
	      <div class="column">
		  <h2>SchoolFood Journals</h2>
		  <ul>
		  <?php
      		  if ($handle = opendir('.')) {
		      while (false !== ($entry = readdir($handle))) {
			  if (strpos($entry, "SchoolFood") != false && $entry != "." && $entry != ".." && strpos($entry, "#") == false && strpos($entry, "~") == false && (strpos($entry, ".txt") != false || strpos($entry, ".html") != false) && (strpos($entry, "index") == false && strpos($entry, "/") == false) && (strpos($entry, "Tutorial") == false)) {
			      list($title, $extension) = explode('.', $entry);
			      $entry = str_replace(" ", "%20", $entry);
			      echo "<li><h3><a href='$entry'>$title</a></h3></li>";
			  }
		      }
		      closedir($handle);
		  }
		  ?>
		  </ul>
	      </div>
	      <div class="column">
		  <h2>Arena Scheduler Journals</h2>
		  <ul>
		  <?php
      		  if ($handle = opendir('.')) {
		      while (false !== ($entry = readdir($handle))) {
			  if (strpos($entry, "SchoolFood") == false && $entry != "." && $entry != ".." && strpos($entry, "#") == false && strpos($entry, "~") == false && (strpos($entry, ".txt") != false || strpos($entry, ".html") != false) && (strpos($entry, "index") == false && strpos($entry, "/") == false) && (strpos($entry, "Tutorial") == false)) {
			      list($title, $extension) = explode('.', $entry);
			      $entry = str_replace(" ", "%20", $entry);
			      echo "<li><h3><a href='$entry'>$title</a></h3></li>";
			  }
		      }
		      closedir($handle);
		  }
		  ?>
		  </ul>
	      </div>
      </main>
      <script src="../../main.js"></script>
  </body>
  </html>

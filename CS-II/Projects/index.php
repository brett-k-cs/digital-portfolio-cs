<!doctype html>
<html lang="en">
  <head>
    <title>Brett Kaplan's Digital Portfolio - CS II</title>
    <meta name="description" content="Digital Portfolio">
    <link href="../../styles.css" rel="stylesheet" />
  </head>
  <body>
      <nav class="mainNav">
	  <a href="../index.html">Comp Sci II</a>
	<a href="../../index.html">Home</a>
	<a href="../../aboutme.html">About Me</a>
	<a href="../../projects.html">Projects</a>
      </nav>
      <main>
	  <h1 style="text-align: left;">Computer Science II - Projects</h1>
	  <?php
      	  if ($handle = opendir('.')) {
	      while (false !== ($entry = readdir($handle))) {
		 if ($entry != "." && $entry != ".." && strpos($entry, "#") == false && strpos($entry, "~") == false && (strpos($entry, ".txt") != false || strpos($entry, ".html") != false) && (strpos($entry, "index") == false && strpos($entry, "/") == false) && (strpos($entry, "Tutorial") == false)) {
		     list($title, $extension) = explode('.', $entry);
		     $entry = str_replace(" ", "%20", $entry);
		    echo "<h2><a href='$entry'>$title</a></h2>";
		 }
		  if($entry == "Business Plan") {
		      echo "<div class=\"dropdown dropBgHover\">";
		      echo "<button class=\"dropbtn\" style=\"font-weight: bold; text-decoration: underline;\" onmouseover=\"toggleDropdown('Business-Plan')\">Business Plan</button>";
		      echo "<div id=\"Business-Plan\" class=\"dropdown-content\">";
		      echo "<a href=\"Business%20Plan/index.html\">Home</a>";
		      echo "<a href=\"Business%20Plan/considered.html\">Considered Proposals</a>";
		      echo "</div>";
		      echo "</div>";
		  }
	     }
	     closedir($handle);
	 }
      ?>
      </main>
      <script src="../../main.js"></script>
  </body>
  </html>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prep Football '14<?php echo htmlspecialchars($title);?></title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  	<div id="page-wrap">
	<div class="fixed-custom">
	  <nav class="top-bar backgroundtop" data-topbar>
	    <ul class="title-area">
	      <li class="name hide-for-small">
	        <h1><a href="http://www.sctimes.com">SCTimes</a></h1>
	      </li>
	      <li class="name show-for-small">
	        <h1><a href="http://www.sctimesapps.com/projects/prepfootball14/">High School Football '14</a></h1>
	      </li>
	       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	      <li class="toggle-topbar menu-icon"><a href="javascript:void(0)"><span></span></a></li>
	    </ul>

	    <section class="top-bar-section">
	    	<!-- Left Nav Section -->
	    	<ul class="left hide-for-small">
	    	  <li><a href="http://www.sctimesapps.com/projects/prepfootball14/">High School Football '14</a></li>
	    	</ul>
	      <!-- Right Nav Section -->
	      <ul class="right">
	        <li><a href="page.php?page=cover">Cover Story</a></li>
	        <li class="has-dropdown">
	          	<a href="javascript:void(0)">Teams & Conferences</a>
	          	<ul class="dropdown">
				  <?php
				  $file = fopen("teamindex.txt", "r");
					//Output a line of the file until the end is reached
					$currentconf = "";
					$firstconf = true;
					while(! feof($file))
					{
						$readarr = fgets($file);
						$readarr = explode('|',$readarr);
						$conf = $readarr[0];
						$schoolname = $readarr[1];
						$pageurl = $readarr[2];
						
						if (($firstconf != true) && ($currentconf != $conf)) {
								echo "</ul></li>";
						}
						if ($currentconf != $conf) {
								echo "<li class='has-dropdown'>";
								echo "<a href='javascript:void(0)'>".$conf."</a>";
								echo "<ul class='dropdown'>";
								$currentconf = $conf;
								$firstconf = false;
						}
						echo "<li><a href='page.php?page=".$pageurl."'>".$schoolname."</a></li>";	
					}
					echo "</ul></li>";
					fclose($file);			  
				  ?>
	          	</ul>
	        </li>
	      </ul>
	    </section>
	  </nav>
	</div>

	<section id="main-content">
	<div id="guts">
		<iframe scrolling="no" height="1" width="1" frameborder="0" src="omniture.php?pagetitle=<?php echo $title; ?>" style="position:absolute;left:-5000px;"></iframe>
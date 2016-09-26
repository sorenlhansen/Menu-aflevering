<?php require ('database_fb.php')  // henter connection til one.coms webserver ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Menu.css">
<meta charset="utf-8">
<?php $curpage = basename($_SERVER['PHP_SELF']);  //definere $curpage som den aktive side.?>
<title><?php echo "Menu- $curpage"?> <!--Titlen bliver til "Menu - " og den aktive side--></title>
</head>


<body>
	<nav>
		<ul>
        	<li><a href="hjem.php" <?php if ($curpage == 'hjem.php'){echo'class="active"';} // Hvis $curpage er hjem.php skrives der class="active" i anchor. Dette gør, at den aktive side bliver stylet fra CSS'en ?>>Home</a></li>
        	<li><a href="about.php" <?php if($curpage == 'about.php'){echo'class="active"';} ?>>About</a></li>
    	    <li><a href="art.php" <?php if ($curpage == 'art.php'){echo'class="active"';} ?>>Art</a></li>
  	    </ul>
	</nav><br><br><br>






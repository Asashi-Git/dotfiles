<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Flèche d’Argent </title>
</head>
<body class="navbar">
<div id="root">
  <div  class="topnav">

  <img src="..\image\logo.png" class="logo">
  

    <!-- Classic Menu -->
    <nav role="navigation" id="topnav_menu" class="nav">
		<a class="topnav_link" href="">HOTEL</a>
		<a class="topnav_link" href="">RESTAURANT</a>
		<a class="topnav_link" href="">SPA</a>
		<?php 
			if (isset($_SESSION["client_id"])){?>
				<a class="topnav_link" href="page_client.php">PAGE CLIENT</a>
			<?php } ?>
    </nav>

<div class="login">
<?php
		if (!isset($_SESSION["client_id"])) {
			?>
			<a class="topnav_link" href="register.php">INSCRIPTION</a>
			<a class="topnav_link" href="login.php">CONNEXION</a>
			<?php
		} else {
			?>
			<a class="topnav_link" href="disconnect.php">DECONNEXION</a>
			<?php
		}
	?>
</div>
    


    <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
      <!-- Some spans to act as a hamburger -->
      <span></span>
      <span></span>
      <span></span>
    </a>

    <!-- Responsive Menu -->
    <nav role="navigation" id="topnav_responsive_menu">
      <ul>
        <li class="burger"><a href="/">HOTEL</a></li>
        <li class="burger"><a href="/about">RESTAURANT</a></li>
        <li class="burger"><a href="/contact-us">SPA</a></li>
		<?php 
			if (isset($_SESSION["client_id"])){?>
				<li class="burger"><a href="page_client.php">PAGE CLIENT</a></li>
			<?php } ?>
      </ul>
    </nav>
  </div>
</div>
</body>
</html>

<script>
function showResponsiveMenu() {
  var menu = document.getElementById("topnav_responsive_menu");
  var icon = document.getElementById("topnav_hamburger_icon");
  var root = document.getElementById("root");
  if (menu.className === "") {
    menu.className = "open";
    icon.className = "open";
    root.style.overflowY = "hidden";
  } else {
    menu.className = "";                    
    icon.className = "";
    root.style.overflowY = "";
  }
}
</script>



<style>
  /* ******************** NAV BAR ******************** */
  .burger{
    background: #120c04;
  }
  .logo{
    height: 50px; /* Ajuste la hauteur selon ton besoin */
  width: auto; /* Maintient les proportions */
  max-width: 100px;
  }
.topnav {
  background-color: #120c04;
  display: flex;
  align-items: center;
  color: white;
  padding: 12px;
  text-decoration: none;
  justify-content: space-between;
}
.topnav_link {
  color: #CEAB8D;
  padding: 10px;
  text-decoration: none;
  background-color: #120c04;
}
.nav{
  display: flex;
  justify-content: space-between;
}
.topnav_link:hover {
  color:#CEAB8D;
}

/* hide responsive menu */
#topnav_hamburger_icon,
#topnav_responsive_menu {
  display: none;
  background-color: #120c04;
}

@media only screen and (max-width: 768px) {
  /* hide classic menu */
  #topnav_menu {
    display: none;
  }

  /* position home link at left and hamburger at right */
  #home_link {
    flex-grow: 1;
  }

  /* disable horizontal scrolling  */
  #root {
    position: relative;
    overflow-x: hidden;
  }

  /* show responsive menu and position at the right of the screen */
  #topnav_responsive_menu {
    display: block;
    position: absolute;
    margin: 0;
    right: 0;
    top: 0;
    width: 100vw;
    height: 100vh;

    z-index: 99;

    transform-origin: 0% 0%;
    transform: translate(200%, 0);

    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1);
    background-color: #120c04;

  }

  #topnav_responsive_menu ul {
    display: flex;
    flex-direction: column;

    position: absolute;
    margin: 0;
    right: 0;
    top: 0;

    min-width: 50vw;
    height: 100vh;
    padding: 56px 0 0;

    text-align: center;

    background: #ededed;
    list-style-type: none;
    -webkit-font-smoothing: antialiased;
    background-color: #120c04;

  }

  #topnav_responsive_menu li {
    padding: 12px 24px;
  }

  #topnav_responsive_menu a {
    white-space: nowrap;
    color: #CEAB8D;
    text-decoration: none;
  }

  /* And let's slide it in from the right */
  #topnav_responsive_menu.open {
    transform: none;
    position: fixed;
  }

  /* ******************** HAMBURGER ICON ******************** */
  /* define size and position of the hamburger link */
  #topnav_hamburger_icon {
    display: block;
    position: relative;
    margin: 16px;
    width: 33px;
    height: 28px;

    z-index: 100;

    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;
  }

  /* define the style (size, color, position, animation, ...) of the 3 spans */
  #topnav_hamburger_icon span {
    display: block;
    position: absolute;
    height: 4px;
    width: 100%;
    margin-bottom: 5px;

    background: #CEAB8D;
    border-radius: 3px;

    z-index: 100;

    opacity: 1;
    left: 0;

    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: 0.25s ease-in-out;
    -moz-transition: 0.25s ease-in-out;
    -o-transition: 0.25s ease-in-out;
    transition: 0.25s ease-in-out;
  }

  /* set the 3 spans position to look like a hamburger */
  #topnav_hamburger_icon span:nth-child(1) {
    top: 0px;
    -webkit-transform-origin: left top;
    -moz-transform-origin: left top;
    -o-transform-origin: left top;
    transform-origin: left top;
  }
  #topnav_hamburger_icon span:nth-child(2) {
    top: 12px;
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center;
  }
  #topnav_hamburger_icon span:nth-child(3) {
    top: 24px;
    -webkit-transform-origin: left bottom;
    -moz-transform-origin: left bottom;
    -o-transform-origin: left bottom;
    transform-origin: left bottom;
  }

  /* change color when opening the menu */
  #topnav_hamburger_icon.open span {
    background: #CEAB8D;
  }

  /* the first span rotates 45° \ */
  #topnav_hamburger_icon.open span:nth-child(1) {
    width: 110%;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    background-color: #CEAB8D;

  }

  /* the second span disappears */
  #topnav_hamburger_icon.open span:nth-child(2) {
    width: 0%;
    opacity: 0;
  }

  /* the last span rotates -45° / */
  #topnav_hamburger_icon.open span:nth-child(3) {
    width: 110%;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    background-color: #CEAB8D;

  }
}

</style>
<?php
defined('MYAAC') or die('Direct access not allowed!');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- Powered by UNNAMED Acc. Maker &copy;2009 - 2010 by Gesior. -->
<!-- Rewrote and rebuild for Altara.pl purposes (c)2009 - 2010. -->
<!-- Designed by DeGhost -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo template_place_holder('head_start'); ?>
	<link rel="shortcut icon" href="<?PHP echo $template_path; ?>/images/others/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?PHP echo $template_path; ?>/images/others/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?PHP echo $template_path; ?>/default.css" media="screen"/>
	<!--link rel="stylesheet" type="text/css" href="<?PHP echo $template_path; ?>/basic.css" media="screen"/-->
	<title><?PHP echo $title; ?></title>
	<?PHP echo $layout_header; ?>
	<style type="text/css">
		@import "layout.css";
/* styles.css */
.slider {
    position: relative;
    max-width: 100%;
    overflow: hidden;
	width: 520px;
	filter: brightness(0.85) drop-shadow(2px 2px 2px black);
	margin: 3px 7px 0 4px
}

.slides {
    display: flex;
    transition: transform 5s ease-in-out, opacity 5s ease-in-out;
    width: 100%;
}

.slide {
    min-width: 100%; /* Asegura que cada diapositiva ocupe el 100% del ancho del contenedor */
    box-sizing: border-box;
    opacity: 0; /* Oculta todas las diapositivas por defecto */
    transition: opacity 2s ease-in-out;
    position: absolute; /* Asegura que las diapositivas se superpongan */
    top: 0;
    left: 0;
	border: 2px solid steelblue;
}

.slide img {
    width: 100%;
    display: block;
}

.show {
    opacity: 1; /* Muestra solo la diapositiva actual */
    position: relative; /* Asegura que la diapositiva actual esté en la posición correcta */
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}


	</style>
	<?php echo template_place_holder('head_end'); ?>
</head>
<body class="home">
	<?php echo template_place_holder('body_start'); ?>
<div id="bg1">
	<div id="bg2">
		<div id="header" class="container">
			<div id="logo">
			</div>
			<div id="topmenu">
			</div>
		</div>
	</div>
	<?php
		$menu_table_exist = tableExist(TABLE_PREFIX . 'menu');
		if($menu_table_exist) {
			require_once($template_path . '/menu/top_dynamic.php');
		}
		else {
			require_once($template_path . '/menu/top.php');
		}
	?>
	<div id="bar">
		<div class="container">
			<div id="login">
				<?php
					if ($logged) {
						echo'<form method="post" action="' . getLink('account/logout') . '">
						<fieldset><p>Hello.&nbsp;&nbsp;&nbsp;&nbsp;<a href="' . getLink('account/manage') . '">Account Management</a>&nbsp;</p>
						<input value="Logout" class="input-submit" type="submit" />
						</fieldset>
						</form>';
					}else{
						echo'<form method="post" action="' . getLink('account/manage') . '">
							<fieldset> <span class="input-text"> <input name="account_login" value="" placeholder="Account" type="text" /> </span><span class="input-text"> <input name="password_login" value="" placeholder="Password" type="password" /> </span> <input value="Login" class="input-submit" type="submit" />
							<p><a href="' . getLink('account/lost') . '">Lost Account?</a>&nbsp;</p>
							</fieldset>
						</form>';
					}
				?>
			</div>
			<div id="search">
				<form method="post" action="<?php echo getLink('characters'); ?>">
					<fieldset> <span class="input-text"> <input name="name" placeholder="Player name" type="text" /> </span><input value="Search" class="input-submit" type="submit" /></fieldset>
				</form>
			</div>
		</div>
	</div>
<div id="bg3">
<div id="bg4">
<div id="page" class="container">
<div id="content">
	<div id="sidebar2">

	<?php
			if (PAGE == "news") {
				?>
<div class="slider">
    <div class="slides">
        <div class="slide">
            <img src="<?PHP echo $template_path; ?>/images/hero/2.jpg" alt="Imagen 1">
        </div>
        <div class="slide">
            <img src="<?PHP echo $template_path; ?>/images/hero/3.jpg" alt="Imagen 2">
        </div>
        <div class="slide">
            <img src="<?PHP echo $template_path; ?>/images/hero/4.jpg" alt="Imagen 3">
        </div>
        <div class="slide">
            <img src="<?PHP echo $template_path; ?>/images/hero/5.jpg" alt="Imagen 4">
        </div>
    </div>
    <!-- Botones de navegación 
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>-->
</div>

				<?php
			}
		?>

		<div id="box3" class="box-style3">
			<?php 
if (PAGE !== "news") {
			?>
		<h2 class="title"><?php echo $title; ?></h2>
		<?php
		}
		?>
			<div class="main_content">
				<?php echo tickers() . template_place_holder('center_top') . $content; ?>
			</div>
		</div>
	</div>

	<div id="sidebar3">
		<div id="box4" class="box-style4">
			<h2 class="title"><center>Status</center></h2>
			<div class="entry">
				<ul class="list1">
				</ul>
				<center>
				<?php
		if($status['online']){
		echo 'Players On-Line:<br>
		<a href="' . getLink('online') . '" title="Players Online"><b>'.$status['players'] . '/' . $status['playersMax'].'</b></a>
		<br>Uptime:<br>
		<b>'.$status['uptimeReadable'].'</b><br>';
		}else{
		echo '<font color="red">Server is Offline</font>';
		}
		?>
				</center>
			</div>
		</div>

		<div id="box5" class="box-style4">
			<div class="entry">
				<h2 class="title"><center>Best players</center></h2>
					<center>
		<?php
						foreach(getTopPlayers(5) as $player)
						{
						 echo '<li class="bg6"><a href="' . getPlayerLink($player['name'], false) . '"  class="link2">' . $player['name'] . '</a><br>';
						 echo '<em class="style2">Level: <b>' . $player['level'] . '</b></em></li>';
						}
		?>
					</center>
			</div>
		</div>
        <?php
        if($config['template_allow_change']):
        ?>
        <div id="box6" class="box-style2">
            <h2 class="title" style="text-align: center">Template</h2>
            <div style="text-align: center;">
			<?= template_form() ?>
            </div>
        </div>
        <?php
        endif;
        ?>
	</div>
</div>

<div id="sidebar">
	<?php
		if($menu_table_exist) {
			require_once($template_path . '/menu/main_dynamic.php');
		}
		else {
			require_once($template_path . '/menu/main.php');
		}
	?>
</div>
<div style="clear: both;">&nbsp;</div>
</div>
</div>
</div>

<div id="footer">
	<p class="container"><?php echo template_footer(); ?><br/>Designed by <a href="http://cerberia.com">DeGhost</a> and <a href="http://blog.loleslav.pl/">Loleslav</a>.</p>
</div>
</div>
</div>
	<?php echo template_place_holder('body_end'); ?>
	<script>let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    // Ocultar todas las diapositivas
    slides.forEach((slide) => {
        slide.classList.remove('show');
    });

    // Mostrar la diapositiva actual
    slides[index].classList.add('show');
}

function moveSlide(step) {
    slideIndex += step;

    // Ajustar slideIndex si se pasa del rango
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    showSlide(slideIndex);
}

// Mostrar la primera diapositiva
showSlide(slideIndex);

// Cambiar de imagen automáticamente cada 5 segundos
setInterval(() => {
    moveSlide(1);
}, 7000);

</script>
</body>
</html>

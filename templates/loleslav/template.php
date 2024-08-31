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
	<link rel="shortcut icon" href="<?PHP echo $template_path; ?>/images/server.ico" type="image/x-icon">
	<link rel="icon" href="<?PHP echo $template_path; ?>/images/server.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?PHP echo $template_path; ?>/default.css" media="screen"/>
	<link href="<?PHP echo $template_path; ?>/basic.css" rel="stylesheet" type="text/css">
	<!--link rel="stylesheet" type="text/css" href="<?PHP echo $template_path; ?>/basic.css" media="screen"/-->
	<title><?PHP echo $title; ?></title>
	<?PHP echo $layout_header; ?>
	<style type="text/css">
		@import "layout.css";
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
					<div id="Topbar" class="Themebox" style="background-image:url({{ template_path }}/images/themeboxes/highscores/highscores.png);">
					<div class="top_level" style="background:url({{ template_path }}/images/themeboxes/bg_top.png)" align="	">
		<?php
						// foreach(getTopPlayers(5) as $player)
						// {
						//  echo '<li class="bg6"><a href="' . getPlayerLink($player['name'], false) . '"  class="link2">' . $player['name'] . '</a><br>';
						//  echo '<em class="style2">Level: <b>' . $player['level'] . '</b></em></li>';
						// }

						$topPlayers = getTopPlayers(5);

						foreach ($topPlayers as &$player) {
							$outfit_url = '';
							if ($config['online_outfit']) {
								$outfit_url = $config['outfit_images_url'] . '?id=' . $player['looktype'] .
											  (!empty($player['lookaddons']) ? '&addons=' . $player['lookaddons'] : '') .
											  '&head=' . $player['lookhead'] .
											  '&body=' . $player['lookbody'] .
											  '&legs=' . $player['looklegs'] .
											  '&feet=' . $player['lookfeet'];
								$player['outfit'] = $outfit_url;
							}
							?>
							<div style="text-align:left;margin: 0px 20px 14px 20px;">
								<a href="<?= getPlayerLink($player['name'], false); ?>" class="topfont <?= $player['online'] ? 'online' : 'offline'; ?>">
									<?php if ($config['online_outfit']) { ?>
										<img style="position:absolute;
													margin-top:<?= in_array($player['looktype'], [75, 266, 302]) ? '-20px' : '-35px'; ?>;
													margin-left:<?= in_array($player['looktype'], [75, 266, 302]) ? '0px' : '-25px'; ?>;"
											 src="<?= $player['outfit']; ?>" 
											 alt="player outfit"/>
									<?php } ?>
									<span style="color: #CCC; margin-left: 52px"><?= $player['rank']; ?> - </span>
									<?= $player['name']; ?>
									<br>
									<small style="margin-left:7px">
										<span style="color: white; margin-left: 50px">
											Level: (<?= $player['level']; ?>)
										</span>
									</small>
									<br>
								</a>
							</div>
							<?php
						}
						
						?>
						
						<!-- // Renderizar la plantilla Twig
						$twig->display('highscorex.html.twig', array(
							'topPlayers' => $topPlayers,
							'config' => $config // Asegúrate de pasar el config si lo usas en Twig
						));
						 -->
						 
						 </div>
						 </div>

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

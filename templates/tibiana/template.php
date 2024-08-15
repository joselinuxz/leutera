<?php
defined('MYAAC') or die('Direct access not allowed!');

if(!version_compare(MYAAC_VERSION, '0.7', '>=')) {
	echo 'MyAAC 0.7.0 is required.';
	exit;
}

$menus = get_template_menus();
foreach($menus as $cat => &$_menus) {
	foreach($_menus as &$menu) {
		$link_full = strpos(trim($menu['link']), 'http') === 0 ? $menu['link'] : getLink($menu['link']);
		$menu['link_full'] = $link_full;
	}
}

if(count($menus) === 0) {
	$text = 'Please install the template in Admin Panel, so the menus will be imported too.';
	if(version_compare(MYAAC_VERSION, '0.8.0', '>=')) {
		throw new RuntimeException($text);
	}
	else {
		echo $text;
		exit;
	}
}
?>

<?php
$diasemana = array('domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado');
$data = date('Y-m-d');
$diasemana_numero = date('w', strtotime($data));
		
if($diasemana[$diasemana_numero] == 'domingo'){
	$rashid_city = 'Carlin';
}
if($diasemana[$diasemana_numero] == 'segunda'){
	$rashid_city = 'Barglin';
}
if($diasemana[$diasemana_numero] == 'terça'){
	$rashid_city = 'Venore';
}
if($diasemana[$diasemana_numero] == 'quarta'){
	$rashid_city = 'Thais';
}
if($diasemana[$diasemana_numero] == 'quinta'){
	$rashid_city = 'Ankrahmun';
}
if($diasemana[$diasemana_numero] == 'sexta'){
	$rashid_city = 'Darashia';
}
if($diasemana[$diasemana_numero] == 'sabado'){
	$rashid_city = 'Edron';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
		<?= template_place_holder('head_start') ?>
	<meta property="og:url"                content="https://imperium-retro.com/?account/create />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Welcome to retro Imperium" />
    <meta property="og:description"        content="Join this great adventure, we are waiting for you." />
    <meta property="og:image"              content="https://i.imgur.com/5gPsZyM.png" />
		<link rel="stylesheet" type="text/css" href="<?= $template_path ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?= $template_path ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?= $template_path ?>/css/menu.css" />
		<link rel="stylesheet" type="text/css" href="<?= $template_path ?>/css/default.css" />
		<link href="<?= $template_path ?>/images/favicon.png" rel="shortcut icon" />

<style type="text/css">

body, th, td, input, textarea, select {
	cursor : url("https://imperium-retro.com/images/cursor/cursor.png"), url("https://imperium-retro/images/cursor/cursor-click.png"), pointer;
}

</style>

<?php if($config['pace_load'] == true){ ?>
	<script src="admin/bootstrap/pace/pace.js"></script>
	<link href="admin/bootstrap/pace/themes/<?php echo $config['pace_color'] ?>/pace-theme-<?php echo $config['pace_theme'] ?>.css" rel="stylesheet" />
<?php } ?>

<style>
.header_themebox{
	height: 31px;
	background: url(<?php echo $template_path ?>/images/themeboxes/exemple/header-bg.png);
	z-index: 2;
	width: 100%;
	position: absolute;
}
.content_themebox{
    width: 100%;
    height: 154px;
    position: absolute;
    margin-top: 31px;
}
.title_themebox_rashid{
	font-family: 'Martel';
	font-size: 20px;
	display: flex;
	justify-content: center;
	padding-top: 7px;
}
.yellow_themebox_rashid{
	color: #ffffff;
	text-shadow: 1px 0 0 #000, -1px 0 0 #000, 0 1px 0 #000, 0 -1px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
.bg_themebox_rashid {
    height: 22px;
    width: 170px;
    margin-left: 5px;
	margin-top: 7px;
    position: absolute;
    top: 0;
}
.image_themebox_rashid{
	background: #000000;
	margin-top: 4px;
    margin-left: 9px;
    width: 162px;
    height: 112px;
}
.btn_themebox_rashid{
	position: absolute;
    margin-top: 135px;
    margin-left: 19px;
}
.city_rashid{
	font-family: 'Roboto';
    font-weight: bold;
    display: flex;
    justify-content: center;
    margin-top: 14px;
    padding: 8px;
    background-color: #00a134;
    color: #fff;
}
</style>

<style>
.header_themebox2{
	height: 31px;
	background: url(<?php echo $template_path ?>/images/themeboxes/exemple/header-bg.png);
	z-index: 2;
	width: 100%;
	position: absolute;
}
.content_themebox2{
    width: 100%;
    height: 154px;
    position: absolute;
    margin-top: 31px;
}
.title_themebox_donate{
	font-family: 'Martel';
	font-size: 20px;
	display: flex;
	justify-content: center;
	padding-top: 9px;
}
.yellow_themebox_donate{
	color: #ffffff;
	text-shadow: 1px 0 0 #000, -1px 0 0 #000, 0 1px 0 #000, 0 -1px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
.bg_themebox_donate {
    height: 22px;
    width: 170px;
    margin-left: 5px;
	margin-top: 7px;
    position: absolute;
    top: 0;
}
.image_themebox_donate{
	background: url(<?php echo $template_path ?>/images/themeboxes/donate/coins.gif);
	width: 160px;
	height: 129px;
	margin-left: 10px;
	margin-top: 4px;
}
.btn_themebox_donate{
	position: absolute;
    margin-top: 140px;
    margin-left: 19px;
}
</style>

<style type="text/css">

a {cursor: url('https://imperium-retro.com/images/cursor/cursor-click.png'), pointer;

</style>
		
		<style>
    .discordtable{position:absolute;margin-left:71%;text-align:left;background:#01010185;border:2px solid #8595bb;padding:9px 8px 6px 47px;border-radius:0 0 10px 10px;color:#fff;margin-top:-0px;font:400 9pt Verdana,Arial,Times New Roman,sans-serif;box-shadow:2px 2px 18px 1px #67e9ff;z-index:10000;transition:all 600ms ease-out}.discordtable:hover{box-shadow:2px 2px 18px 1px #03ff0d;border:2px solid #03ff0d;background:#343f58;transition:all 600ms ease-out;z-index:10000;cursor:pointer}.discordtable img{position:absolute;margin-left:-47px;margin-top:-8px;width:43px}.discordtable small{transition:all 600ms ease-out;display:none}.discordtable:hover small{transition:all 600ms ease-out;display:block}
    </style>
    <a href="https://discord.gg/ZDpKrJv7hP" target="_blank">
        <div class="discordtable">
            <div class="discordbox">
                <img src="https://www.shareicon.net/data/256x256/2017/06/21/887435_logo_512x512.png"><strong>Discord Imperium</strong><br>
                <strong>Server Discord</strong><strong style="color: #FF0000;text-shadow: 1px 1px black;"></strong> <small style="color: #03ff0d;text-shadow: 1px 1px black;text-align:center;">Click here to connect !!</small>
            </div>
        </div>
    </a>
		
		
		<?= template_place_holder('head_end') ?>
  </head>
   <body>
   <center><div class="top-bar">
		<a href="<?= getLink('account/create') ?>">
		</a>
	</div></center>
   <?= template_place_holder('body_start') ?>
	<div id="pandaac">
	<div class="sidebar-right">
		<div class="players-online-wrapper">
		  <a href="?subtopic=creatures&creature=<?php echo $config['logo_monster'] ?>"><span class="c-monster"
																								 style="background: url(/images/monsters/<?= logo_monster() ?>.gif);"></span></a>
		  <div class="players-online-w">
			<div class="players-online-l">
				<?php if($status['online']) { ?>
					<a href="<?= getLink('online') ?>" style="color: lightgreen; text-decoration: none;">ONLINE</a>
				<?php } else { ?>
					<span style="color: red; text-decoration: none;">OFFLINE</span>
				<?php } ?>
			</div>
			 <div class="players-online-n">
			  <span class="p-online" onClick="window.location = '<?= getLink('online') ?>';"><?= $status['players']?>
			   </span> /<span class="p-total"><?= $status['playersMax']?></span>
			</div>
		  </div>
		</div>
		  <div class="box-side-wrapper download-wrapper">
		  <div class="download-wrapper-header register-wrapper-header"></div>
		  <div class="box-side-header"></div>
		  <div class="box-side-middle text-center">
			<a class="martel btn-download btn-criar-conta" href="<?= getLink('account/create') ?>">Register</a>
		  </div>
		  <div class="box-side-footer"></div>
		</div>
		<div class="box-side-wrapper download-wrapper" style="margin-top: 10px;">
		  <div class="download-wrapper-header"></div>
		  <div class="box-side-header"></div>
		  <div class="box-side-middle text-center">
			<a class="martel btn-download" href="<?= getLink('downloads') ?>">Download Client</a>
		  </div>
		  <div class="box-side-footer"></div>
		</div>
		<div class="Themebox" style="height: 170px;">
	<div class="header_themebox"><span class="title_themebox_rashid yellow_themebox_rashid">Rashid Today</span></div>
	<div class="bg_themebox_rashid"></div>

	<div class="content_themebox" style="background-image:url(<?php echo $template_path ?>/images/themeboxes/exemple/border.png); height: 119px;">
		<div class="image_themebox_rashid">
		<img src="<?php echo $template_path ?>/images/themeboxes/rashid/Rashid.gif">
		<span class="city_rashid"><?php echo $rashid_city ?></span>
		</div>
	</div>
	<div class="Bottom" style="background-image:url(templates/tibiana/images/global/general/box-bottom.gif); top: 147px;"></div>
</div>

<div class="Themebox" style="height: 195px;">
	<div class="header_themebox2"><span class="title_themebox_donate yellow_themebox_donate">Donate Here</span></div>
	<div class="bg_themebox_donate"></div>
	<div class="content_themebox2" style="background-image:url(<?php echo $template_path ?>/images/themeboxes/exemple/content-bg.png);">
		<div class="image_themebox_donate"></div>
	</div>
	<div class="btn_themebox_donate">
		<a href="?points"><div class="BigButton" style="background-image:url(<?php echo $template_path ?>/images/global/buttons/button_red.png); width: 142px; height: 34px;"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path ?>/images/global/buttons/button_red_hover.png); visibility: hidden;"></div><input class="BigButtonText" style="width: 142px; height: 34px;" type="button" value="Premium Points"></div></div></a>
	</div>
</div>

		<div class="box-side-wrapper download-wrapper box-face">
		  <div class="network-wrapper-header"></div>
		  <div class="box-side-header"></div>
		  <div class="box-side-middle text-center">
	   <div id="fb-root"></div>
					<div class="bar"></div>
					<span style="font-size: 20px; font-weight: bold;">Server Save in
					<br><span id="sshours"></span>:<span id="ssminutes"></span>:<span id="ssseconds"></span></span>
					<div class="bar"></div>
	   </div>
		  <div class="box-side-footer"></div>
		</div>
	</div>
		<a href="?news" id="header"></a>
		<div id="topbar">
			<ul>
				<?= tibiana_get_links(MENU_CATEGORY_TOP) ?>
			</ul>
		</div>
		<div id="content-container">
			<div id="sidebar">
				<div id="sidebar-links">
					<?php if (admin()) { ?>
				 <div class="line"></div>
					<div class="line wide"></div>
						<a href="/admin" target="_blank" class="martel"><font color="#FF0000">Admin Panel</font></a>
					<?php } ?>
				  <div class="line"></div>
					<div class="line wide"></div>
					<ul class="my-account-sidebar">
					<li>
						<a href="<?= getLink('account/manage') ?>" class="martel"><font color="#90EE90">My Account</font></a>
						<?php if($logged) { ?>
							<a href="<?= getLink('account/logout') ?>" class="martel">Logout</a>
						<?php } ?>
					<br>
				  </ul>
				   <div class="line"></div>
					<div class="line wide"></div>
					  <ul>
						  <?= tibiana_get_links(MENU_CATEGORY_LEFT_SIDE) ?>
					</ul>
					  <div class="line wide"></div>
					   <div class="line"></div>
					 </div>
				   <div id="sidebar-misc">
						<a href="<?= getLink('online') ?>">
						</a>
					<br>
				</div>
			</div>
			<div id="main">
				<div id="content">
					<?php
					echo tickers() . template_place_holder('center_top');

					if(PAGE === 'news') {
						echo '<table style="width: 100%"><div id="news">';
					}

					echo $content;

					if(PAGE === 'news') {
						echo '</div></table>';
					}
					?>
					<div style="clear:both;"></div>
					<br/>
						<tr>
							<img src="<?= $template_path ?>/images/line_body.gif" align="center" height="7"
								 width="100%">
							<td><img src="<?= $template_path ?>/images/blank.gif"></td>
						</tr>

					<div align="center" style="font-face:verdana; font-size:10px">
						<?php echo template_footer();
						if($config['template_allow_change'])
							echo template_form();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?= $template_path ?>/js/bootstrap.min.js"></script>

	<?php
	// Don't touch this, 2524608000 is 1 Jan 2050 in seconds (random day in distant future)
	// *1000 because javascript script (js/serversave.js) works with timestamp in milliseconds
	$save_timestamp = (2524608000 + (($config['save_hour'] * 60 * 60) + ($config['save_minute'] * 60))) * 1000;
	?>
	<script type="text/javascript">
		var target_date =  <?php echo $save_timestamp; ?>;
	</script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?= $template_path ?>/js/serversave.js"></script>
	<?= template_place_holder('body_end') ?>
</body>
</html>
<?php
function logo_monster()
{
	global $config;
	return str_replace(" ", "", trim(strtolower($config['logo_monster'])));
}

function tibiana_get_links($category)
{
	global $menus;

	$ret = '';
	foreach ($menus[$category] as $menu) {
		$ret .= '<li><a href="' . $menu['link_full'] . '" ' . ($menu['blank'] ? ' target="_blank"' :
				'') . (strlen($menu['color']) == 0 ? '' : 'style="color: #' . $menu['color']) . ';">' .
			$menu['name'] . '</a></li>';
	}

	return $ret;
}

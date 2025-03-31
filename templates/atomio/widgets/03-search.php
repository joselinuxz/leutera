<?php
defined('MYAAC') or die('Direct access not allowed!');
?>
<div class="well widget">
	<div class="header">
		<a href="<?= getLink('characters') ?>">Search</a>
	</div>
	<div class="body">
		<form class="searchForm" action="<?= getLink('characters') ?>" method="post" style="width: 88%;
    margin: 0 auto;">
			<div class="well">
				<input type="text" name="name" placeholder="e.g: John Sheppard">
				<input type="submit" value="Search" style="width: 91%;
    /* margin: 10px auto; */
    margin-left: 14px;
	color:#d1a233;">
			</div>
		</form>
	</div>
</div>

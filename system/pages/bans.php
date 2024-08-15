<?php
/**
 * Bans
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @copyright 2019 MyAAC
 * @link      https://my-aac.org
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Bans list';

$configBansPerPage = config('bans_per_page');
$_page = isset($_GET['page']) ? $_GET['page'] : 1;

if(!is_numeric($_page) || $_page > PHP_INT_MAX) {
   $_page = 1;
}

if ($_page > 1) {
   $offset = ($_page - 1) * $configBansPerPage;
}
else {
   $offset = 0;
}

/**
 * @var OTS_DB_MySQL $db
 */
$configBans = [];
$configBans['hasType'] = false;
$configBans['hasReason'] = false;

$limit = 'LIMIT ' . ($configBansPerPage + 1) . (isset($offset) ? ' OFFSET ' . $offset : '');
if (tableExist('account_bans')) {
   $bansQuery = $db->query('SELECT * FROM `account_bans` ORDER BY `banned_at` DESC ' . $limit);
}
else if (tableExist('bans') && fieldExist('active', 'bans')
   && fieldExist('type', 'bans') && fieldExist('reason', 'bans')) {
   $bansQuery = $db->query('SELECT * FROM `bans` WHERE `active` = 1 ORDER BY `added` DESC ' . $limit);
   $configBans['hasType'] = true;
   $configBans['hasReason'] = true;
}
else {
   echo 'Bans list is not supported in your distribution.';
   return;
}

if(!$bansQuery->rowCount())
{
   echo 'There are no banishments yet.';
   return;
}

$nextPage = false;
$i = 0;
$bans = $bansQuery->fetchAll();
foreach ($bans as $id => &$ban)
{
   if(++$i > $configBansPerPage)
   {
      unset($bans[$id]);
      $nextPage = true;
      break;
   }

   $ban['i'] = $i;
   if (fieldExist('value', 'bans')) {
      $accountId = $ban['value'];
   }
   else {
      // TFS 1.x
      $accountId = $ban['account_id'];
   }

   $ban['player'] = getPlayerLink(getPlayerNameByAccount($accountId));

   if ($configBans['hasType']) {
      $ban['type'] = getBanType($ban['type']);
   }

   $expiresColumn = 'expires_at';
   if (fieldExist('expires', 'bans')) {
      $expiresColumn = 'expires';
   }

   if ((int)$ban[$expiresColumn] === -1) {
      $ban['expires'] = 'Never';
   }
   else {
      $ban['expires'] = date('H:i:s', $ban[$expiresColumn]) . '<br/>' . date('d.M.Y', $ban[$expiresColumn]);
   }

   if ($configBans['hasReason']) {
      $ban['reason'] = getBanReason($ban['reason']);
   }
   else {
      $ban['comment'] = $ban['reason'];
   }

   $addedBy = '';
   if (fieldExist('admin_id', 'bans')) {
      if ((int)$ban['admin_id'] === 0) {
         $addedBy = 'Autoban';
      }
      else {
         $addedBy = getPlayerLink(getPlayerNameByAccount($ban['admin_id']));
      }
   }
   else {
      $addedBy = getPlayerLink(getPlayerNameByAccount($ban['banned_by']));
   }

   if (fieldExist('added', 'bans')) {
      $addedTime = $ban['added'];
   }
   else {
      $addedTime = $ban['banned_at'];
   }

   $ban['addedTime'] = date('H:i:s', $addedTime) . '<br/>' . date('d.M.Y', $addedTime);
   $ban['addedBy'] = $addedBy;
}

$twig->display('bans.html.twig', [
   'bans' => $bans,
   'configBans' => $configBans,
   'page' => $_page,
   'nextPage' => $nextPage,
]);
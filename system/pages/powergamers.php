<?PHP
$limit = 300;
$type = $_REQUEST['type'];
function coloured_value($valuein)
{
    $value2 = $valuein;
    while(strlen($value2) > 3)
    {
        $value .= '.'.substr($value2, -3, 3);
        $value2 = substr($value2, 0, strlen($value2)-3);
    }
    $value = $value2.$value;
    if($valuein > 0)
        return '<font color="green">+'.$value.'</font>';
    elseif($valuein < 0)
        return '<font color="red">'.$value.'</font>';
    else
        return '<font color="black">'.$value.'</font>';
}
if(empty($type))
    $players = $SQL->query(' SELECT * FROM players ORDER BY `players`.`experience`-`players`.`exphist_lastexp` DESC LIMIT '.$limit)->fetchAll();
elseif($type == "sum")
    $players = $SQL->query(' SELECT * FROM players ORDER BY `players`.`exphist1`+`players`.`exphist2`+`players`.`exphist3`+`players`.`exphist4`+`players`.`exphist5`+`players`.`exphist6`+`players`.`exphist7`+`players`.`experience`-`players`.`exphist_lastexp` DESC LIMIT '.$limit)->fetchAll();
elseif($type >= 1 && $type <= 7)
    $players = $SQL->query(' SELECT * FROM players ORDER BY exphist'.(int) $type.' DESC LIMIT '.$limit)->fetchAll();
$main_content .= '<CENTER><H2>Ranking of powergamers</H2></CENTER><BR><TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%></TABLE><TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD WIDTH=10% CLASS=whites><B>Rank</B></TD><TD WIDTH=75% CLASS=whites><B>Name</B></TD>';
if($type == "sum")
    $main_content .= '<TD WIDTH=15% bgcolor="red" CLASS=whites><b><center><a href="?subtopic=exphist&type=sum">7 Days sum</a></center></B></TD>';
else
    $main_content .= '<TD WIDTH=15% bgcolor="yellow" CLASS=whites><b><center><a href="?subtopic=exphist&type=sum">7 Days sum</a></center></B></TD>';
for($i = 7; $i >= 2; $i--)
    if($type == $i)
        $main_content .= '<TD WIDTH=15% bgcolor="red" CLASS=whites><b><center><a href="?subtopic=exphist&type='.$i.'">'.$i.' Days Ago</a></center></B></TD>';
    else
        $main_content .= '<TD WIDTH=15% bgcolor="yellow" CLASS=whites><b><center><a href="?subtopic=exphist&type='.$i.'">'.$i.' Days Ago</a></center></B></TD>';
if($type == 1)
    $main_content .= '<TD WIDTH=15% bgcolor="red" CLASS=whites><b><center><a href="?subtopic=exphist&type=1">1 Day Ago</a></center></B></TD>';
else
    $main_content .= '<TD WIDTH=15% bgcolor="yellow" CLASS=whites><b><center><a href="?subtopic=exphist&type=1">1 Day Ago</a></center></B></TD>';
if(empty($type))
    $main_content .= '<TD WIDTH=15% bgcolor="red" CLASS=whites><b><center><a href="?subtopic=exphist">Today</a></center></B></TD>';
else
    $main_content .= '<TD WIDTH=15% bgcolor="yellow" CLASS=whites><b><center><a href="?subtopic=exphist">Today</a></center></B></TD>';
$main_content .= '</TR>';
foreach($players as $player)
{
    if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
    $main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center">'.$number_of_rows.'. </td>';
    if($player['online'] == 1)
        $main_content .= '<td><a href="?subtopic=characters&name='.urlencode($player['name']).'"><b><font color="green">'.$player['name'].'</font></b></a>';
    else
        $main_content .= '<td><a href="?subtopic=characters&name='.urlencode($player['name']).'"><b><font color="red">'.$player['name'].'</font></b></a>';
    $main_content .= '<br />'.$player['level'].' '.$config_vocations[$player['vocation']].'</td><td align="right">'.coloured_value($player['exphist1'] + $player['exphist2'] + $player['exphist3'] + $player['exphist4'] + $player['exphist5'] + $player['exphist6'] + $player['exphist7'] + $player['experience'] - $player['exphist_lastexp']).'</td>';
    $main_content .= '<td align="right">'.coloured_value($player['exphist7']).'</td><td align="right">'.coloured_value($player['exphist6']).'</td><td align="right">'.coloured_value($player['exphist5']).'</td><td align="right">'.coloured_value($player['exphist4']).'</td><td align="right">'.coloured_value($player['exphist3']).'</td><td align="right">'.coloured_value($player['exphist2']).'</td><td align="right">'.coloured_value($player['exphist1']).'</td><td align="right">'.coloured_value($player['experience']-$player['exphist_lastexp']).'</td></tr>';
}
$main_content .= '</TABLE>';
?>
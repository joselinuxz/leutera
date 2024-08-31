<style>
    .LabelV175 {
        border: 1px solid #faf0d7;
    }
    b{
        font-size:13px;
    }
    td {
        font-size:13px;
    }
</style>
<script>
        function obtenerProximoServerSave() {
            var ahora = new Date();
            var proximoServerSave = new Date();
            proximoServerSave.setUTCHours(4, 0, 0, 0); // 01:00 GMT-3 es 04:00 GMT

            if (ahora >= proximoServerSave) {
                proximoServerSave.setUTCDate(proximoServerSave.getUTCDate() + 1);
            }

            return proximoServerSave.getTime();
        }

        var countDownDate = obtenerProximoServerSave();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("timerServerSave_hour").innerHTML = hours + "h ";
            document.getElementById("timerServerSave_minute").innerHTML = minutes + "m ";
            document.getElementById("timerServerSave_second").innerHTML = seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timerServerSave_hour").innerHTML = "Server save now!";
                document.getElementById("timerServerSave_minute").innerHTML = "";
                document.getElementById("timerServerSave_second").innerHTML = "";
            }
        }, 1000);
    </script>
    <?php
    /**
 * Server info
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @author    whiteblXK
 * @copyright 2019 MyAAC
 * @link      https://my-aac.org
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Server info';

?>
<div style="text-align:center">
    <h1>Server Name</h1>
</div>
<div class="SmallBox">
    <div class="MessageContainer">
        <div class="BoxFrameHorizontal" style="background-image:url(templates/tibiacom/images/global/content/box-frame-horizontal.gif);"></div>
        <div class="BoxFrameEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></div>
        <div class="BoxFrameEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></div>
        <div class="Message">
            <div class="BoxFrameVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></div>
            <div class="BoxFrameVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></div>
            <table style="width:100%;">
                <tbody>
                    <tr>
                        <td style="width:100%;text-align:center;">
                            <nobr>[<a href="?subtopic=gamefeatures">Game Features</a>]</nobr>
                            <nobr>[<a href="?subtopic=support">Support List</a>]</nobr>
                            <nobr>[<a href="?subtopic=rules">Server Rules</a>]</nobr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="BoxFrameHorizontal" style="background-image:url(templates/tibiacom/images/global/content/box-frame-horizontal.gif);"></div>
        <div class="BoxFrameEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></div>
        <div class="BoxFrameEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></div>
    </div>
</div>
<br>
<div style="display: flex; margin: 22px 0px 36px;">
        <div style="width: 100%; display: grid; justify-content: center; text-align: center; max-height: 120px;">
            <p style="font-size: 24px; font-weight: bold; margin: 0;">Server Save<br></p>
            <small style="margin: 0 0 10px 0;">Every day</small>
            <div style="display: flex;">
                <div style="padding: 10px; box-shadow: 3px 3px 2px #875f3e; border: 1px solid #5f4d41; background-color: #9ac6e2; border-radius: 5px 0 0 5px;">
                    <label>hours</label>
                    <div id="timerServerSave_hour" style="font-size: 24px; font-weight: bold;"></div>
                </div>
                <div style="padding: 10px; box-shadow: 3px 3px 2px #875f3e; border: 1px solid #5f4d41; background-color: #9ac6e2;">
                    <label>minutes</label>
                    <div id="timerServerSave_minute" style="font-size: 24px; font-weight: bold;"></div>
                </div>
                <div style="padding: 10px; box-shadow: 3px 3px 2px #875f3e; border: 1px solid #5f4d41; background-color: #9ac6e2; border-radius: 0 5px 5px 0;">
                    <label>seconds</label>
                    <div id="timerServerSave_second" style="font-size: 24px; font-weight: bold;"></div>
                </div>
            </div>
        </div>
    </div>
<br>
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">Game Informatiasdasdon</div>
            <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table3" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="TableScrollbarWrapper" style="width: unset;">
                        <div class="TableScrollbarContainer"></div>
                    </div>
                    <div class="InnerTableContainer" style="max-width: unset;">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableContentContainer">
                                            <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                <tbody>
                                                    <tr class="Odd">
                                                    <td style="text-align:center;width:50%" class="LabelV175"><b>dwdwdwdwWorld Type</b></td>
                                                    <td style="text-align:center">PVP</td>
                                                    </tr>
                                                    <tr class="Even">
                                                        
                                                    <td  style="text-align:center" class="LabelV175"><b>Game Version:</b></td>
                                                        <td style="text-align:center" >7.4</td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td  style="text-align:center" class="LabelV175"><b>Map:</b></td>
                                                        <td style="text-align:center" >7.4 Real Map + Port Hope</td>
                                                    </tr>
                                                    <tr class="Even">
                                                        
                                                    <td  style="text-align:center" class="LabelV175"><b>Server Save</b>:</td>
                                                        <td style="text-align:center" >01:00 GMT-3</td>
                                                    </tr>
                                                    <tr class="Odd">
                                                    <td  style="text-align:center" class="LabelV175"><b>Host Location</b></td>
                                                    <td style="text-align:center">Vint Hill, Virginia, USA</td>
                                                    </tr>
                                                    <tr class="Even">
                                                    <td  style="text-align:center" class="LabelV175"><b>Spells Learned</b></td>
                                                    <td style="text-align:center">Yes, dont need buy them</td>
                                                  </tr>
                                                    <tr class="Odd">

                                                    <td  style="text-align:center" class="LabelV175"><b>Promotion Cost:</b></td>
                                                        <td style="text-align:center" >20,000 gold coins</td>
                                                    </tr>
                                                    <tr class="Even">

                                                    <td  style="text-align:center" class="LabelV175"><b>Multi Clients:</b></td>
                                                        <td style="text-align:center">Max 3 clients per IP</td>
                                                    </tr>
                                                    <tr class="Odd">

                                                    <td  style="text-align:center" class="LabelV175"><b>Desert Quest:</b></td>
                                                        <td style="text-align:center">Soloable, teleport inside</td>
                                                    </tr>
                                                    <tr class="Even">
                                                    <td  style="text-align:center" class="LabelV175"><b>Task System:</b></td>
                                                    <td style="text-align:center"> Npc all depots</td>
                                                    </tr>
                                                    <tr class="Odd">

                                                    <td  style="text-align:center" class="LabelV175"><b>House System:</b></td>
                                                        <td style="text-align:center">Command in game</td>
                                                    </tr>
                                                    <tr class="Even">

                                                    <td  style="text-align:center" class="LabelV175"><b>House Rent:</b></td>
                                                        <td style="text-align:center">Monthly</td>
                                                    </tr>
                                                    <tr class="Odd">
                                                    <td  style="text-align:center" class="LabelV175"><b>Runes in shop:</b></td>
                                                    <td style="text-align:center"> No</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
    <div style="    margin-right: 24px;
    width: 100%;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <div class="TableContainer">
                            <div class="CaptionContainer">
                                <div class="CaptionInnerContainer">
                                    <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                    <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                    <div class="Text">
                                        <div style="height: 16px;">Experience Stages</div>
                                    </div>
                                    <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                    <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                    <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                </div>
                            </div>
                            <table class="Table3" cellpadding="0" cellspacing="0" >
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="InnerTableContainer">
                                                <table style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="TableContentContainer">
                                                                    <table class="TableContent" width="100%">
                                                                        <tbody>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center;width:50%; " class="LabelV175"><b>Level 1 to 8</b></td>
                                                                                <td style="text-align:center">12x</td>
                                                                            </tr>
                                                                            <tr class="Even">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 9 to 20</b></td>
                                                                                <td style="text-align:center">10x</td>
                                                                            </tr>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 21 to 30</b></td>
                                                                                <td style="text-align:center">8x</td>
                                                                            </tr>
                                                                            <tr class="Even">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 31 to 40</b></td>
                                                                                <td style="text-align:center">6x</td>
                                                                            </tr>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 41 to 50</b></td>
                                                                                <td style="text-align:center">5x</td>
                                                                            </tr>
                                                                            <tr class="Even">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 51 to 60</b></td>
                                                                                <td style="text-align:center">4x</td>
                                                                            </tr>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 61 to 80</b></td>
                                                                                <td style="text-align:center">3x</td>
                                                                            </tr>
                                                                            <tr class="Even">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 81 to 99</b></td>
                                                                                <td style="text-align:center">2x</td>
                                                                            </tr>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center" class="LabelV175"><b>Level 100+</b></td>
                                                                                <td style="text-align:center">1x</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="    margin-top: 15px;
    width: 100%;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <div class="TableContainer">
                            <div class="CaptionContainer">
                                <div class="CaptionInnerContainer">
                                    <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                    <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                    <div class="Text">
                                        <div style="height: 16px;">Rate Information</div>
                                    </div>
                                    <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                    <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                    <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                </div>
                            </div>
                            <table class="Table3" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="InnerTableContainer">
                                                <table style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="TableContentContainer">
                                                                    <table class="TableContent" width="100%">
                                                                        <tbody>
                                                                            <tr class="Odd">
                                                                            <td style="text-align:center;width:50%" class="LabelV175"><b>Skill Rate:</b></td>
                                                                            <td style="text-align:center">4x</td>
                                                                            </tr>
                                                                            <tr class="Even">
                                                                            <td style="text-align:center"class="LabelV175"><b>Magic Rate:</b></td>
                                                                            <td style="text-align:center">2x</td>
                                                                            </tr>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center"class="LabelV175"><b>Spawn Rate:</b></td>
                                                                                <td style="text-align:center">2x</td>
                                                                            </tr>
                                                                            <tr class="Even">
                                                                                <td style="text-align:center"class="LabelV175"><b>Loot Rate:</b></td>
                                                                                <td style="text-align:center">2x</td>
                                                                            </tr>
                                                                            <tr class="Odd">
                                                                                <td style="text-align:center"class="LabelV175"><b>Money Rate: </b></td>
                                                                                <td style="text-align:center">2x</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<br>
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">PVP Information</div>
            <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table3" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="TableScrollbarWrapper" style="width: unset;">
                        <div class="TableScrollbarContainer"></div>
                    </div>
                    <div class="InnerTableContainer" style="max-width: unset;">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableContentContainer">
                                            <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                <tbody>
                                                    <tr class="Even">
                                                        <td class="LabelV175"><b>PvasdcsacsP Protection Zone:</b></td>
                                                        <td>Protection zone is blocked for 1 minute after attacking another player.</td>
                                                    </tr>
                                                    <tr class="Oddd">
                                                        <td class="LabelV175"><b>White Skull:</b></td>
                                                        <td>White skull lasts for 15 minutes on player kill.</td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td class="LabelV175"><b>Frag Decrease:</b></td>
                                                        <td>Frag decreases every 12 hours.</td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td class="LabelV175"><b>Red Skull:</b></td>
                                                        <td>
                                                            <div class="TableContentContainer">
                                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                                    <tbody>
                                                                        <tr class="LabelH">
                                                                            <td>Daily</td>
                                                                            <td>Weekly</td>
                                                                            <td>Monthly</td>
                                                                        </tr>
                                                                        <tr class="Even">
                                                                            <td>
                                                                                3
                                                                            </td>
                                                                            <td>
                                                                                5
                                                                            </td>
                                                                            <td>
                                                                                10
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td class="LabelV175" colspan="2"><b>Red Skull Duration: 30 days</b></td>
                                                    </tr>
                                                    <tr class="Ôdd">
                                                        <td class="LabelV175"><b>Banishment:</b></td>
                                                        <td>
                                                            <div class="TableContentContainer">
                                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                                    <tbody>
                                                                        <tr class="LabelH">
                                                                            <td>Daily</td>
                                                                            <td>Weekly</td>
                                                                            <td>Monthly</td>
                                                                        </tr>
                                                                        <tr class="Even">
                                                                            <td>
                                                                                6
                                                                            </td>
                                                                            <td>
                                                                                10
                                                                            </td>
                                                                            <td>
                                                                                20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td class="LabelV175" colspan="2"><b>Unjustified player killing ban time: 30 days</b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">Premium Benefits</div>
            <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table3" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="TableScrollbarWrapper" style="width: unset;">
                        <div class="TableScrollbarContainer"></div>
                    </div>
                    <div class="InnerTableContainer" style="max-width: unset;">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableContentContainer">
                                                    <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr class="LabelV">
                                                        <th style=" color: #5A2800;background-color: #9ac6e2;">Benefit</th>
                                                        <th style=" color: #5A2800;background-color: #9ac6e2;text-align: center;">Premium Details</th>
                                                        <th style=" color: #5A2800;background-color: #9ac6e2;text-align: center;">Free</th>
                                                        <th style="color: #5A2800; background-color: #9ac6e2;text-align: center;">Premium</th>
                                                        </tr>
                                                        <tr class="even">
                                                        <td style="font-weight: bold;">10% Experience bonus</td>
                                                        <td style="text-align: center;"><span style="position: relative; top: 3px; margin-left: 5px;"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), '10% Experience bonus', 'How about gaining 10% more XP when hunting? As a premium player, you can enjoy this valuable boost throughout your time online.', '');" onmouseout="$('#HelperDivContainer').hide();"><img src="templates/tibiarl/images/premiumfeatures/PremiumIcon-Stamina.png"></span></span></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_no.png"></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_yes.png"></td>
                                                        </tr>
                                                        <tr >
                                                        <td style="font-weight: bold;">Loot Message</td>
                                                        <td style="text-align: center;"><span style="position: relative; top: 3px; margin-left: 5px;"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Loot Message on Screen', 'Access exclusive information about monster loot upon death, enhancing your hunting strategies and optimizing your gameplay experience.', '');" onmouseout="$('#HelperDivContainer').hide();"><img src="templates/tibiarl/images/premiumfeatures/PremiumIcon-TrackLoot.png"></span></span></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_no.png"></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_yes.png"></td>
                                                        </tr>
                                                        <tr class="even">
                                                        <td style="font-weight: bold;">Instant commands</td>
                                                        <td style="text-align: center;"><span style="position: relative; top: 3px; margin-left: 5px;"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Use instant travel system', 'No matter where you are heading, travel via the Tibian transport system and you will always be there in a jiffy! Boats, magic carpets, steamships, astral bridges, elemental shrinestravelling has never been that convenient.', '');" onmouseout="$('#HelperDivContainer').hide();"><img src="templates/tibiarl/images/premiumfeatures/PremiumIcon-Travel.png"></span></span></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_no.png"></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_yes.png"></td>
                                                        </tr>
                                                     <tr >
                                                        <td style="font-weight: bold;">Convert money</td>
                                                        <td style="text-align: center;"><span style="position: relative; top: 3px; margin-left: 5px;"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Get money conversion', 'Forget about tedious visits to the bank and get permission to convert any type of money with a single click from anywhere!', '');" onmouseout="$('#HelperDivContainer').hide();"><img src="templates/tibiarl/images/premiumfeatures/PremiumIcon-Conver.png"></span></span></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_no.png"></td>
                                                        <td style="text-align: center;"><img src="templates/tibiarl/images/premiumfeatures/icon_yes.png"></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                    </table>
                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">Vocation & Items Regeneration</div>
            <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table3" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="TableScrollbarWrapper" style="width: unset;">
                        <div class="TableScrollbarContainer"></div>
                    </div>
                    <div class="InnerTableContainer" style="max-width: unset;">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableContentContainer">
                                            <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                <tbody>
                                                    <tr class="LabelH">
                                                        <td>Vocation</td>
                                                        <td>HP Regen</td>
                                                        <td>MP Regen</td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>None</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 6 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Sorcerer</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 8 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 2 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Druid</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 8 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 2 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Paladin</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 5 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 3 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Knight</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 4 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>1 mana every 4 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td colspan="4" style="text-align: center;">
                                                            <nobr><b>PROMOTED VOCATIONS</b></nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Master Sorcerer</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 8 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 1 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Elder Druid</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 8 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 1 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Royal Paladin</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 4 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 2 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Elite Knight</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 3 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 4 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="Even">
                                                        <td colspan="4" style="text-align: center;">
                                                            <nobr><b>ITEMS REGENERATION</b></nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Life Ring</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>2 health every 3 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 3 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Ring of Healing</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>2 health every 2 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>8 mana every 2 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Dragora Boots</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 3 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>1 mana every 3 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Dragora Ring</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr>1 health every 2 seconds</nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>1 mana every 3 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                            <td style="width: 15%">
                                                                <nobr>Basic Vigorize</nobr>
                                                            </td>
                                                            <td style="width: 30%">
                                                                <nobr>1 health every 3 seconds</nobr>
                                                            </td>
                                                            <td style="width: 25%">
                                                                <nobr></nobr>
                                                            </td>
                                                        </tr>
                                                        <tr class="Even">
                                                            <td style="width: 15%">
                                                                <nobr>Intricate Vigorize</nobr>
                                                            </td>
                                                            <td style="width: 30%">
                                                                <nobr>2 health every 3 seconds</nobr>
                                                            </td>
                                                            <td style="width: 25%">
                                                                <nobr></nobr>
                                                            </td>
                                                        </tr>
                                                        <tr class="Odd">
                                                            <td style="width: 15%">
                                                                <nobr>Powerfull Vigorize</nobr>
                                                            </td>
                                                            <td style="width: 30%">
                                                                <nobr>2 health every 2 seconds</nobr>
                                                            </td>
                                                            <td style="width: 25%">
                                                                <nobr></nobr>
                                                            </td>
                                                        </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Basic Vitalize</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr></nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>1 mana every 3 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Odd">
                                                        <td style="width: 15%">
                                                            <nobr>Intricate Vitalize</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr></nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 3 seconds</nobr>
                                                        </td>
                                                    </tr>
                                                    <tr class="Even">
                                                        <td style="width: 15%">
                                                            <nobr>Powerfull Vitalize</nobr>
                                                        </td>
                                                        <td style="width: 30%">
                                                            <nobr></nobr>
                                                        </td>
                                                        <td style="width: 25%">
                                                            <nobr>2 mana every 2 seconds</nobr>
                                                        </td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">Custom Features</div>
            <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table3" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="TableScrollbarWrapper" style="width: unset;">
                        <div class="TableScrollbarContainer"></div>
                    </div>
                    <div class="InnerTableContainer" style="max-width: unset;">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableContentContainer">
                                        <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                        <tbody>
                                        <tr class="Odd">
                                            <td><a href="?subtopic=gamefeatures&section=premiumfeatures">Instant Preference Commands </a><img src="templates/tibiarl/images/new.png" alt=""></td>
                                            
                                        </tr>
                                        
                                        <tr class="Even">
                                        <td><a href="?subtopic=mysterybox">Mystery Box System </a><img src="templates/tibiarl/images/new.png" alt=""></td>
                                        </tr>
                                        <tr class="Odd">
                                        <td><a href="?subtopic=boostedcreature">Boosted Creature System </a><img src="templates/tibiarl/images/new.png" alt=""></td>
                                        </tr>
                                        <tr class="Even">
                                            <td><a href="?subtopic=imbuements">Imbuing System </a><img src="templates/tibiarl/images/new.png" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td><a href="?subtopic=addons">Addons</a>, <a href="?subtopic=mounts">Mounts</a> <b>and</b> <a href="?subtopic=shop">Shaders</a> <b>Features</b></td>
                                                </tr>
                                                <tr class="Even">
                                                <td><b>In-game training module</b></td>
                                                </tr>
                                                <tr class="Odd">
                                                <td><b>Secure Character Sales System</b></td>
                                                </tr>
                                                <tr class="Even">
                                                <td><a href="?subtopic=shop">Daily Shop System </a><img src="templates/tibiarl/images/new.png" alt=""> </td>
                                                </tr>
                                                </tr>
                                                <tr class="Odd">
                                                <td><b>Daily Reward System </b><img src="templates/tibiarl/images/new.png" alt=""> </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div> 

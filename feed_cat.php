<?php
    $name = $_GET['n'];
    $font = $_GET['font'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>e-pet</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="feed_cat.js"></script>
    </head>
    <body>
        <header>
            <div id="tit">
                <a href="javascript:void(0)" id="logo_a" disabled="disabled">
                    <img border="0" alt="petto" src="images/logo.png" width="300">
                </a>
            </div>
        </header>
        <hr/>

        <div id="father">
        <div id="statue">
            <table><tr>
                <td width="200px"><?php print($name)?></td>
                <td><img id="life" border="0" alt="life" src="images/life100.png" width="140"></td>
                <td width="20px"></td>
                <td><img border="0" alt="birthday" src="images/birthday_cake.png" width="60"></td>
                <td><p id="birthday"></p></td>
            </tr></table>
        </div></div>

        <canvas id="home" width="300" height="200"></canvas><hr/>
        <button formaction="mine_test.html" type="submit" id="only_button" onmouseover="changeColor()" onmouseout="changeColorBack()"><p id="start_button">feed</p></button>
        <p id="cat_font">aa</p>
		
    </body>
</html>
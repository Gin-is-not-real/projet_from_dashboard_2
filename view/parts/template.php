<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <link href="style/style.css" rel="stylesheet">
        <link href="style/table.css" rel="stylesheet">
        <link href="style/inputs.css" rel="stylesheet">
        
        <link href="style/deco.css" rel="stylesheet">

    </head>

    <body>
        <div class="popup" id="pop-confirm">
            <p></p>
            <p id="p-confirm"></p>

            <section>
                <p>confirm ?</p>
                <div>
                    <input type="button" id="pop-add" value="yes">
                    <input type="button" id="pop-cancel" value="no">
                </div>
            </section>
        </div>
        
        <div class="popup" id="pop-notice">
            <div>
                <input type="button" id="pop-add" value="X">
            </div>
            <p>notice here</p>
        </div>

        <?php include('accounts/accountView.php');?>

        <!-- <section class="sec-title">
            <?php include('title.php'); ?>
        </section> -->

        <?=$content?>
    </body>

    <script src="js/script.js"></script>
</html>
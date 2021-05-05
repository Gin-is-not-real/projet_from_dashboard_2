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
        <?php include('popups.php'); ?>

        <?php include('accounts/accountView.php');?>

        <!-- <section class="sec-title">
        </section> -->
        <?php include('title.php'); ?>

        <?=$content?>
    </body>

    <script src="js/script.js"></script>
</html>
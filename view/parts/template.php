<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <link href="style/variables.css" rel="stylesheet">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/title.css" rel="stylesheet">
        <link href="style/table.css" rel="stylesheet">
        <link href="style/inputs.css" rel="stylesheet">
        <link href="style/popups.css" rel="stylesheet">
        <link href="style/accounts.css" rel="stylesheet">
        <link href="style/media_queries.css" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap');   
        </style> 
    </head>

    <body>
        <?php include('pop_confirm.php'); ?>
        <?php include('pop_notice.php'); ?>
        <?php include('title.php'); ?>

        <?=$content?>
    </body>

    <script src="js/script.js"></script>
    <script src="js/accounts.js"></script>
</html>
<?php 
$title = 'Bulbs Dashboard'; 
ob_start();
require_once('globals.php');
?>

<main id="main-application">
    
    <section class="sec-title">

        <?php include('parts/title.php'); ?>
        <p>application view</p> 

        <!-- <header id="header-title">
            <h1>Bulbs Dashboard !</h1>
            <p>"La lumière a tout les étages !"</p>
        </header> -->

    </section> 

    <div class="popup">
        <p>confirm message here</p>
        <div>
            <input type="button" id="pop-add" value="yes">
            <input type="button" id="pop-cancel" value="no">
        </div>
    </div>

    <?php
        include('parts/form_operations.php');
    ?>
    <?php
        include('parts/table.php');
    ?>

</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('parts/template.php'); ?>

<?php 
$title = 'Bulbs Dashboard'; 
ob_start();
require_once('globals.php');
?>

<main id="main-application">
    
    <section class="sec-title">
        <h1>Bulbs Dashboard</h1>
        <p>application view</p>
    </section>

    <?php
        include('parts/form_operations.php');
    ?>
    <?php
        include('parts/table.php');
    ?>

</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('parts/template.php'); ?>

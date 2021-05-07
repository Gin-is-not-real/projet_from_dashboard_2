<?php 
$title = 'Bulbs Dashboard';
ob_start();
?>

<main id="main-home">

    <!-- <section class="" id="section-start-app">
        <div>
            <form action="index.php?" method="get">
                <input class="round-super-btn" type="submit" name="action" value="start-app">
            </form>
        </div>
    </section> -->
</main>

<?php $content = ob_get_clean(); ?>
<?php require('parts/template.php'); ?>
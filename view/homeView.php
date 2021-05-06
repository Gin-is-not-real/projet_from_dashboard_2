<?php 
$title = 'Bulbs Dashboard';
ob_start();
?>

<main id="main-home">
    <?php include('parts/connexion.php'); ?>

    <section class="" id="section-start-app">
        <div>
            <form action="index.php?" method="get">
                <input class="" type="submit" name="action" value="start-app">
            </form>
        </div>
    </section>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('parts/template.php'); ?>
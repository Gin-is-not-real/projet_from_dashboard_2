<?php 
$title = 'Bulbs Dashboard';
ob_start();
?>

<main id="main-home">

    <section class="sec-title" id="section-start-app">
        <?php include('parts/title.php'); ?>
        
        <div>
            <form action="index.php?" method="get">
                <input type="submit" name="action" value="start-app">
            </form>
        </div>
    </section>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('parts/template.php'); ?>
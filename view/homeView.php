<?php 
$title = 'Bulbs Dashboard';
ob_start();
?>

<main id="main-home">

    <section class="sec-title" id="section-start-app">
        <header>
            <h1>Bulbs Dashboard</h1>
        </header>
        <div>
            <form action="index.php?" method="get">
                <input type="submit" name="action" value="start-app">
            </form>
                <!-- <a href="../index.php?action=startApp">ENTER</a> -->
        </div>
    </section>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('parts/template.php'); ?>
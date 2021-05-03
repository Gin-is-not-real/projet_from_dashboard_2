<section id="sec-formulaire">

    <form id="form-operation-add" action="index.php?action=add-operation" method="post">
        <header>
            <h4>add new operation</h4>
        </header>
        <section id="form-content">
            <div>
                <label for="inp-date">Date </label>
                <input type="date" name="inp-date" value="<?php echo date('Y-m-d'); ?>">
            </div> 

            <div>
                <label for="sel-floor">Floor </label>
                <select name="sel-floor" id="sel-floor">
                    <?php 
                        foreach($GLOBALS['floors'] as $value) {
                    ?>
                        <option value="<?= $value ?> "> <?= $value ?> </option></br>;
                    <?php 
                        }
                    ?>
                </select>
            </div>

            <div>
                <label for="sel-room">Room </label>
                <select name="sel-room" id="sel-room">
                    <?php 
                        foreach($GLOBALS['rooms'] as $value) {
                    ?>
                        <option value="<?= $value ?> "> <?= $value ?> </option></br>;
                    <?php 
                        }
                    ?>
                </select>
            </div>

            <div>
                <label for="sel-cost">Cost </label>
                <select name="sel-cost" id="sel-cost">
                    <?php 
                        foreach($GLOBALS['cost'] as $value) {
                    ?>
                        <option value="<?= $value ?> "> <?= $value ?> </option></br>;
                    <?php 
                        }
                    ?>
                </select>
            </div>

            <div>
                <input type="submit" name="sub-add-op" value="add">
            </div>

        </div>
    </form>
    </section>
</section>
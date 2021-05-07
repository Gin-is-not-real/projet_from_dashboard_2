    <div id="div-logout">
        <div id="r-notice">
            <?php 
                if(isset($_POST['r-notice'])) {
                    echo $_POST['r-notice'];
                }
            ?>
        </div>

        <div>
            <?php 
                if(isset($_SESSION['pseudo'])) {
                    echo '<a href="accounts_index.php?action=deconnection"><input class="round-super-btn red visible-on-app" id="btn-deconnection" type="submit" name="action" value="LOG OUT"></a>';
                }
                ?>
        </div>
    </div>

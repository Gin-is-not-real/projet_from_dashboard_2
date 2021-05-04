<form action="index.php?action=edit-operation&amp;id=<?= $data['id'] ?>" method="post"> 

        <tr class="<?= $color; ?> tr<?= $data['id'] ?>" id="<?= $data['id'] ?>">
            <td> <?= $data['id'] ?> </td>
            <!-- <td> <input type="date" name="inp-date" value="<?= date('Y-m-d', strtotime($data['date_forma'])); ?>" disabled>  </td> -->
            <td> <input type="date" name="inp-date" value="<?= date('Y-m-d', strtotime($data['date_forma'])); ?>" disabled>  </td>
            <!-- <td> <input type="date" name="inp-date" value="<?= date('Y-d-m', $data['date_operation']); ?>" disabled>  </td> -->
            <!-- <td> <input type="date" name="inp-date" value="<?= $data['date_operation']; ?>" disabled>  </td> -->

            <td> 
                <select name="sel-floor" id="sel-floor" disabled>
                    <?php 
                        foreach($GLOBALS['floors'] as $value) {
                    ?>
                        <option value="<?= $value ?>" <?= $value == $data['b_floor'] ? 'selected="selected"' : ''; ?>> <?= $value ?> </option></br>;
                    <?php 
                        }
                    ?>
                </select>
            </td>

            <td> 
                <select name="sel-room" id="sel-room"  disabled>
                    <?php 
                        foreach($GLOBALS['rooms'] as $value) {
                    ?>
                        <option value="<?= $value ?>" <?= $value == $data['room'] ? 'selected="selected"' : ''; ?>> <?= $value ?> </option></br>;
                    <?php 
                        }
                    ?>
                </select>
            </td>
            
            <td> 
                <select name="sel-cost" id="sel-cost"  disabled>
                    <?php 
                        foreach($GLOBALS['cost'] as $value) {
                    ?>
                        <option value="<?= $value ?>" <?= $value == $data['cost'] ? 'selected="selected"' : ''; ?>> <?= $value ?> </option></br>;
                    <?php 
                        }
                    ?>
                </select> 
            </td>

            <td id="td-actions">
                    <input type="submit" class="sub-action sub-edit-operation appear-on-edit" id="sub-confirm-edit-<?= $data['id'] ?>" name="sub-edit-operation" value="confirm" hidden ></input>
                </form>

                    <input type="submit" class="sub-action sub-edit disappear-on-edit" id="sub-edit-<?= $data['id'] ?>" name="sub-able-edit" value="edit" onclick="switchEditModeForLine(<?= $data['id'] ?>)"></input>

                    <input type="submit" class="sub-action sub-cancel-edit appear-on-edit" id="sub-cancel-edit-<?= $data['id'] ?>" name="sub-cancel-edit" onclick="switchEditModeForLine(<?= $data['id'] ?>, false)" value="cancel" hidden>

                    <form action="index.php?action=suppr-operation&amp;id=<?= $data['id'] ?>" method="post">
                        <input type="submit" class="sub-action sub-suppr disappear-on-edit" id="sub-suppr-<?= $data['id'] ?>" name="sub-suppr-op" value="X" onclick="return confirm('Do you really want to delete this entry ?')" >
                </form>
            </td>

<style type="text/css">

</style>
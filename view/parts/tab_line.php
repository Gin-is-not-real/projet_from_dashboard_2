<tr class="<?= $color; ?> tr<?= $data['id'] ?>" id="<?= $data['id'] ?>">
            <th> <?= $data['id'] ?> </th>
            <th> <?= $data['date_forma']; ?> </th>
            <th> <?= $data['b_floor']; ?> </th>
            <th> <?= $data['room']; ?> </th>
            <th> <?= $data['cost']; ?> </th>

            <th>
                <!-- <form action="index.php?action=able-edit&amp;id=<?= $data['id'] ?>" method="post"> -->
                    <input type="submit" class="btn-action btn-edit" id="btn-edit-<?= $data['id'] ?>" name="sub-able-edit" value="edit" onclick="ableEditions(<?= $data['id'] ?>)"></input>
                <!-- </form> -->

                <!-- <form action="index.php?action=suppr-operation&amp;id=<?= $data['id'] ?>" method="post"> -->
                    <input type="submit" class="btn-action btn-suppr" id="btn-suppr-<?= $data['id'] ?>" name="sub-suppr-op"  value="X">
                <!-- </form> -->
            </th>
        </tr>

        

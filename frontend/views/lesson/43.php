<?php


echo '<h2>DB practice</h2><div class="d-flex-row">';

$db = Yii::$app->db;
?>
<form action="/lesson/create-staff" method="post">
<input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken()?>">
<input type="text" name="staff[name]" value="<?= Yii::$app->request->post('staff[name]') ?>">
<input type="text" name="staff[age]">
<input type="text" name="staff[salary]">
<input type="submit" value="Create staff">
</form>
<br>


<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>age</td>
        <td>salary</td>
        <td>delete</td>
        <td>update</td>
    </tr>
    <?php
    $staff_1 = $db->createCommand('select * from staff')->queryAll();
    // dd($staff_1);

    foreach ($staff_1 as $key => $value) { ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['age'] ?></td>
            <td><?= $value['salary'] ?></td>
            <td><a href="lesson/delete-staff?id=<?= $value['id'] ?>">удалить</a></td>
            <td><a href="lesson/update-staff?id=<?= $value['id'] ?>">обновить</a></td>
        </tr>
        <?php } ?>
</table>

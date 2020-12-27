<?php

echo '<h2>update staff</h2><div class="d-flex-row">';

?>
<form action="/lesson/update-staff?id=<?= $staff['id'] ?>" method="post">
<input type="hidden" name="<?= Yii::$app->request->csrfParam?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
<input type="text" name="staff[name]" value="<?= $staff['name'] ?>">
<input type="text" name="staff[age]" value="<?= $staff['age'] ?>">
<input type="text" name="staff[salary]" value="<?= $staff['salary'] ?>">
<input type="submit" value="Update">
</form>

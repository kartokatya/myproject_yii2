<?php
/**
 * Created by PhpStorm.
 * User: Belka
 * Date: 04.06.2018
 * Time: 23:44
 */

/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 14:47
 *
 * @var $user \app\models\User
 */
use yii\bootstrap\ActiveForm;

?>
<div class="container">
    <h1>Регистрация пользователя</h1>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($user, 'first_name')->input('string'); ?>
    <?= $form->field($user, 'last_name')->input('string'); ?>
    <?= $form->field($user, 'email')->input('email'); ?>
    <?= $form->field($user, 'password')->passwordInput(); ?>
    <button type="submit" class="btn btn-sm btn-success">Регистрация</button>
    <?php ActiveForm::end(); ?>
</div>
<?php

use app\models\Category;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
$categories = Category::find()->all();
$categories=\yii\helpers\ArrayHelper::map($categories,'id','name');
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <?= $form->field($model, 'category_id')->dropDownList($categories,['prompt'=>'Выбор категории']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model,'image')->fileInput()?>

    <?= $form->field($model, 'image')->widget('demi\image\FormImageWidget', [
        'imageSrc' => $model->getImageSrc('medium_'),
        'deleteUrl' => ['deleteImage', 'id' => $model->getPrimaryKey()],
        'cropUrl' => ['cropImage', 'id' => $model->getPrimaryKey()],
        // cropper options https://github.com/fengyuanchen/cropper/blob/master/README.md#options
        'cropPluginOptions' => [],
        // Translated messages
        'messages' => [
            // {formats} and {formattedSize} will replaced by widget to actual values
            'formats' => Yii::t('app', 'Supported formats: {formats}'),
            'fileSize' => Yii::t('app', 'Maximum file size: {formattedSize}'),
            'deleteBtn' => Yii::t('app', 'Delete'),
            'deleteConfirmation' => Yii::t('app', 'Are you sure you want to delete the image?'),
            // Cropper
            'cropBtn' => Yii::t('app', 'Crop'),
            'cropModalTitle' => Yii::t('app', 'Select crop area and click "Crop" button'),
            'closeModalBtn' => Yii::t('app', 'Close'),
            'cropModalBtn' => Yii::t('app', 'Crop selected'),
        ],
    ]) ?>


    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(),[
            'options'=>['rows'=>6],
        'preset'=>'standart'
    ])->label(false)?>
    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'main_page')->checkbox() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

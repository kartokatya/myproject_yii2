<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>-->


<div class="contact">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>

        <div class="contact-grids">
            <div class="contact-form">
                <form>
                    <div class="contact-bottom">
                        <div class="col-md-4 in-contact">
                            <span>Name</span>
                            <input type="text" >
                        </div>
                        <div class="col-md-4 in-contact">
                            <span>Email</span>
                            <input type="text" >
                        </div>
                        <div class="col-md-4 in-contact">
                            <span>Phonenumber</span>
                            <input type="text">
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="contact-bottom-top">
                        <span>Message</span>
                        <textarea > </textarea>
                    </div>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="address">
                <div class=" address-more">
                    <h2>Address</h2>
                    <div class="col-md-4 address-grid">
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <div class="address1">
                            <p>Lorem ipsum dolor</p>
                            <p>TL 19034-88974</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 address-grid ">
                        <i class="glyphicon glyphicon-phone"></i>
                        <div class="address1">
                            <p>+885699655</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 address-grid ">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <div class="address1">
                            <p><a href="mailto:@example.com"> @example.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
/**
 * @property UserController $this Controller
 */
$this->addBreadcrumb('Home', '/');
$this->addBreadcrumb('Login');
?>

<div class="row" style="margin-left: auto;margin-right: auto;width: 200px;">

    <?php If (Yii::app()->user->isGuest) : ?>

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'LoginForm',
            'focus' => array($model, 'username'),
            'htmlOptions' => array('onSubmit' => 'Login.submit();return false;'),
        ));
        ?>

        <div id="<?php echo get_class($model); ?>_username_div" class="form-group">
            <?php echo Bootstrap::Label($model, 'username'); ?>
            <?php echo Bootstrap::TextField($model, 'username', array('placeholder' => 'Nome utente...')); ?>
            <?php echo Bootstrap::ErrorDiv($model, 'username'); ?>
        </div>

        <div id="<?php echo get_class($model); ?>_password_div" class="form-group">
            <?php echo Bootstrap::Label($model, 'password'); ?>
            <?php echo Bootstrap::PasswordField($model, 'password', array('placeholder' => 'Password...')) ?>
            <?php echo Bootstrap::ErrorDiv($model, 'password'); ?>
        </div>

        <!--<p><?php echo Html::link('Dimenticato la password?', array('/password-dimenticata')); ?></p>-->

        <?php echo Bootstrap::Button('submit', 'Entra', null, array('block', 'lg', 'primary')); ?>

        <?php echo Bootstrap::FormMessage($model); ?>

        <?php $this->endWidget(); ?>

    <?php else : ?>

        <em>Hai gi&agrave; effettuato il login.</em>

    <?php endif; ?>

</div>
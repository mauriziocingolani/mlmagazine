<?php

class UserController extends MLController {

    public function init() {
        $this->layout = '//layouts/backend';
        $this->addCss(array('framework/framework', 'backend'));
        $this->addJs('framework/Application.min');
    }

    public function accessRules() {
        return array(
            array('deny',
                'expression' => "Yii::app()->user->isGuest || (Yii::app()->user->user->RoleID!=Role::ROLE_DEVELOPER && Yii::app()->user->getState('overruled')==null)",
                'actions' => array('createUser', 'simulate'),
            ),
            array('allow',
                'users' => array('*'),
            ),
        );
    }

    public function actionLogin() {
        $this->addControllerJs('p_login');
        $this->render('login', array(
            'model' => new LoginForm,
        ));
    }

    public function actionLogout() {
        
    }

}

<?php

/**
 * Modello della form di login.
 *
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;

    public function attributeLabels() {
        return array(
            'username' => 'Utente',
            'password' => 'Password',
        );
    }

    public function rules() {
        return array(
            array('username', 'required', 'message' => 'Inserisci il tuo nome utente'),
            array('password', 'required', 'message' => 'Inserisci la tua password'),
        );
    }

}

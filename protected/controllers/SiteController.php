<?php

class SiteController extends MLController {

    public function actionIndex() {
        CVarDumper::dump('home', 10, true);
    }

    public function actionError() {
        
    }

}

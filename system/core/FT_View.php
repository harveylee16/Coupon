<?php


class FT_View {

    function __construct()
    {
        // Load smarty
        require_once PATH_SYSTEM . '/library/smarty/Autoloader.php';
        Smarty_Autoloader::register();
        $this->view = new Smarty();
        $this->view->setTemplateDir(PATH_APPLICATION.'/templates/');
        $this->view->setCompileDir(PATH_APPLICATION.'/templates_c/');
        $this->view->setConfigDir(PATH_APPLICATION.'/configs/');
        $this->view->setCacheDir(PATH_APPLICATION.'/cache/');


        $this->view->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->view->caching = Smarty::CACHING_OFF;
    }

}
?>
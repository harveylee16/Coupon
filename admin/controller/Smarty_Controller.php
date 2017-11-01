<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Smarty_Controller extends FT_Controller
{
    private $viewHelper = null;
    public function __construct()
    {
        require_once PATH_APPLICATION . '/view/Smarty_View.php';
        $this->viewHelper = new Smarty_View();

    }
    public function indexAction()
    {
        // Load view
//        $this->viewHelper->test();
    }
}
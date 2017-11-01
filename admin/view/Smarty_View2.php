<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
// Load smarty
require_once PATH_SYSTEM . '/core/FT_View.php';
class Smarty_View extends FT_View
{
    public function test()
    {
//        $this->view->assign('a', 'b');
        $this->view->display('showCoupon.tpl');
    }
    public function update()
    {
//        $this->view->assign('a', 'b');
        $this->view->display('updateCoupon.tpl');
    }
}
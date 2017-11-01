<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
// Load smarty
require_once PATH_SYSTEM . '/core/FT_View.php';
class Smarty_View extends FT_View
{
    public function test($data, $randomString)
    {
        $this->view->assign('dulieu', $data);
        $this->view->assign('ramdum', $randomString);
        $this->view->display('showCoupon.tpl');
        $this->view->clearAllCache();
    }

    public function loi()
    {
        $this->view->display('error.tpl');
    }

    public function update($data)
    {
        $this->view->assign('data', $data);
        $this->view->display('updateCoupon.tpl');
    }
}
<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
// Load smarty
require_once PATH_SYSTEM . '/core/FT_View.php';
class Smarty_View extends FT_View
{
    public function coupon($coupon)
    {
        $this->view->assign('dulieu', $coupon);
        $this->view->display('coupon.tpl');
    }
    public function user($str)
    {
        $this->view->assign('str', $str);
        $this->view->display('user_infor.tpl');
    }
    public function bill($tol, $dis)
    {
        $this->view->assign('tol',$tol);
        $this->view->assign('dis',$dis);
        $this->view->display('user_bill.tpl');
    }
}
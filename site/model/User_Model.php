<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
class User_Model extends FT_Model
{
    public function tolist()
    {
//        $this->connect();
        $dataCoupon = $this->querySql("SELECT * FROM coupons");
//        $this->dis_connect();
        return $dataCoupon;
    }
    public function tocoupon()
    {
//        $this->connect();
        $dataCoupon = $this->querySql("SELECT * FROM coupons");
//        $this->dis_connect();
        return $dataCoupon;
    }
    public function total($arr)
    {
        $tol = 0;
        foreach ($arr as $k => $item)
        {
            $a =$this->querySql("SELECT price FROM product WHERE name = '$k'");
            //Tính dữ liệu giả
            $tol += $a[0]['price']*$item;
        }
        return $tol;
    }
    public function discount($tol, $cup)
    {
        $type = $this->querySql("SELECT type_coupon FROM coupons WHERE code = '$cup'");
        $val = $this->querySql("SELECT value FROM coupons WHERE code = '$cup'");
        if(!empty($type) && !empty($val))
        {
            $type = $type[0]['type_coupon'];
            $val = $val[0]['value'];
            if($type == 0)
            {
                $rel = ($tol*$val)/100;
            }
            else
            {
                $rel = $val;
            }
            return $rel;
        }
        return 0;
    }

}
    

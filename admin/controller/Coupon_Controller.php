<?php if (!defined('PATH_SYSTEM')) die ('Bad requested!');

/**
 * Created by PhpStorm.
 * User: KhuongNHQ
 * Date: 10/31/2017
 * Time: 12:38 PM
 */
class Coupon_Controller extends FT_Controller
{
    private $view = null;

    public function __construct($is_controller = true)
    {
        parent::__construct($is_controller);
        require_once PATH_APPLICATION . '/view/Smarty_View.php';
        $this->view = new Smarty_View();
    }

    public function indexAction()
    {
        $this->model->load('coupon');
        $data = $this->model->coupon->showAll();
        //xử lý mã code ramdom ra 1 chuoi 8 ky tu
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 8; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->view->test($data, $randomString);
    }

    public function deleteAction()
    {
        if (empty($_GET['id'])) {
            return $this->view->loi();
        }
        $id = $_GET['id'];
        settype($id, 'int');
        $this->model->load('coupon');
        $result = $this->model->coupon->delete($id);
        if ($result == true) {
            header('location: admin.php?c=coupon');
        }
    }

    public function addAction()
    {
        if (isset($_POST['submit'])) {
            $this->model->load('coupon');
            $dataCoupon = array();
            $dataCoupon['code'] = strtoupper($_POST['code']);
            $dataCoupon['type_coupon'] = $_POST['type_coupon'];
            $dataCoupon['value '] = $_POST['value'];

            //xem ngày bắt đầu có tồn tại không
            if (!empty($_POST['start_date']))
            {
                //Xử lý ngày bắt đầu
                $today = date('Y-m-d');
                //so sánh ngày hiện hành với ngày nhập từ input. nếu today nhỏ hơn date vừa nhập thì báo lỗi.
                if (strtotime($today) < strtolower($_POST['start_date']))
                {
                    die('loi');
                } else {
                    $dataCoupon['start_date'] = $_POST['start_date'];
                }
            }
            else
            {
                $dataCoupon = date('Y-m-d');
            }
            if (!empty($_POST['end_date']))
            {
                $dataCoupon['end_date'] = $_POST['end_date'];
            }
            $resuft = $this->model->coupon->add('coupons', $dataCoupon);
            if ($resuft == true) {
                header('location: admin.php?c=coupon');
            } else {
                echo 'error';
            }
        }
    }

    public function updateAction()
    {

        if (empty($_GET['id'])) {
            return $this->view->loi();
        }
        $id = $_GET['id'];
        $this->model->load('coupon');
        $data = $this->model->coupon->showId($id);
        $conn = array();
        foreach ($data as $key => $value)
        {
            foreach ($value as $keyy => $item)
            {
                $conn[$keyy] = $item;
            }
        }

        if (isset($_POST['submit'])) {
            $dataCoupon = array();
            $dataCoupon['code'] = strtoupper($_POST['code']);
            $dataCoupon['type_coupon'] = $_POST['type_coupon'];
            $dataCoupon['value '] = $_POST['value'];
            //xem ngày bắt đầu có tồn tại không
            if (!empty($_POST['start_date'])) {
                //Xử lý ngày bắt đầu
                $today = date('Y-m-d');
                //so sánh ngày hiện hành với ngày nhập từ input. nếu today nhỏ hơn date vừa nhập thì báo lỗi.
                if (strtotime($today) < strtolower($_POST['start_date'])) {
                    die('loi');
                } else {
                    $dataCoupon['start_date'] = $_POST['start_date'];
                }
            } else {
                $dataCoupon = date('Y-m-d');
            }
            if (!empty($_POST['end_date'])) {
                $dataCoupon['end_date'] = $_POST['end_date'];
            }
            $result = $this->model->coupon->update123('coupons', $dataCoupon, $id);
            if ($result == true) {
                header('location: admin.php?c=coupon');
            } else {
                echo 'error';
            }
        }
        $this->view->update($conn);
    }
}
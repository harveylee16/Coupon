<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class User_Controller extends FT_Controller
{
    private $viewHelper = null;
    public function __construct()
    {
        require_once PATH_APPLICATION . '/view/Smarty_View.php';
        parent::__construct(); //
        $this->viewHelper = new Smarty_View();

    }
    public function indexAction()
    {
        $this->model->load('user');
        $listt = $this->model->user->tolist();
        die();
        $this->viewHelper->coupon($listt);
    }

    public function userAction()
    {
        $str = null;
        $this->viewHelper->user($str);
    }
    public function billAction()
    {
        $arr = [
            [
                'banh_ngot' => 1,
                'banh_kem' => 2,
                'keo' => 10
            ],
        ];
        //check exist $_POST['submit']
        if (isset($_POST['submit'])) {
            $arr['name'] = $_POST['name'];
            $arr['email'] = $_POST['email'];
            $arr['address'] = $_POST['address'];
            $arr['coupon'] = $_POST['coupon'];
            // Check name & address
            if (empty($_POST['name']) || empty($_POST['address'])) {
                $str = "QUÝ KHÁCH VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN";
                $this->viewHelper->user($str);
                exit();
            }
            //Check email
            if (empty($_POST["email"])) {
                $str = "QUÝ KHÁCH VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN";
                $this->viewHelper->user($str);
                exit();
            } else {
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $str = "VUI LÒNG NHẬP LẠI EMAIL";
                    $this->viewHelper->user($str);
                    exit();
                }
            }
            // Check coupon
            $this->model->load('user');
            $coupon = $this->model->user->tocoupon();
            for ($i = 0; $i < count($coupon); $i++) {
                if ($coupon[$i]['code'] != $arr['coupon']) {
                    if ($i == count($coupon) - 1) {
                        $str = "MÃ COUPON KHÔNG TỒN TẠI";
                        $this->viewHelper->user($str);
                        exit();
                    }
                    continue;
                } else {
                    $date = strtotime( date('Y-m-d') ); // hien tai
                    $begin = strtotime( $coupon[$i]['start_date'] ); // hien dai
                    $end = strtotime( $coupon[$i]['end_date'] ); // ketthuc
                    if( ($date >= $begin) && ($date <= $end)  )
                    {
                        $this->model->load('user');
                        $tol = $this->model->user->total($arr[0]);
                        $dis = $this->model->user->discount($tol, $arr['coupon']);
                        if($dis != 0)
                        {
                            $this->viewHelper->bill($tol, $dis);
                            exit();
                        }
                        $this->viewHelper->bill($tol, $dis);
                    }
                    else
                    {
                        $str = "MÃ COUPON HẾT HẠN";
                        $this->viewHelper->user($str);
                        exit();
                    }
                }
            }
        }
    }
}


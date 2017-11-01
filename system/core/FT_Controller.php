<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

/**
 * @package		FT_Framework
 * @author		Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright	Copyright (c) 2015
 * @since		Version 1.0
 * @filesource  system/core/FT_Controller.php
 */
class FT_Controller
{
    
    // Đối tượng model
    protected $model    = NULL;
    
    // Đối tượng library
    protected $library  = NULL;
    
    // Đối tượng helper
    protected $helper   = NULL;
    
    // Đối tượng config
    protected $config   = NULL;
    
    /**
	 * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
	 */
    public function __construct($is_controller = true) 
    {
        // Load View
        //require_once PATH_SYSTEM . '/core/loader/FT_View_Loader.php';
        //$this->viewHelper = new FT_View_Loader();
        // Load Model
        require_once PATH_SYSTEM . '/core/loader/FT_Model_Loader.php';
        $this->model = new FT_Model_Loader();

        require_once PATH_SYSTEM . '/core/loader/FT_Config_Loader.php';
        $this->config = new FT_Config_Loader();
        $this->config->load('config');
    }
}

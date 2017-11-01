<?php
class FT_View_Loader
{
    /**
     * Load view
     *
     * @param 	string
     * @desc    hàm load view, tham số truyền vào là tên của view và các biến truyền vào hàm khởi tạo
     */
    public function load($view)
    {
        // Nếu view chưa load thì tiến hành load
        if (empty($this->{$view})){
            $class = ucfirst($view) . '_View';
            require_once(PATH_APPLICATION . '/view/' . $class . '.php');
            $this->{$view} = new $class();
        }
    }
}
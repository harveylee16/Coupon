<?php
/**
 * Created by PhpStorm.
 * User: ThoiLA
 * Date: 10/24/2017
 * Time: 9:22 AM
 */

class FT_Config_Loader
{
    protected $config = array ();

    public function load($config)
    {
        $fileConfig = PATH_APPLICATION . '/config/' . $config . '.php';
        if(file_exists($fileConfig))
        {
            $config = include_once $fileConfig;
            if (!empty($config))
            {
                foreach ($config as $key => $value)
                {
                    $this->config[$key] = $value;
                }
                return true;
            }
        }
        return false;
    }

    public function getitem($key, $error ='')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $error;
    }

    public function setItem($key, $value)
    {
        $this->config[$key] = $value;
    }
}
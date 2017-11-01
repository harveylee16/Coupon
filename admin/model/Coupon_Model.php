<?php
/**
 * Created by PhpStorm.
 * User: KhuongNHQ
 * Date: 10/31/2017
 * Time: 12:43 PM
 */

class Coupon_Model extends FT_Model
{
    public $table = 'coupons';
    public function showAll()
    {
        //$this->connect();
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->querySql($sql);
        //$this->dis_connect();
        return $result;
    }

    public function showId($id)
    {
       // $this->connect();
        $sql = "SELECT * FROM " . $this->table ." WHERE id=".$id;
        $result = $this->querySql($sql);
        //$this->dis_connect();
        return $result;
    }

    public function delete($id)
    {
       // $this->connect();
        $where = "id = $id";
        $result = $this->remove($this->table,$where);
       // $this->dis_connect();
        return $result;
    }

    public function add($table, $data)
    {
       // $this->connect();
        $result = $this->insert($table, $data);
        //$this->dis_connect();
        return $result;
    }

    public function update123($table, $data, $id)
    {
        //$this->connect();
        $where = "id = $id";
        $result = $this->update($table, $data, $where);
        //$this->dis_connect();
        return $result;
    }
}
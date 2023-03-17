<?php

class MySQLHandler implements DbHandler{
    private $_db_handler;
    private $_table;
    public function __construct($table) {//constructor bhot feh el method ele httrn el awl wl initialization bt3t memeber var
        $this->_table = $table;
        $this->connect();

    }
    public function Connect() {
        try{
            $handler = mysqli_connect(__HOST__, __USER__, __PASS__, __DB__);
            //mfrod aruh fl index a3ml obj mn class 3shan a use fns bt3to 
            if (!$handler) {
                return false;
               
            } 
             $this->_db_handler = $handler;
            return true;
            
        }catch(Exception $e){
            die("Something went wrong");
        }

    }
    public function Disconnect() {
        if ($this->_db_handler)
            mysqli_close($this->_db_handler);

    }

    private function Get_results($sql){//bb3t queries ll db
        if(__Debug__Mode__=== 1){
          echo "send query:" .$sql ."<br/>";
        }
        $_handler_results= mysqli_query($this->_db_handler, $sql);
        $_arr_results= array();
        if($_handler_results){
            while ($row =mysqli_fetch_array($_handler_results, MYSQLI_ASSOC)){
                $_arr_results []= array_change_key_case($row);
            }
            return $_arr_results;
        }
        else{
            return false;
        }
    }






    public function Get_all_records_paginated($fields =array(),$start=0){
        $table = $this->_table;
        if(empty($fields)){
            $sql = "SELECT * FROM `$table`";
        }else{
            $sql = "select ";
            foreach($fields as $f){
                $sql .= " `$f`, ";
            }
            $sql .= "from `$table` ";
            $sql = str_replace(", from", "from", $sql);
        }
        $sql .= "limit $start," . __RECORDS_PER_PAGE__;
        return $this->get_results($sql);
    }

    

    public function Get_record_by_id($id,$primary_key="id"){//3shan lw def par ythat fl akhr
        $table = $this->_table;
        $sql = "SELECT * FROM `$table` where `$primary_key`= $id";
        return $this->get_results($sql);
    }
    public function Save_or_update($fields, $record){
        $sql = "INSERT INTO " . $this->_table . " VALUES (";
        foreach($record as $value){
            $sql .= "?,";
        }
    }
}

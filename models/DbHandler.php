<?php

interface DbHandler{

    public function connect();
    public function get_all_records_paginated($fields=array(), $start=0);//bhddlo ybd2 mn anhu no..W HTGBLE RECORDS by pgs
    public function get_record_by_id($id,$primary_key = "id");//fn btgeb record bl pk bt3o
    
}

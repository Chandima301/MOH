<?php

interface DB{

    public function query($sql, $params = []);
    public function insert($table, $fields = []);
    public function update($table, $fields = [], $key, $keyvalue);
    public function delete($table, $key, $keyvalue);
    public function find($table, $params);
    public function findFirst($table, $params);
    public function first();
    public function error();
    public function results();
    public function count();
    public function get_columns($table);
    public function lastID();
    public function update1($table, $fields = [], $conditions);
    public function update2($table, $fields = [], $key, $keyvalue,$params=[]);
    public function lockANDfind($table, $params);
    public function lockANDfindFirst($table, $params);


}
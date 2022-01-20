<?php


class Book
{

    public $id;
    public $name;
    public $author;
    public $file_path;
    public $type;
    public $sort_order;

    public function __construct($id, $name, $author, $file_path, $type, $sort_order)
    {
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;
        $this->file_path = $file_path;
        $this->type = $type;
        $this->sort_order = $sort_order;
    }

    public function printInfo()
    {


    }
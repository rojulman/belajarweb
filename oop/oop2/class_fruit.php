<?php
class Fruit{
    // properties atau variabel
    public $name;
    public $color;

    function __construct($name,$color){
        $this->$name = $name;
        $this->color = $color;
    }

    function set_name($name){
        $this->name = $name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }

}
?>
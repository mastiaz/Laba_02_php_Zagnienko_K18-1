<?php
Class User
{
    public $name;
    public $surname;
    public $role;
    function __construct($name, $surname, $role ,$lang, $lang2)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->lang = $lang;
        $this->lang2 = $lang2;
    }
    public function welcome()
    {
        echo $this->lang." ".$this->role." ";
    }
}

Class Admin extends User 
{

    public function welcome() {
        parent::welcome();
        echo $this->name. "  " . $this->surname. "  ". $this ->lang2;
    }
}
Class Manager extends User 
{
    public function welcome() {
        parent::welcome();
         echo $this->name. "  " . $this->surname. "  ". $this ->lang2;
    }
}
Class Client extends User 
{
    public function welcome() {
        parent::welcome();
         echo $this->name. "  " . $this->surname. "  ". $this ->lang2;
    }
}
?>
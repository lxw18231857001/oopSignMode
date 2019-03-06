<?php
//适配器模式
class User{
    private $name;
    function __construct($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }
}


interface UserInterface{
    function getUserName();
}
class UserInfo implements UserInterface{
    protected $user;

    function __construct($user)
    {
        $this->user=$user;
    }

    public function getUserName()
    {
        return $this->user->getName();
    }
}

$obj=new User('张三');
echo $obj->getName().'<br>';//张三

$new=new UserInfo($obj);
echo $new->getUserName()."<br>";//张三


<?php
//策略模式
interface FlyBeHavior{
    public function fly();
}
class FlyWithWings implements FlyBeHavior{
    public function fly()
    {
        echo  'fly with wings';
    }
}
class FlywithNo implements FlyBeHavior{
    public function fly()
    {
        echo  'fly no wings';
    }
}

class Duck{
    private $_flyBeHavior;

    public function setFlyBeHavior(FlyBeHavior $beHavior)
    {
        $this->_flyBeHavior=$beHavior;
    }

    public function performFly()
    {
        $this->_flyBeHavior->fly();
    }

}
class RubberDuck extends Duck{

}

$duck=new RubberDuck();
//var_dump($duck);
 $duck->setFlyBeHavior(new FlyWithWings());
 $duck->performFly();   //fly with wings

$duck->setFlyBeHavior(new FlywithNo());
$duck->performFly();   //fly no wings
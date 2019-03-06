<?php

interface UserInstrategy{
    function showAd();
    function showCategory();
}

class MaleUserstrategy implements UserInstrategy{
    public function showAd()
    {
        return '男士广告';
    }

    public function showCategory()
    {
        return "男士产品";
    }
}

class FeMaleUserstrategy implements UserInstrategy{
    public function showAd()
    {
        return '女士广告';
    }

    public function showCategory()
    {
        return "女士产品";
    }
}

$male=new MaleUserstrategy();
echo $male->showCategory();//男士产品

$feMale=new FeMaleUserstrategy();
echo $feMale->showCategory();//女士产品


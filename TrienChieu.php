<?php
    include 'cauhinh.php';
    include 'HinhTron.php';

class TrienChieu extends HinhTron implements CauHinh
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        // TODO: Implement compareTo() method.
        $circleOtherRadius = $circleOther -> getRadius();
        if($this ->getRadius() >  $circleOtherRadius){
            return $this->getName() .">". $circleOther->getName();
        }else if($this->getRadius() < $circleOtherRadius){
            return $this->getName() ."<". $circleOther->getName();

        }else{
            return $this->getName() ."=". $circleOther->getName();

        }

    }
}
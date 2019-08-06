<?php
    include 'Interface.php';
    include 'Circle.php';

class CircleImp extends Circle implements Interface
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

<?php 

class Voiture
{
    /**
     * nombre de roues de la voiture
     */
    const WHEELS = 4;

    private $color;

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    

    public function start()
    {
    }

    public function stop()
    {
    }

    public function accelerate()
    {
    }

    public function decelerate()
    {
    }
}

// $voiture = new Voiture();
Voiture::WHEELS;
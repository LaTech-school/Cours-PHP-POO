<?php 

abstract class Vehicule
{
    private $motor;
    private $color;

    public function __construct(string $motor, string $color)
    {
        // $this->motor = $motor;
        // $this->color = $color;

        $this
            ->setMotor($motor)
            ->setColor($color)
        ;
    }

    abstract public function azert();
    
    /**
     * Get the value of motor
     */ 
    public function getMotor(): string
    {
        return $this->motor;
    }
    
    /**
     * Undocumented function
     *
     * @param string $motor
     * @return self
     */
    public function setMotor(string $motor): self
    {
        if (in_array($motor, ["electric", "thermic"]))
        {
            $this->motor = $motor;
        }
        else
        {
            throw new Exception("La motorisation n'est pas valide");
        }

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getWheels(): ?int
    {
        if (defined('static::WHEELS'))
        {
            return static::WHEELS;
        }

        return null;
    }

    public function getDoors(): ?int
    {
        if (defined('static::DOORS'))
        {
            return static::DOORS;
        }
        
        return null;
    }


    public function openDoor()
    {
        if ($this->getDoors())
        {
            return "Ouvre la porte";
        }
    }
    
    public function start()
    {
        echo "embrayage<br>";
        echo "bouton start<br>";
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
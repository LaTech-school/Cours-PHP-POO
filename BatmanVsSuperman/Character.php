<?php

class Character
{
    // constants definition
    // --

    /**
     * Level : Novice
     * 
     * @var int
     */
    const NOVICE = 9;

    /**
     * Level : Medium
     * 
     * @var int
     */
    const MEDIUM = 4;

    /**
     * Level : expert
     * 
     * @var int
     */
    const EXPERT = 7;


    // properties definition
    // --

    /**
     * Character's name
     *
     * @var string
     */
    private $name;

    /**
     * Health point
     *
     * @default: 100
     * @var int
     */
    private $hp = 100;

    /**
     * Experience
     *
     * @var int
     */
    private $xp;


    public function __construct(string $name, int $xp)
    {
        // Add the name of the character at the charater creation.
        $this->setName($name);
        $this->setXP($xp);
    }

    // Methods (setter / getter)
    // --

    // $xxx->name = "Bobby";
    // $xxx->setName("Bobby);
    private function setName(string $name): self
    {
        $this->name = ucfirst($name);

        return $this;
    }
    // $xxx->getName();
    public function getName(): string
    {
        return $this->name;
    }

    public function setHP(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }
    public function getHP(): int
    {
        return $this->hp;
    }

    public function setXP(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }
    public function getXP(): int
    {
        return $this->xp;
    }



    // Methods (actions)
    // --

    /**
     * Say hello to an opponent
     *
     * @return string
     */
    public function sayHello(Character $opponent): string
    {
        return $this->getName()." salue ". $opponent->getName();
    }

    /**
     * Attack an opponent
     *
     * @return self
     */
    public function attack(Character $opponent, int $coef=1): self
    {
        switch ($this->xp)
        {
            case self::NOVICE: // 1
                $opponent->setHP( $opponent->getHP() - (10*$coef) );
            break;
            
            case self::MEDIUM: // 2
                $opponent->setHP( $opponent->getHP() - (20*$coef) );
            break;

            case self::EXPERT: // 3
                $opponent->setHP( $opponent->getHP() - (30*$coef) );
            break;
        }

        return $this;
    }

    /**
     * Super attack an opponent (= attack x 2)
     *
     * @return self
     */
    public function superAttack(Character $opponent): self
    {
        $this->attack($opponent, 2);

        return $this;
    }

    /**
     * A secret Attack set the opponent HP to 0, if the opponent HP less than 50
     *
     * @return self
     */
    public function secretAttack(Character $opponent): self
    {
        if ($opponent->getHP() < 50)
        {
            $opponent->setHP(0);
        }
        else {
            echo "(Echec de l'attaque secrète ! :()";
        }

        return $this;
    }

    /**
     * Add 10 Health point to the character
     *
     * @return self
     */
    public function care(): self
    {
        $this->hp += 10;

        return $this;
    }

    /**
     * Level Up (+1) the character XP
     *
     * @return self
     */
    public function levelUp(): self
    {
        switch ($this->xp)
        {
            case self::NOVICE:
                $this->setXP( self::MEDIUM );
            break;
            case self::MEDIUM:
                $this->setXP( self::EXPERT );
            break;
            case self::EXPERT:
                // Do nothing
            break;
        }

        return $this;
    }
}
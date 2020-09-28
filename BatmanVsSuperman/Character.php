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
    const NOVICE = 1;

    /**
     * Level : Medium
     * 
     * @var int
     */
    const MEDIUM = 2;

    /**
     * Level : expert
     * 
     * @var int
     */
    const EXPERT = 3;


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
    public function sayHello(): string
    {
        return "";
    }

    /**
     * Attack an opponent
     *
     * @return self
     */
    public function attack()
    {
    }

    /**
     * Super attack an opponent (= attack x 2)
     *
     * @return self
     */
    public function superAttack()
    {
    }

    /**
     * A secret Attack set the opponent HP to 0, if the opponent HP less than 50
     *
     * @return self
     */
    public function secretAttack()
    {
        # code...
    }

    /**
     * Add 10 Health point to the character
     *
     * @return self
     */
    public function care()
    {
    }

    /**
     * Level Up (+1) the character XP
     *
     * @return self
     */
    public function levelUp()
    {
    }

    public function showStatus(): void
    {
        echo "(... ... ...)";
    }
}
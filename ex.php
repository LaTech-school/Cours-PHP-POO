<?php
// Application version 5.0.2


/**
 * Manage all Products
 * 
 * @version 2.0
 * @since 3.0
 * @author Arnaud BODEL <arnaud.bodel@gmail.com>
 * 
 * @usage 
 */
class Product 
{
    /**
     * Nom du produit
     *
     * @var string
     */
    public $name;

    public function product(string $type)
    {
    }


    /**
     * Undocumented function
     *
     * @see product()
     * @version 1.0.3
     * @since 4.1.3
     * @return void
     */
    public function getPizza()
    {
        //..

        return $this->product('pizza');
    }

}
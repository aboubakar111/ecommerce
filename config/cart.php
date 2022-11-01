<?php



return [
    /**
     * Default tax rate
     * This is default tax rate will be used when make a class implement the taxable 
     * interface and used the hastax trait.
     */
    'tax' => 21,

    //
    'database' => [
        'connnection' => null, 
        'table' => 'shoppingcart',

    ],
    //
    'destroy_on_logout' => false, 


    //
    'formate' => [
        'decimal' => 2,
        'decimal_point' => '.',
        'thousand_seperator' => ''
    ],
];

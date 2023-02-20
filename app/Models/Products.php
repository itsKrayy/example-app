<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of products
 */
class Products
{
    use HasFactory;

    /**
     * Summary of all
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public static function all(){

        $product_info = 
        [
            
                [    
                    'musicgenre' => 'Dance',
                    'desc' => 'Feel the electric vibesaaaa'
                ],
                [    
                    'musicgenre' => 'Rock',
                    'desc' => 'feeling like a rockstar'
                ],
                [    
                    'musicgenre' => 'Pop',
                    'desc' => 'Mainstream Music'
                ],
                [    
                    'musicgenre' => 'Hiphop',
                    'desc' => 'OGs only'
                ],
            
        ];
        
        return ($product_info);
    }
}

<?php

namespace App\AdminBundle\Bibliotheques;

/**
 * Description of bibliotheques
 *
 * @author Balde Mamadou mamoudous2005@yahoo.fr
 */
class bibliotheques {
    
    /**
     * Genere un code promo aleatoire
     * 
     * @return string
     */
    function generate_code_promo(){
       $characts = 'abcdefghijklmnopqrstuvwxyz'; 
       $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
       $characts .= '1234567890'; 
       $code_aleatoire = ''; 
       for($i=0; $i<10; $i++) 
       { 
            $code_aleatoire .= $characts[ rand() % strlen($characts) ]; 
       } 
       return $code_aleatoire;
    }
}

<?php 
  class Autoloader{
    public static function autoload(){
        spl_autoload_register(function($className) { 
            
            $file = 'classes/'.$className.'.php';
            $file2 = 'model/'.$className.'.php';
            $file3 = 'connexion/'.$className.'.php';
            $file4 = 'orm/'.$className.'.php';
            $file5 = 'controller/'.$className.'.php';
            if(file_exists($file))
            { 
                require $file; 
                
            }
            else if(file_exists($file2))
            { 
                require $file2; 
                    
            }
            else if(file_exists($file3))
            { 
                require $file3; 
                
            }
            else if(file_exists($file4))
            { 
                require $file4; 
                    
            }
            else if(file_exists($file4))
            { 
                require $file5; 
                    
            }
            else{
               echo "not found". $a;
            }
        });
    }
  }
  
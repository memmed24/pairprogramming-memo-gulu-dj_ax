<?php

  // aşağıdakı kodun nəticəsinə salam! çıxması üçün boşluğun yerinə nə yazılmalıdır?

    class a {
        function greet(){
           self::salam();
       }
       protected function salam(){
           echo "salam!";
       }
    }

    a::greet();

?>

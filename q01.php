<?php 
	
//   Neticesi aşağıdakılar olan funksiya yazın

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/
class Name {


    public function ekranayaz($arg1="",$arg2="",$arg3=""){
        return $arg1." ".$arg2." ".$arg3;
    }
}

$new = new Name;


$a = new Name;


$a = $new->ekranayaz();
echo $a;



?>
<?php
namespace App\Http;

class Helpers {
   
   public static function isError($errors, $name)
   {
	    if($errors->has($name)){
	        return '<em class="state-error">'.$errors->first($name).'</em>';
	    }
	}
	public static function hasError($errors, $name)
	{
		if($errors->has($name))
		{
	        return 'state-error';
	    }
	}
}
?>

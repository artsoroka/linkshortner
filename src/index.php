<?php 

require __DIR__ . '/lib/toro.php'; 

function __autoload($className){
	$file = __DIR__ . '/handlers/' . $className . '.php'; 
	require($file); 
}

set_error_handler(function($errno , $errstr, $errfile, $errline, $errcontext){
	header('HTTP/1.1 500 Internal Server Error'); 
	echo "Internal error";  
	exit(); 
}); 

ToroHook::add("404", function() {
    header('HTTP/1.1 404 Page Not Fount'); 
    echo "Not found";
});

Toro::serve(array(
    "/"       => "MainPage",
    "/login"  => "LoginHandler",
    
    "/:alpha" => "ShortUrlHandler"
)); 
<?php 

class ShortUrlHandler {
	public function get($url){
		print_r($_SERVER); 
		echo "short url " . $url; 
	}
}

<?php

class Siteshot {
	function takeShot($url,array $params = array()){ // returns an dataimage of website
		if(!isset($params['width'])){ $params['width'] = 640; }
		if(!isset($params['height'])){ $params['height'] = 480; }
		if(!isset($params['fullsize'])){ $params['fullsize'] = false; }
		$params['responsetype'] = "json";
		$fullsize = $params['fullsize'] ? "1" : "0";
		$f = json_decode(file_get_contents("http://api.site-shot.com/?url=".$url."&width=".$params['width']."&height=".$params['height']."&full_size=".$fullsize."&format=png&response_type=".$params['responsetype']), true);
		return $f['image'];
	}
}

?>
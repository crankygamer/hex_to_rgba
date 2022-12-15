function convert_rgba_to_hex($string) {
	$rgba  = array();
	$hex   = '';
	$regex = '#\((([^()]+|(?R))*)\)#';
	if (preg_match_all($regex, $string ,$matches)) {
    	$rgba = explode(',', implode(' ', $matches[1]));
	} else {
		$rgba = explode(',', $string);
	}
	
	$rr = dechex($rgba['0']);
	$gg = dechex($rgba['1']);
	$bb = dechex($rgba['2']);
	$aa = '';
	
	if (array_key_exists('3', $rgba)) {
		$aa = dechex($rgba['3'] * 255);
	}
	
	return strtoupper("#$rr$gg$bb");
}

function convert_hex_to_rgba($hex, $opacity = 1){
    list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    return sprintf('rgba(%s, %s, %s, %s)', $r, $g, $b, $opacity);
}

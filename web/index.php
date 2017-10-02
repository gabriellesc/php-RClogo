<?php
$green = '#3dc06c';
$unit = 18;

function genHTML($width, $height, $color, $top, $left, $position,
	         $otherStyles = '', ...$children) {
    $html = '<div style="width:' . $GLOBALS['unit'] * $width . 'px;';
    $html .= 'height:' . $GLOBALS['unit'] * $height . 'px;';
    $html .= "background-color:$color;";
    $html .= 'top:' . $GLOBALS['unit'] * $top . 'px;';
    $html .= 'left:' . $GLOBALS['unit'] * $left . 'px;';
    $html .= "position:$position;";
    $html .= $otherStyles;
    $html .= '">' . "\n";

    foreach ($children as $child) {
        $html .= $child;
    }

    $html .= "</div>\n";
    return $html;
}

echo genHTML(12, 9.5, 'black', 0, 0, 'static', '',
         genHTML(8, 5.5, 'transparent', 1, 1, 'relative', 'border:' . $unit . 'px solid white;', 
	     genHTML(1, 1, $green, 1, 0, 'absolute'),
             genHTML(1, 1, $green, 1, 2, 'absolute'),
             genHTML(1, 1, $green, 1, 4, 'absolute'),
	     genHTML(2, 1, $green, 3, 1, 'absolute'),
	     genHTML(2, 1, $green, 3, 4, 'absolute')
         )
     );
echo genHTML(4, 1, 'black', 0, 4, 'relative');
echo genHTML(10, 1, 'black', 0, 1, 'relative');
echo genHTML(12, 2.5, 'black', 0, 0, 'relative', '', 
         genHTML(1, 1, 'white', 1, 2, 'absolute'),
         genHTML(1, 1, 'white', 0, 3, 'absolute'),
	 genHTML(1, 1, 'white', 1, 4, 'absolute'),
	 genHTML(1, 1, 'white', 0, 5, 'absolute'),
	 genHTML(1, 1, 'white', 1, 6, 'absolute'),
	 genHTML(1, 1, 'white', 0, 7, 'absolute'),
	 genHTML(1, 1, 'white', 1, 8, 'absolute'),
	 genHTML(1, 1, 'white', 0, 9, 'absolute')
     );
?>
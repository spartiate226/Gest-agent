<?php
function valu($arg){
    if ($arg!=null) {
        echo $arg;
    }
}

function selected($arg,$valu){
    if ($arg==$valu) {
        echo 'selected';
    }
}
?>
<?php

/*em vez de ficar repetindo includes em outras páginas, usar function faz os includes e depois só precisa
chamar a function*/


function getTopPage() {
    global $_title;
    include('./includes/top_page.php');
}

function getBottomPage() {
    include('./includes/bottom_page.php');
}
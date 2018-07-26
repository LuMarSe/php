<?php

/************************************************************/
/**IMPORT JBZOO UTILS */
require_once '..\vendor\JBZoo\Utils\src\Arr.php';

/**USE ARR UTILS */
use JBZoo\Utils\Arr;

/************************************************************/

/** */


$a = array(1,2,3,4,5,10);

/** */


?>

<!-- MATERIAL DESIGN LITE CDN -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!-- -->

<hr/>
<div align="center">
<form action="https://github.com/JBZoo/Utils">
    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="JBZOO Utils" />
</form>

<form action="https://getmdl.io/">
    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Material Design Lite" />
</form>
</div>
<hr/>

<h1><?= Arr::in(10, $a) ?></h1>
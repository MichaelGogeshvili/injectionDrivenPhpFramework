<?php
$GLOBALS['import'] = function($_) { return require($_); };
#$GLOBALS['import']('app/static/.init');
$app = $GLOBALS['import']('app/sys/app');
$defined_vars = get_defined_vars();
header ('content-type:application/json');
print $app($defined_vars) ;

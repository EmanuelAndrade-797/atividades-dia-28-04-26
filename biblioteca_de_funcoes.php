<?php

// atividade 1
namespace conversao;

function dolarparareal ($valor, $cotadolar){

return ($valor* $cotadolar);
}
echo "em dolar o valor e:  ", dolarparareal (10, 5);

function europarareal ($valor, $cotaeuro){

return ($valor* $cotaeuro);

}
echo " em euro o valor e:  ", europarareal (10, 5.85);

function pesoparareal ($valor, $cotapeso){

return ($valor* $cotapeso);

}
echo " em peso o valor e:  ", pesoparareal (10, 0.0035);

function libraparareal ($valor, $cotalibra){

return ($valor* $cotalibra);

}
echo " em libra o valor e:  ",  libraparareal (10, 6.74);

function ieneparareal ($valor, $cotaiene){

return ($valor* $cotaiene);

}
echo " em iene o valor e:  ", ieneparareal (10,0.031);
?>
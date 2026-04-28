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

namespace geometria;

function areaQuadrado ($lado){

return ($lado*$lado);

}
echo " a area do quadrado é: ", areaQuadrado (5);

function areaRetangulo ($base, $alturaq){

return ($base*$alturaq);

}
echo " a area do retangulo é: ", areaRetangulo (2, 4);

function areaTriangulo ($base, $alturar){

return (($base*$alturar)/2);


}
echo " a area do triangulo é: ", areaTriangulo (3, 5);
 
function areaCirculo ($raio){
 
return (3.14*($raio*$raio));


}
echo " a area do circulo é: ", areaCirculo (8);

function areaTrapezio ($baseMaior, $baseMenor, $alturat){

return (($baseMaior+$baseMenor)*$alturat)/2;


}
echo " a area do trapezio é:  ", areaTrapezio (10, 10, 2);
?>
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

//atividade 2

function areaQuadrado ($lado){
return ($lado*$lado);
}
echo " a area do quadrado é: ", areaQuadrado (5);

function areaRetangulo ($base, $alturaq){
return ($base*$altura);
}
echo " a area do retangulo é: ", areaRetangulo (2, 4);

function areaTriangulo ($base, $altura){
return (($base*$altura)/2);
}
echo " a area do triangulo é: ", areaTriangulo (3, 5);
 
function areaCirculo ($raio){
return (3.14*($raio*$raio));
}
echo " a area do circulo é: ", areaCirculo (8);

function areaTrapezio ($baseMaior, $baseMenor, $altura){
return (($baseMaior+$baseMenor*$altura)/2);
}
echo " a area do trapezio é:  ", areaTrapezio (10, 10, 2);

//atividade 3
namespace saude;

function calcularimc ($peso, $altura){
return ($altura*$altura/$peso);
}
echo "o seu IMC é: ", calcularimc (175, 60);

function valorIdealdeagua ($peso){
return ($peso*35);
}
echo "voce precisa beber isso de agua por dia: ", valorIdealdeagua (60);

function frequenciacardiacamaxima ($idade){
return (220-$idade);
}
echo "sua frequencia cardiaca max é: ", frequenciacardiacamaxima (16);

function converterlibrasparaquilo ($libras){
return ($libras*0.453592);
}
echo "suas libras para kg é: ", converterlibrasparaquilo (10);
function calcularCaloriasBasaismasculino($peso, $idade, $altura){

return (66.5+(13.75+$peso)+(5.003*$altura)-(6.75*$idade));
}
echo "suas calorias basal é: ", calcularCaloriasBasaismasculino (60, 16, 175);

function calcularCaloriasBasaisfeminino($peso, $idade, $altura){

return (655.1+(9.563+$peso)+(1.850*$altura)-(4.676*$idade));
}
echo "suas calorias basal é: ", calcularCaloriasBasaisfeminino (60, 16, 175);

?>
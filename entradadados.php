<?php
require_once "biblioteca_de_funcoes.php";
use function conversao\dolarparareal;
use function conversao\europarareal;
use function conversao\pesoparareal;
use function conversao\libraparareal;
use function conversao\ieneparareal;
echo "calculadora de conversão de moedas para o real :)","\n";
echo "ESCOLHA UMA OPÇÃO DE MOEDA:", "\n";
echo "---------------------------------------------", "\n";
echo "1-Dolar para real", "\n";
echo "2- Euro para Real", "\n";
echo "3- Peso Argentino para Real", "\n";
echo "4- Libra para Real", "\n";
echo "5- Iene para Real", "\n";
echo "6- Sair", "\n";
$op = readline();
switch ($op){
    case 1:
    $valor = readline("digite o seu valor em dólar: ");
    $cotadolar = readline("digite a cotação atual do dólar: ");
        echo "Dolár para real: ", dolarparareal($valor, $cotadolar),"\n\n";
        break;

    case 2:
    $valor = readline("digite o seu valor em Euro: ");
    $cotaeuro = readline("digite a cotação atual do Euro: ");
        echo "Euro para real: ",\europarareal($valor, $cotaeuro),"\n\n";
        break;

    case 3:
    $valor = readline("digite o seu valor em Peso: ");
    $cotapeso = readline("digite a cotação atual do Peso: ");
        echo "Peso para real: ", pesoparareal($valor, $cotapeso),"\n\n";
        break;

    case 4:
    $valor = readline("digite o seu valor em Libra: ");
    $cotalibra = readline("digite a cotação atual do Libra: ");
        echo "Libra para real: ", libraparareal($valor, $cotalibra),"\n\n";
        break;

    case 5:
    $valor = readline("digite o seu valor em iene: ");
    $cotaiene = readline("digite a cotação atual do Iene: ");
        echo "Iene para real: ", ieneparareal($valor, $cotaiene),"\n\n";
        break; 

    case 6:
        echo "tchau brigado";
        break;

    default:
        echo "opção inválida";
        break;
}
require_once "biblioteca_de_funcoes.php";
use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;
echo "calculadora de area","\n";
echo "ESCOLHA UMA OPÇÃO DE AREA PARA DESCOBRIR:", "\n";
echo "---------------------------------------------", "\n";
echo "1 area do quadrado", "\n";
echo "2- area do retangulo", "\n";
echo "3- area do triangulo", "\n";
echo "4- area do circulo", "\n";
echo "5- area do trapezio", "\n";
echo "6- Sair", "\n";
$op = readline();
switch ($op){
    case 1:
    $lado = readline("digite o valor do lado: ");
        echo "a area do quadrado é: ", areaQuadrado($lado),"\n\n";
        break;

    case 2:
    $base = readline("digite a sua base: ");
    $altura = readline("digite a altura: ");
        echo "area do retangulo: ",\areaRetangulo($base, $altura),"\n\n";
        break;

    case 3:
    $base = readline("digite a base: ");
    $altura = readline("digite a altura: ");
        echo "area do triangulo: ", areaTriangulo($base, $altura),"\n\n";
        break;

    case 4:
    $raio = readline("digite o valor do raio ");
        echo "Libra para real: ", areaCirculo($raio),"\n\n";
        break;

    case 5:
    $baseMaior = readline("digite o valor maior:");
    $baseMenor = readline("digite o valo menor: ");
    $altura = readline ("digite a altura: ");
  echo "area do trapezio: ",areatrapezio($baseMaior, $baseMenor, $altura),"\n\n";
        break; 

    case 6:
        echo "tchau brigado";
        break;

    default:
        echo "opção inválida";
        break;
}
require_once "biblioteca_de_funcoes.php";
use function saude\calcularimc;
use function saude\valorIdealdeagua;
use function saude\frequenciacardiacamaxima;
use function saude\converterlibrasparaquilo;
use function saude\calcularCaloriasBasaismasculino;
use function saude\calcularCaloriasBasaisfeminino;
echo "Area da saude","\n";
echo "ESCOLHA UMA OPÇÃO DA SAUDE PARA DESCOBRIR:", "\n";
echo "---------------------------------------------", "\n";
echo "1- calcular imc" "\n";
echo "2- valor ideal de agua", "\n";
echo "3- frequencia cardiaca maxima", "\n";
echo "4- converter libras para quilo", "\n";
echo "5- calcular calorias basais masculinas", "\n";
echo "6- calcular calorias basais feminino", "\n";
echo "7- Sair", "\n";
$op = readline();
switch ($op){
   







}
?>
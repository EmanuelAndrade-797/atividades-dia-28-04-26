<?php
require_once "biblioteca_de_funcoes.php";
use function conversao\dolarparareal;
use function geometria\areaQuadrado;
use function saude\calcularimc;
echo "em dolar o valor e:  ", dolarparareal (100, 5);
echo "a area do quadrade e: ", areaQuadrado (20);
echo "o seu IMC é: ", calcularimc (175, 60);


?>
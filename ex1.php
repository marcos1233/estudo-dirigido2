<?php
print "Digite o primeiro número: ";
$num1= (float) fgets(STDIN);

print "Digite o segundo número: ";
$num2= (float) fgets(STDIN);

if ($num1>$num2)  
{print "O número 1 é maior\n";
$numummaior= $num1-$num2;
print "O número 1 é maior que o número 2 por: $numummaior\n";}

if ($num1<$num2)  
{print "O número 2 é maior\n";
$numdoismaior= $num2-$num1;
print "O número 2 é maior que o número 1 por: $numdoismaior\n";}

if ($num1==$num2)  
{print "os números são iguais";}

<?php
print "Digite o primeiro número: ";
$n1= (float) fgets(STDIN);
print "Digite o segundo número: ";
$n2= (float) fgets(STDIN);
print "Digite o terceiro número: ";
$n3= (float) fgets(STDIN);

if ($n1>$n2 && $n1>$n3) 
    {print "O primeiro número é o maior\n";}
if ($n2>$n1 && $n2>$n3) 
    {print "O segundo número é o maior\n";}
if ($n3>$n1 && $n3>$n2) 
    {print "O terceiro número é o maior\n";}

if ($n1<$n2 && $n1<$n3) 
{print "O primeiro número é o menor\n";}
if ($n2<$n1 && $n2<$n3) 
{print "O segundo número é o menor\n";}
if ($n3<$n1 && $n3<$n2) 
{print "O terceiro número é o menor\n";}

if ($n1==$n2 && $n1==$n3) 
{print "Ambos 3 números são iguais";}
if ((float)($n1 && $n2 && $n3))
{if ($n1==$n2) 
{print "O primeiro e segundo número são iguais";}       
if ($n2==$n3) 
{print "O segundo e terceiro número são iguais";}          
if ($n3==$n1) 
{print "O primeiro1º e terceiro número são iguais";}}

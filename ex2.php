<?php
print "Digite o número: ";
$num= (float) fgets(STDIN);
if ($num<0)
{print "O número digitado é negativo\n";}
if ($num>0)
{print "O número digitado é positivo\n";}
if ($num==0)
{print "O número digitado é neutro\n";}

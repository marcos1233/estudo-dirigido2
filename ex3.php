<?php

print "Digite M ou F: ";
$sexo= (string) fgets(STDIN);

$masculino= 'M';
$feminino= 'F';

if ((strcasecmp($sexo, $masculino))==1 or (strcasecmp($sexo, $masculino))==1 and (strcasecmp($sexo,$feminino)) ==7)
{print "Sexo masculino";}

elseif ((strcasecmp($sexo, $feminino))!=-7 or (strcasecmp($sexo, $feminino))==2 and (strcasecmp($sexo, $feminino))==1)
{print "Sexo feminino";} 

else  {print "Sexo inválido";}

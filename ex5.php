<?php
print "Digite a nota 1: ";
$n1= (float) fgets(STDIN);
print "Digite a nota 2: ";
$n2= (float) fgets(STDIN);
print "Digite a média necessária: ";
$medneces= (float) fgets(STDIN);
$media = ($n1+$n2)/2;
$media = round($media, 2);
$notaneces= $medneces-$media;
if ($media>=$medneces && $media!=10)
{print "Aluno aprovado(a) - Média: $media; Média necessária: $medianecessaria\n";}
if ($media<$medneces)
{print "Aluno(a) reprovado(a) - Média: $media; Média necessária: $medianecessaria; Precisando de: $notanecessaria pontos para ser aprovado(a)\n";}
if ($media==10)
{print "Aluno(a) aprovado(a) com distinção - Média: $media; Média necessária: $medianecessaria\n";}

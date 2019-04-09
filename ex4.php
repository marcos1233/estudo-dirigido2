<?php

print "Digite uma letra: ";
$letra = fgetc(STDIN);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o"  or $letra == "u")  {
print "esta letra é uma vogal \n";
}

else {
print "esta letra é uma consoante \n";
}

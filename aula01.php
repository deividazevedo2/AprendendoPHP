<!-- por padr�o inicialmente o eclipse adiciona essa linha abaixo, mas tanto faz ter a palavra php ou n�o neste inicio de arquivo -->
<!-- Toda variavel come�a com o simbolo de cofr�o $ e atribu�da com o sinal de igual, toda linha de comando termina com ; -->

<!-- comando de sa�da: print -->

<?php

/* fazer um programa que leia dois numeros e imprima a soma e m�dia dos mesmos. */
print "Informe o 1� n�mero: ";
$n1=trim(fgets(STDIN));

print "Informe o 2� n�mero: ";
$n2=trim(fgets(STDIN));

$soma=$n1+$n2;

print "\nA soma dos n�meros informados �: " .$soma;

?>

<!-- Preciso ver como rodar um script php no eclipse. nao ta rodando ainda -->
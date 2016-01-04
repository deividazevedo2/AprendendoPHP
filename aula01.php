<!-- por padrão inicialmente o eclipse adiciona essa linha abaixo, mas tanto faz ter a palavra php ou não neste inicio de arquivo -->
<!-- Toda variavel começa com o simbolo de cofrão $ e atribuída com o sinal de igual, toda linha de comando termina com ; -->

<!-- comando de saída: print -->

<?php

/* fazer um programa que leia dois numeros e imprima a soma e média dos mesmos. */
print "Informe o 1º número: ";
$n1=trim(fgets(STDIN));

print "Informe o 2º número: ";
$n2=trim(fgets(STDIN));

$soma=$n1+$n2;

print "\nA soma dos números informados é: " .$soma;

?>

<!-- Preciso ver como rodar um script php no eclipse. nao ta rodando ainda -->
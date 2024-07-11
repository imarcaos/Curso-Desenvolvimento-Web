# 04 - PASSAR PARÂMETROS PARA O SCRIPT

Tal como o PHP tem parâmetros (-i, -m, etc), podemos passar argumentos para o interior do script
que vamos executar.

A sintaxe é muito simples:
php [nome do script] valores separados por espaços.

Estes argumentos são recebidos pelo script através de de um array global
designado por $argv.

Neste array, o primeiro elemento é sempre o nome do script que estamos a executar.
Um valor é o $argc. Ele contém o o número de argumentos que vão ser passados
para o interior do script.

Vamos testar com o script index_1.php
1. sem qualquer argumento
2. com os argumentos 100 e 200

Repara como todos os argumentos são considerados como strings
Isto não é propriamente um problema.

3. Vamos executar o index_2.php 100 200

O resultado é o esperado: a soma de 100 mais 200.

4. Vamos experimentar o script index_3.php com texto.
php index_3.php João

E se quisermos passar valores com espaços:

php index_3.php "João Ribeiro"

Caso contrário só vai ser considerado o primeiro valor antes do espaço: João.

https://www.php.net/manual/en/features.commandline.usage.php
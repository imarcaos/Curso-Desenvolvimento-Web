# 07 - VALIDAÇÃO DE ARGUMENTOS

Quando crias um script que vai ser executado na linha de comandos,
e se o mesmo vai aceitar argumentos, deves sempre validar se os argumentos,
estão disponíveis no comando de execução.

Imagina que tens um script que necessita de dois argumentos, mas só forneces um?!

1. O script index_1.php está à espera de dois argumentos numéricos.
O resultado da execução do script é a criação de um ficheiro que 
executa uma sequência de multiplicações do produto da multiplicação
do valor 1 pelo valor 2 e voltando a multiplicar por valor 2

se não forem fornecidos os argumentos, o script vai apresentar erros no terminal.

2. O mesmo código, no script index_2.php, contém um conjunto de validações que
vão controlar a forma como o script vai ser executado (ou não)
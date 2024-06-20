# 02 - PHP CLI E COMO EXECUTAR UM SCRIPT NO TERMINAL

1. Verificar se temos o PHP instalado no nosso sistema.
1.1 Se não existe, vamos adicionar às variáveis de ambiente do Windows.
    Isto não será necessário num servidor web devidamente preparado.

    a) no Laragon, menu de contexto > PHP > version > dir
    b) copiar todo o caminho
    c) windows key > editar variáveis de ambiente do sistema
    d) variáveis de ambiente...
    e) path > editar
    f) novo > colar (adicionar a barra no final) > OK > OK
    g) reiniciar o vscode
    h) abrir terminal e executar:

php -v (apresenta a versão)

- ver a lista de módulos disponíveis no php

php -m

- ver informação detalhada do PHP e do sistema

php -i

- verificar o local do ficheiro php.ini

Executar o PHP em modo interativo

php -a

    $valor = 100;
    echo $valor * 2;

    - e se escrever 'str' e TAB, vai mostrar opções

    Ctrl + C para sair

2. Vamos criar um ficheiro de php (index.php)
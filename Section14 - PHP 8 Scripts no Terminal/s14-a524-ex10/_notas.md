# 10 - EXERCÍCIO COM REGISTO DE LOGS

Uma vez que o objetivo da execução de scripts de PHP na linha de comando
não é a apresentação visual de informação como acontece na web,
na maior parte dos casos esses scripts vão executar tarefas automáticas,
por exemplo enquadradras em cron jobs, e se não implementarmos um sistema
de registo de logs, nunca iremos ficar a conhecer o que aconteceu de errado
na execuçãod e um determinado processo, ou quantos registos foram processados,
entre outros aspetos.
Por esse motivo é absolutamente fundamental adicionar um registo de logs a
qualquer sistema automatizado de execução de scripts de PHP neste contexto.

E a melhor solução é utilizar packages que já estão criados para o efeito,
como é o caso do Monolog.
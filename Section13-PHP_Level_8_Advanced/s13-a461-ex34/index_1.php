<?php

/*
Podemos alterar a data e hora de várias formas.
*/

$data = new DateTime("2030-01-01 00:00:00");
echo $data->format('d/m/Y H:i:s') . '<br>';
// Estamos no dia 1 de Janeiro de 2030, às 0 horas.

/*
Podemos adicionar ou subtrair períodos de tempo.
*/

$data->add(new DateInterval("P1D")); // Adicionar um dia
echo $data->format('d/m/Y H:i:s') . '<br>';

$data->add(new DateInterval("P1M")); // Adicionar um mês
echo $data->format('d/m/Y H:i:s') . '<br>';

$data->add(new DateInterval("P3M15D")); // Adicionar três meses e 15 dias
echo $data->format('d/m/Y H:i:s') . '<br>';

$data->add(new DateInterval("PT180M")); // Adicionar 180 minutos
echo $data->format('d/m/Y H:i:s') . '<br>';

$data->add(new DateInterval("PT50H")); // Adicionar 50 horas
echo $data->format('d/m/Y H:i:s') . '<br>';

// e o mesmo acontece com o método sub
$data->sub(new DateInterval("P46D")); // Subtrair 46 dias
echo $data->format('d/m/Y H:i:s') . '<br>';

/* e por ai adiante */

/*
Podemos ainda modificar a data com o método modify.
Uma outra forma mais descritiva de mudar a data.
*/
echo '<hr>';
$data = new DateTime("2030-01-01 00:00:00");

$data->modify("+3 day"); //adicionar 3 dias
echo $data->format('d/m/Y H:i:s') . '<br>';

$data->modify("+42 hours 5 minutes 36 seconds"); // adicionar 42 horas, 5 minutos e 36 segundos.
echo $data->format('d/m/Y H:i:s') . '<br>';

// e podes usar o sinal negativo para subtrair valores à data.

<?php

helper('form');
$form = form_open('bhaskara/inserir');
$forminicio = str_replace('index.php', 'public', $form);
echo $forminicio;
echo '<pre>';
echo form_label('<br>FORMULÁRIO DE BHASKARA <br> <br>', '');
echo form_label('Digite o valor de A ', 'valorA');
echo form_label('<br>');
echo form_input('a', '');
echo form_label('Digite o valor de B ', 'valorB');
echo form_label('<br>');
echo form_input('b', '');
echo form_label('Digite o valor de C', 'valorC');
echo form_label('<br>');
echo form_input('c', '');
echo form_label('<br>');
echo form_submit('mysubmit', 'Calcular');
echo form_close(); 

?>
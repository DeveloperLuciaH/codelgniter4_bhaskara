  
<?php

helper('form');

echo form_open('bhaskara/excluir');
echo '<pre>';
echo form_label('<br><br><br>--------------------------------- <br>', '');
echo form_label('Exclusão <br>', '');
echo form_label('Digite o ID a excluir ', 'id');
echo form_input('ID', '');
echo form_submit('mysubmit', 'Deletar');
echo form_close();

?>
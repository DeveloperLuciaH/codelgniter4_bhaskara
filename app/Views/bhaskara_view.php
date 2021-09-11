<?php
$table = new \CodeIgniter\View\Table();

// echo $table->generate($tabela);

$template = [
    'table_open'         => '<table border="1" cellpadding="10" cellspacing="0">',

    'table_close'        => '</table>'
];
$table->setHeading('ID', 'A', 'B', 'C', 'DELTA', 'X1', 'X2');
$table->setTemplate($template);

echo $table->generate($tabela);
?>  
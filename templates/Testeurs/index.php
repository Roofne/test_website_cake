<h1>Test Page</h1>

<h2>Connections</h2>

<?php
//echo $this->form->create();
//echo $this->form->end();

echo "<table id='table_connection' class='table'>";
echo $this->Html->tableHeaders(['host','username','password','database']);
echo $this->Html->tableCells([$config, $config_2]);
echo "</table>";
?>


<h2>Style</h2>

<?php

?>

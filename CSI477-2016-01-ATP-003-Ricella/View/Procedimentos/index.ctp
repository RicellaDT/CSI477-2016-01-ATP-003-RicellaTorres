<div class="procedimentos index">
<h1> Lista de Procedimentos </h1>
	<table>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Preço</th>
		</tr>
	<?php foreach ($procedimentos as $procedimento): ?>
	<tr>
		<td><?php echo h($procedimento['Procedimento']['id']); ?>&nbsp;</td>
		<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($procedimento['Procedimento']['preco']); ?>&nbsp;</td>
	
	</tr>
<?php endforeach; ?>
</table>

</div>
<?php 
echo '<div class="btn-group" role="group">';	

echo '<div class="btn-group">';
echo $this->Html->link('Voltar',
				    '/pages/home',
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
echo '</div>';

echo '</div>';
?>

</br></br>

<?php
echo '<div class="btn-group">';
echo $this->Html->link('Marcar Exame',
				    array('controller' => 'pacientes', 
  									'action' => 'index_login'),
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
echo '</div>';
 ?>
 </br></br>

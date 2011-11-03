<h1> Blog utilizando o cake 2.0</h1> 

	<table>
		<tr> 
			<th> Id </th>
			<th> Título </th>
			<th> Criação </th>
			<th> Ação </th>
		</tr>
		<?php foreach($posts as $post) : ?>
			<tr>
				<td>
					<?php echo $post['Post']['id']; ?>
				 </td>

				<td>
					<?php echo $this->Html->link($post['Post']['title'], array('controller'=>'posts' , 'action'=>'view',$post['Post']['id']));  ?>
				</td>
				<td>
					<?php echo $post['Post']['created']; ?>
				</td>
				<td>
				  <?php echo $this->Html->link('Edit',array('controller'=>'posts', 'action'=>'edit', $post['Post']['id'])); ?>
				  <?php echo $this->Form->postLink('Delete', array('controller'=>'posts','action'=>'delete', $post['Post']['id']),array('confirm'=> 'você está certo disso')) ; ?>
				</td>
			</tr>

		<?php endforeach; ?>	

	</table>

<?php echo $this->Html->link('Adicionar novo post', array('controller'=>'posts' ,'action'=>'edit'));?>


 

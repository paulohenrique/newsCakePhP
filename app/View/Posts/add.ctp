
<h1> Adicionar novo Post </h1>
<?php 
	
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows'=> 3 ));
	echo $this->Form->end('Enviar');
 
 ?>
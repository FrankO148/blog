<h1>Blog posts</h1>
<table>
	<?php
		echo $this->Html->tableHeaders(array('Id', 'Title', 'Created','','')); 
	?>
	
<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($posts as $post): ?>
	<?php
		echo $this->Html->tableCells(array(
		    array($post['Post']['id'], 
		    	$this->Html->link($post['Post']['title'],array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])),
		    	$post['Post']['created'],
		    	$this->Html->link('edit',array('controller'=>'posts','action'=>'edit',$post['Post']['id'])),
		    	$this->Form->postLink('delete',array('action'=>'delete',$post['Post']['id']),array('confirm'=>'Are you sure?'))
		    	),
		));
	?>
	
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>

<?php echo $this->Html->link(
'Add Post',
array('controller' => 'posts', 'action' => 'add')
); ?>
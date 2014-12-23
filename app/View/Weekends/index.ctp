<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-plus"></i>Add Couple Profile</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->

<div class="weekends index">
	<h2><?php echo __('Weekends'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($weekends as $weekend): ?>
	<tr>
		<td><?php echo h($weekend['Weekend']['id']); ?>&nbsp;</td>
		<td><?php echo h($weekend['Weekend']['title']); ?>&nbsp;</td>
		<td><?php echo h($weekend['Weekend']['year']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $weekend['Weekend']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $weekend['Weekend']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $weekend['Weekend']['id']), array(), __('Are you sure you want to delete # %s?', $weekend['Weekend']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Weekend'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Couples'), array('controller' => 'couples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couple'), array('controller' => 'couples', 'action' => 'add')); ?> </li>
	</ul>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->
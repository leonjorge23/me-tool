<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-pencil-square-o"></i>Edit Couple Record</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
<div class="couplesWeekends form">
<?php echo $this->Form->create('CouplesWeekend'); ?>
	<fieldset>
		<legend><?php echo __('Edit Couples Weekend'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('couple_id');
		echo $this->Form->input('weekend_id');
		echo $this->Form->input('team');
		echo $this->Form->input('role');
		echo $this->Form->input('new');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CouplesWeekend.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CouplesWeekend.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Couples Weekends'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Couples'), array('controller' => 'couples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couple'), array('controller' => 'couples', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weekends'), array('controller' => 'weekends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weekend'), array('controller' => 'weekends', 'action' => 'add')); ?> </li>
	</ul>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->
<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-plus"></i>Add Couple Profile</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->

<div class="weekends form">
<?php echo $this->Form->create('Weekend'); ?>
	<fieldset>
		<legend><?php echo __('Edit Weekend'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('year');
		echo $this->Form->input('Couple');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Weekend.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Weekend.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Weekends'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Couples'), array('controller' => 'couples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couple'), array('controller' => 'couples', 'action' => 'add')); ?> </li>
	</ul>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->
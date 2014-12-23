<div class="couples form">
<?php echo $this->Form->create('Couple'); ?>
	<fieldset>
		<legend><?php echo __('Edit Couple'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('his_name');
		echo $this->Form->input('her_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('his_cell');
		echo $this->Form->input('her_cell');
		echo $this->Form->input('primary_email');
		echo $this->Form->input('secondary_email');
		echo $this->Form->input('Weekend');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Couple.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Couple.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Couples'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Weekends'), array('controller' => 'weekends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weekend'), array('controller' => 'weekends', 'action' => 'add')); ?> </li>
	</ul>
</div>

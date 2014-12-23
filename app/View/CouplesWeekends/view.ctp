<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-pencil-square-o"></i>Couple Record View</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
<div class="couplesWeekends view">
<h2><?php echo __('Couples Weekend'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couplesWeekend['CouplesWeekend']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Couple'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couplesWeekend['Couple']['last_name'], array('controller' => 'couples', 'action' => 'view', $couplesWeekend['Couple']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weekend'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couplesWeekend['Weekend']['title'], array('controller' => 'weekends', 'action' => 'view', $couplesWeekend['Weekend']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo h($couplesWeekend['CouplesWeekend']['team']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($couplesWeekend['CouplesWeekend']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New'); ?></dt>
		<dd>
			<?php echo h($couplesWeekend['CouplesWeekend']['new']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($couplesWeekend['CouplesWeekend']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Couples Weekend'), array('action' => 'edit', $couplesWeekend['CouplesWeekend']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Couples Weekend'), array('action' => 'delete', $couplesWeekend['CouplesWeekend']['id']), array(), __('Are you sure you want to delete # %s?', $couplesWeekend['CouplesWeekend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Couples Weekends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couples Weekend'), array('action' => 'add')); ?> </li>
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

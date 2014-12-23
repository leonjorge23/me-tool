<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-plus"></i>Add Couple Profile</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->

<div class="weekends view">
<h2><?php echo __('Weekend'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($weekend['Weekend']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($weekend['Weekend']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($weekend['Weekend']['year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Weekend'), array('action' => 'edit', $weekend['Weekend']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Weekend'), array('action' => 'delete', $weekend['Weekend']['id']), array(), __('Are you sure you want to delete # %s?', $weekend['Weekend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Weekends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weekend'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Couples'), array('controller' => 'couples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couple'), array('controller' => 'couples', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Couples'); ?></h3>
	<?php if (!empty($weekend['Couple'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('His Name'); ?></th>
		<th><?php echo __('Her Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('His Cell'); ?></th>
		<th><?php echo __('Her Cell'); ?></th>
		<th><?php echo __('Primary Email'); ?></th>
		<th><?php echo __('Secondary Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($weekend['Couple'] as $couple): ?>
		<tr>
			<td><?php echo $couple['id']; ?></td>
			<td><?php echo $couple['his_name']; ?></td>
			<td><?php echo $couple['her_name']; ?></td>
			<td><?php echo $couple['last_name']; ?></td>
			<td><?php echo $couple['address']; ?></td>
			<td><?php echo $couple['city']; ?></td>
			<td><?php echo $couple['state']; ?></td>
			<td><?php echo $couple['zip']; ?></td>
			<td><?php echo $couple['home_phone']; ?></td>
			<td><?php echo $couple['his_cell']; ?></td>
			<td><?php echo $couple['her_cell']; ?></td>
			<td><?php echo $couple['primary_email']; ?></td>
			<td><?php echo $couple['secondary_email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'couples', 'action' => 'view', $couple['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'couples', 'action' => 'edit', $couple['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'couples', 'action' => 'delete', $couple['id']), array(), __('Are you sure you want to delete # %s?', $couple['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Couple'), array('controller' => 'couples', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->
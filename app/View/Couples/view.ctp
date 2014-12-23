<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-plus"></i>Couple View:</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->

<div class="couples view">
<h2><?php echo __('Couple'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('His Name'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['his_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Her Name'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['her_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('His Cell'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['his_cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Her Cell'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['her_cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Email'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['primary_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Email'); ?></dt>
		<dd>
			<?php echo h($couple['Couple']['secondary_email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Couple'), array('action' => 'edit', $couple['Couple']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Couple'), array('action' => 'delete', $couple['Couple']['id']), array(), __('Are you sure you want to delete # %s?', $couple['Couple']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Couples'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couple'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weekends'), array('controller' => 'weekends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weekend'), array('controller' => 'weekends', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Weekends'); ?></h3>
	<?php if (!empty($couple['Weekend'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($couple['Weekend'] as $weekend): ?>
		<tr>
			<td><?php echo $weekend['id']; ?></td>
			<td><?php echo $weekend['title']; ?></td>
			<td><?php echo $weekend['year']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'weekends', 'action' => 'view', $weekend['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'weekends', 'action' => 'edit', $weekend['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'weekends', 'action' => 'delete', $weekend['id']), array(), __('Are you sure you want to delete # %s?', $weekend['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Weekend'), array('controller' => 'weekends', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->

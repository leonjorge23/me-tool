<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-search"></i>Search by Team</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
    <div class="row search-widget">
        <div class=" col-md-6">
            <?php
            echo $this->Form->create();
            echo $this->Form->input('team');
            echo $this->Form->submit('Search by team', array('div' => false, 'class' => 'btn btn-info'));
            echo $this->Form->end();
            ?>    
        </div>
   
    </div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->


<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-th-list"></i>Weekend, Team & Couple Records</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
<div class="couplesWeekends index">
	<h2><?php echo __('Couples Weekends'); ?></h2>
	<table class="table table-bordered table-striped table-highlight couples-records">
	<thead>
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('couple_id'); ?></th>
			<th><?php echo $this->Paginator->sort('weekend_id'); ?></th>
			<th><?php echo $this->Paginator->sort('team'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('new'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($couplesWeekends as $couplesWeekend): ?>
	<tr>
		<!-- <td><?php echo h($couplesWeekend['CouplesWeekend']['id']); ?>&nbsp;</td> -->
		<td>
			<?php echo $this->Html->link($couplesWeekend['Couple']['his_name'], array('controller' => 'couples', 'action' => 'view', $couplesWeekend['Couple']['id'])); ?> &
                        <?php echo $this->Html->link($couplesWeekend['Couple']['her_name'], array('controller' => 'couples', 'action' => 'view', $couplesWeekend['Couple']['id'])); ?> 
                        <?php echo $this->Html->link($couplesWeekend['Couple']['last_name'], array('controller' => 'couples', 'action' => 'view', $couplesWeekend['Couple']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($couplesWeekend['Weekend']['title'], array('controller' => 'weekends', 'action' => 'view', $couplesWeekend['Weekend']['id'])); ?>
		</td>
		<td><?php echo h($couplesWeekend['CouplesWeekend']['team']); ?>&nbsp;</td>
		<td><?php echo h($couplesWeekend['CouplesWeekend']['role']); ?>&nbsp;</td>
		<td><?php echo h($couplesWeekend['CouplesWeekend']['new']); ?>&nbsp;</td>
		<td><?php echo h($couplesWeekend['CouplesWeekend']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $couplesWeekend['CouplesWeekend']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $couplesWeekend['CouplesWeekend']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $couplesWeekend['CouplesWeekend']['id']), array(), __('Are you sure you want to delete # %s?', $couplesWeekend['CouplesWeekend']['id'])); ?>
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
	<div class="pager" style="text-align: left;">
            <ul>
		<li><?php echo $this->Paginator->prev('← ' . __('prev'), array(), null, array('class' => '')); ?></li>
		<li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
		<li><?php echo $this->Paginator->next(__('next') . ' → ', array(), null, array('class' => '')); ?></li>
            <ul>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Quick Link'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Couples List '), array('controller' => 'couples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couple'), array('controller' => 'couples', 'action' => 'add')); ?> </li>
	</ul>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->

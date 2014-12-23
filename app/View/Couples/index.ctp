<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-search"></i>Search Couple</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
    <div class="row search-widget">
        <div class=" col-md-4">
            <?php
            echo $this->Form->create();
            echo $this->Form->input('his_name');
            echo $this->Form->submit('Search by his name', array('div' => false, 'class' => 'btn btn-info'));
            echo $this->Form->end();
            ?>    
        </div>
        <div class="col-md-4">
            <?php
            echo $this->Form->create();
            echo $this->Form->input('her_name');
            echo $this->Form->submit('Search by her name', array('div' => false, 'class' => 'btn btn-info'));
            echo $this->Form->end();
            ?>   
        </div>
        <div class="col-md-4">
            <?php
            echo $this->Form->create();
            echo $this->Form->input('last_name');
            echo $this->Form->submit('Search by last name', array('div' => false, 'class' => 'btn btn-info'));
            echo $this->Form->end();
            ?>   
        </div>        
    </div>
<div class="reset-link"><i class="fa fa-refresh"></i><?php echo $this->Html->link(__('Reset form »'), array('controller' => 'couples', 'action' => 'index')); ?> </div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->

<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-database"></i>Results: </h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
<div class="couples index">
	<h2><?php echo __('Couples'); ?></h2>
	<table class="table table-bordered table-striped table-highlight">
	<thead>
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('his_name'); ?></th>
			<th><?php echo $this->Paginator->sort('her_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('address'); ?></th> 
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>-->
			<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('his_cell'); ?></th>
			<th><?php echo $this->Paginator->sort('her_cell'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_email'); ?></th> 
			<!-- <th><?php echo $this->Paginator->sort('secondary_email'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($couples as $couple): ?>
	<tr>
		<!-- <td><?php echo h($couple['Couple']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($couple['Couple']['his_name']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['her_name']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['last_name']); ?>&nbsp;</td>
		<!--<td><?php echo h($couple['Couple']['address']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['city']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['state']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['zip']); ?>&nbsp;</td>-->
		<td><?php echo h($couple['Couple']['home_phone']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['his_cell']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['her_cell']); ?>&nbsp;</td>
		<td><?php echo h($couple['Couple']['primary_email']); ?>&nbsp;</td> 
		<!-- <td><?php echo h($couple['Couple']['secondary_email']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $couple['Couple']['id']), array('class' => 'btn btn-small btn-warning')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $couple['Couple']['id']), array('class' => 'btn btn-small btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $couple['Couple']['id']), array('class' => 'btn btn-small btn-info'), array(), __('Are you sure you want to delete # %s?', $couple['Couple']['id'])); ?>
                        <a href="/staging/couplesWeekends/add/<?php echo h($couple['Couple']['id']); ?>">Add Record</a>
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
            </ul>
	</div>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->

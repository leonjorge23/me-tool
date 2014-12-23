<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-plus"></i>Add Couple Record</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
<div class="row">
    <div class="col-md-7">
        <div class="couplesWeekends form">
        <?php echo $this->Form->create('CouplesWeekend'); ?>
                <fieldset>
                <?php
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
    </div>
</div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->
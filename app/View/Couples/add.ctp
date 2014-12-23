<div class="row">
<div class="col-md-12">      		
<div class="widget stacked ">
<div class="widget-header">
    <h3><i class="fa fa-plus"></i>Add Couple Profile</h3>
</div> <!-- /.widget-header -->
<div class="widget-content">
<!-- content -->
<div class="row">
    <div class="col-md-7">
        <div class="couples form">
        <?php echo $this->Form->create('Couple'); ?>
                <fieldset>
                <?php
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
                        // echo $this->Form->input('Weekend'); 
                ?>
                </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
        </div>
    </div>
<!-- end of content -->
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span12 -->
</div> <!-- /row -->
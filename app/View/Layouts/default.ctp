<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Marriage Enrichment Data Base | SPTACC</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <?php echo $this->Html->css(array('bootstrap.min.css',
                                        'bootstrap-responsive.min.css',
                                        'font-awesome.min.css',
                                        'jquery-ui-1.10.0.custom.min.css',
                                        'base-admin-3.css',
                                        'base-admin-3-responsive.css',
                                        'custom.css')) ?>
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>

    .btn {
    	margin: 0 .25em .5em;
    }

    .btn-group {
    	margin: 0 .25em .5em;
    }

    .btn-group .btn {
    	margin: 0;
    }

    </style>
  </head>

<body>

<nav class="navbar navbar-inverse" role="navigation">

  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <i class="icon-cog"></i>
    </button>
    <a class="navbar-brand" href="/staging/">St. Paul the Apostle Church | Marriage Enrichment Data Base</a>
  </div>

</div> <!-- /.container -->
</nav>
    



    
<div class="subnavbar">

  <div class="subnavbar-inner">
  
    <div class="container">
      
      <a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="icon-reorder"></i>
          
        </a>

      <div class="collapse subnav-collapse">
        <ul class="mainnav">
        
          <li id="home-tab" class="">
            <a href="/staging/">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>              
          </li>
          
          <li id="couples-tab" class="">
            <a href="/staging/couples/">
              <i class="fa fa-users"></i>
              <span>Couples</span>
            </a>      
          </li>
          <li id="add-couple-tab" class="">         
            <a href="/staging/couples/add">
              <i class="fa fa-plus"></i>
              <span>Add Couple</span>
            </a>             
          </li>
          <li id="records-tab" class="">         
            <a href="/staging/couplesWeekends/">
              <i class="fa fa-th-list"></i>
              <span>Records</span>
            </a>             
          </li>          
        </ul>
      </div> <!-- /.subnav-collapse -->

    </div> <!-- /container -->
  
  </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    

<div class="main">

    <div class="container">



		<?php echo $this->fetch('content') ?>		

    
        </div> <!-- /container -->
    
</div> <!-- /main -->
    
    
<div class="footer">
		
	<div class="container">
		
		<div class="row">
			
			<div id="footer-copyright" class="col-md-6">
				&copy; 2014-15 Chino Hills Merriage Enrichment.
			</div> <!-- /span6 -->
			
			<div id="footer-terms" class="col-md-6">
			</div> <!-- /.span6 -->
			
		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /footer -->
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo $this->Html->script(array('jquery-1.9.1.min.js', 'jquery-ui-1.10.0.custom.min.js','bootstrap.min.js', 'Application.js')) ?>

 </body>
</html>

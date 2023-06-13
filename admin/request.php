<?php 
include_once('../data/admin_session.php');//check if naay session otherwise e return sa login
include_once('../include/header.php'); ?>
<?php include_once('../include/banner.php'); 
include_once('../include/nav.php');?>

  

	<div id="right_content" >
		<div class="panel-group">
 			 <div class="panel panel-primary">

 			 	<div class="panel-heading">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
        Employee's Requests List</div>
  	  			<div class="panel-body">
              <!-- main content -->
                <div id="request-to-admin"></div>
              <!-- /main content -->
              <br />
  	  			</div>
 			 </div>
  
		</div>
	</div>

<!-- navigation menu -->
<?php require_once('side-menu.php'); ?>
<!-- navigation menu -->

<!-- load all modals here -->
<?php require_once('load_modals.php'); ?>
<!-- /load all modals here -->
  

</div>


<?php require_once('../include/footer.php'); ?>

</body>
</html>	


<!DOCTYPE html>
<html>
<head>
  <?php include 'include/header.php'; ?>
</head>

<body style="background-color:#f1f1f1">
<div class="container-fluid">
    <div class="row" style="background-color:#202020">
	    <div class="col-sm-1"></div>
		<div class="col-sm-10">
			<?php include 'include/topbar.php'; ?>
		</div>
		<div class= "col-sm-1"></div>
	</div> <! end of header>

	<div class="row" style="background-color:#343436;">
		<div class="col-sm-1"></div>
		<div class="col-sm-10" >
			<div id="mynav">
				<?php include 'include/menu.php'; ?>
			</div>
		</div>
		<div class= "col-sm-1"></div>
	</div> <! end of nav>

	<div class="row" >
		<div class="col-sm-1"></div>
		<div class="col-sm-10" ; style="margin-top:50px; margin-bottom:50px;">
			<div class="col-sm-3" style="background-color:#fff;padding-top:35px">
				<?php include 'include/sidebar.php'; ?>
			</div><! end of sidebar >

			<div class="col-sm-9"style="background-color:#fff;padding-left:50px; padding-right:50px;padding-top:15px">
				<?php include 'include/content-member.php'; ?>
			</div><! end of main content >
			
		</div>
		<div class= "col-sm-1"></div>
	</div> <! end of content with spacing>


	<div class="row"style="background-color:#31708f">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<?php include 'include/footer.php'; ?>
		</div>
		<div class= "col-sm-1"></div>
	</div> <! of footer>

</div> <! end of container>

</body>

</html>

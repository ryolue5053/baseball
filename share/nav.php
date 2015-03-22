<nav class="navbar navbar-default navbar-static-top">
	<!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
	<div class="container-fluid">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
          	</button>
			<a class="navbar-brand" href="#">球員列表</a>
		</div>

        <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
			<ul class="nav navbar-nav">
				<li class="<?= $_GET['team'] == '1' ? 'active' : '' ?>"><a href="index.php?team=1">Brothers</a></li>
				<li class="<?= $_GET['team'] == '2' ? 'active' : '' ?>"><a href="index.php?team=2">Lion</a></li>
				<li class="<?= $_GET['team']=='3' ? 'active' : '' ?>"><a href="index.php?team=3">Lamigo</a></li>
				<li class="<?= $_GET['team']=='4' ? 'active' : '' ?>"><a href="index.php?team=4">EDA</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
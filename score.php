<? include_once("class/db.php"); ?> 
<?
$sql = 'SELECT scores.* ,teams.ch_name AS team_name FROM scores JOIN teams ON teams.id = scores.team_id WHERE player_id = ' . $_GET['player_id'] . ' ORDER BY year DESC ' ;

$sth = $pdo->prepare($sql);
$sth->execute();
$rows = $sth->fetchAll(PDO::FETCH_CLASS);

$sql = 'SELECT * FROM players WHERE id = ' . $_GET['player_id']  ;

$sth = $pdo->prepare($sql);
$sth->execute();
$player = $sth->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>球員列表</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!------上面兩行: 引用BOOTSTRAP的CSS------>
	
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!------上面兩行: 放入JS------>
</head>

<body>
	
	<div class="container">
		<!------上面一行: Bootstrap常用字 將整個畫面置中----->
		<? include('share/nav.php'); ?>
		<h2><?= $player['name'] ?></h2>

		<div class="tabbable"> <!-- Only required for left/right tabs -->
	  		<ul class="nav nav-tabs">
	  	
			    <li class="active"><a href="#tab1" data-toggle="tab">打擊成績</a></li>
			    <li><a href="#tab2" data-toggle="tab">守備成績</a></li>
			    <li><a href="#tab3" data-toggle="tab">投球成績</a></li>
	 		 </ul>
 		<div class="tab-content">
    	<div class="tab-pane active" id="tab1">
    	
      <h2><?= $player['name'] ?>打擊成績</h2>
		<table class="table table-striped">
			<thead>
				<tr>
				<td>YEAR</td>
				<td>TEAM</td>
				<td>HR</td>
				<td>H</td>
				<td>AVG</td>
				</tr>
			</thead>
			
			
			<tbody>
				<? foreach ($rows as $row) { ?>
				<tr>
					<td><?= $row->year ?></td>
					<td><?= $row->team_name ?></td>
					<td><?= $row->hr ?></td>
					<td><?= $row->h ?></td>	
					<td><?= $row->avg ?></td>	
				
				</tr>
				<? } ?>
				
			</tbody>
		</table>
    </div>
    <div class="tab-pane" id="tab2">
      <h2><?= $player['name'] ?>守備成績</h2>
		<table class="table table-striped">
			<thead>
				<tr>
				<td>YEAR</td>
				<td>TEAM</td>
				<td>TC</td>
				<td>E</td>
				<td>FPCT</td>
				</tr>
			</thead>
			
			
			<tbody>
				<? foreach ($rows as $row) { ?>
				<tr>
					<td><?= $row->year ?></td>
					<td><?= $row->team_name ?></td>
					<td><?= $row->TC ?></td>
					<td><?= $row->E ?></td>	
					<td><?= $row->FPCT ?></td>	
				
				</tr>
				<? } ?>
				
			</tbody>
		</table>
    </div>
    
    <div class="tab-pane" id="tab3">
      <h2><?= $player['name'] ?>投球成績</h2>
		<table class="table table-striped">
			<thead>
				<tr>
				<td>YEAR</td>
				<td>TEAM</td>
				<td>IP</td>
				<td>WHIP</td>
				<td>ERA</td>
				</tr>
			</thead>
			
			
			<tbody>
				<? foreach ($rows as $row) { ?>
				<tr>
					<td><?= $row->year ?></td>
					<td><?= $row->team_name ?></td>
					<td><?= $row->IP ?></td>
					<td><?= $row->WHIP ?></td>	
					<td><?= $row->ERA ?></td>	
				
				</tr>
				<? } ?>
				
			</tbody>
		</table>
    </div>
  </div>
</div>

		
</div>
	
</body>
</html>
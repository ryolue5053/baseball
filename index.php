<? include_once("class/db.php"); ?> 
<?
$order = isset($_GET['order']) ? $_GET['order'] : 'teams.id';
$asc = isset($_GET['asc']) ? (boolean)$_GET['asc'] : true; 
$team= isset($_GET['team']) ? $_GET['team'] : '1';
$sql = 'SELECT players.*,teams.ch_name  
		FROM players 
		JOIN teams ON teams.id=players.team_id 
		AND players.team_id= "'. $team . 
		'" ORDER BY '. $order . ' ' . ($asc ?'asc' : 'desc');
$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute();
$rows = $sth->fetchAll(PDO::FETCH_CLASS);

$kindEnum = require 'enums/kind.php';
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
		
		<a href="player_add.php?team=<?= $_GET['team'] ?>" class="btn btn-primary">新增</a>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>名字</th>
					<th><a href="index.php?team=<?=$team ?>&order=number&asc=<?= $asc ? 0 : 1 ?>">背號</a></th>
					<th>球隊</th>
					<th>種類</th>
					<th><a href="index.php?team=<?=$team ?>&order=position&asc=<?= $asc ? 0 : 1 ?>">位置</a></th>
					<th><a href="index.php?team=<?=$team ?>&order=active&asc=<?= $asc ? 0 : 1 ?>">現役/退役</a></th>
				</tr>
			</thead>
			
			
			<tbody>
				<? foreach ($rows as $row) { ?>
				<tr>
					<td><a href="score.php?player_id=<?= $row->id ?>"><?= $row->name ?></a></td>
					<td><?= $row->number ?></td>
					<td><?= $row->ch_name ?></td>
					<td><?=$kindEnum[$row->kind]?></td>	
					<td><?= $row->position ?></td>	
					<td><?= ($row->active ?'現役' : '退役');?></td>	
				</tr>
				<? } ?>
				
			</tbody>
		</table>
	</div>
	
</body>
</html>
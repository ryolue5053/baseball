<? include_once("class/db.php"); ?> 
<?
$order = isset($_GET['order']) ? $_GET['order'] : 'id';
$asc = isset($_GET['asc']) ? (boolean)$_GET['asc'] : true; 
$sql = 'SELECT * FROM players ORDER BY '. $order . ' ' . ($asc ?'asc' : 'desc');
$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute();
$rows = $sth->fetchAll(PDO::FETCH_CLASS);
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
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>名字</th>
					<th><a href="index.php?order=number&asc=<?= $asc ? 0 : 1 ?>">背號</a></th>
					<th>球隊</th>
					<th>種類</th>
					<th><a href="index.php?order=position&asc=<?= $asc ? 0 : 1 ?>">位置</a></th>
					<th><a href="index.php?order=active&asc=<?= $asc ? 0 : 1 ?>">現役/退役</a></th>
				</tr>
			</thead>
			
			<tbody>
				<? foreach ($rows as $row) { ?>
				<tr>
					<td><?= $row->name ?></td>
					<td><?= $row->number ?></td>
					<td><?= $row->team ?></td>
					<td><?= $row->kind ?></td>	
					<td><?= $row->position ?></td>	
					<td><?= $row->active ?></td>	
				</tr>
				<? } ?>
				
			</tbody>
		</table>
	</div>
	
</body>
</html>
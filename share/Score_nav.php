<?
$sql = "SELECT * FROM score";
$sth = $pdo->prepare($sql);
$sth->execute();
$navs = $sth->fetchAll(PDO::FETCH_CLASS);

?>






<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">打擊成績</a></li>
  <li role="presentation"><a href="#">守備成績</a></li>
  <li role="presentation"><a href="#">投球成績</a></li>
</ul>

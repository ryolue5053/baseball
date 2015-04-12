<? include_once("class/db.php"); ?> 
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
		<form class="form-horizontal">
			<input name="team_id" type="hidden" value="<?= (int)$_GET['team'] ?>" />
			
			<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">儲存</button>
		        <a type="submit" class="btn btn-default" href="index.php?team=<?= $_GET['team'] ?>">回上一頁</a>
		    </div>
		  </div>
	
			
		  <div class="form-group">
		    <label class="col-sm-2 control-label">姓名</label>
		    <div class="col-sm-10">
		    	<input type="text" name="name" id="name" class="form-control" />
		    </div>
		  </div>
		  
	 <div class="form-group">
		    <label class="col-sm-2 control-label">背號</label>
		    <div class="col-sm-10">
		    	<input type="text" name="number" id="number" class="form-control" />
		    </div>
		  </div>
		  
		   <div class="form-group">
		    <label class="col-sm-2 control-label">種類</label>
		    <div class="col-sm-10">
		    	<select name="kind" id="kind" class="form-control">
		    		<option value="1">投手</option>
		    		<option value="2">內野手</option>
		    		<option value="3">外野手</option>
		    		<option value="4">捕手</option>
		    	</select>
		    </div>
		  </div>
		  
		   <div class="form-group">
		    <label class="col-sm-2 control-label">位置</label>
		    <div class="col-sm-10">
		    <select name="position" id="position" class="form-control">
		    	
		    	
		    </select>
		    </div>
		  </div>
		  
		   <div class="form-group">
		    <label class="col-sm-2 control-label">現役/退役</label>
		    <div class="col-sm-10">
		    	<label class="radio-inline">
				  <input type="radio" name="active"  value="0"> 退役
				</label>
				<label class="radio-inline">
				  <input type="radio" name="active" value="1"> 現役
				</label>
		    	
		    </div>
		  </div>
		  
		  
		</form>	
	</div>
		
<script type="text/javascript">
$(function(){
var positionJson = {
        1: ['SP', 'RP', 'CP'],
        2: ['1B', '2B', 'SS', '3B'],
        3: ['LF', 'CF', 'RF'],
        4: ['C']
    };

    $("#kind").change(function(){

        var value = $(this).val();
        $("#position").empty();

        $.each(positionJson[value], function(i, val){
            $("#position").append('<option value="' + val + '">' + val + '</option>');
        });
    }).change();
});
</script>
	
</body>
</html>
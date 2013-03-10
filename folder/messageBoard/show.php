<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	$pdo=new PDO("mysql:dbname=test;host=localhost");
	$message=!empty($_POST['content'])?$_POST['content']:NULL;
	$result1=$pdo->query("insert into message(content) values('$message')");
	//if($result1->rowCount()>0){echo "成功留言";}else{echo "未成功留言";}
	$reslut2=$pdo->query("select * from message");
	$row=$reslut2->fetch();
	while(!empty($row)){
		echo $row["ID"]."&nbsp;&nbsp;".$row["content"]."<br/>\n";
		$row=$reslut2->fetch();
	}
	$dbh=NULL;
?>
</body>
</html>
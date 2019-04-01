<? phpinfo(); ?>

<?php echo 'Hello World' ?>
<br />

<?php 
	//タイムゾーンを東京にセット
	date_default_timezone_set('Asia/Tokyo');
	
	//現在時刻の取得
	echo date("Y/m/d - M (D) H:i:s"); 
?>
<br />
<?php // MAMPのPHPバージョン確認 ?>
<?php echo phpversion(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登山部</title>






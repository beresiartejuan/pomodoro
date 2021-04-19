<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo nameapp ?> | <?=$this->e($title)?></title>
	<link rel="stylesheet" href="<?php echo link; ?>/public/css/main.css">
	<link rel="stylesheet" href="<?php echo link; ?>/public/css/login.css">
</head>
<body>

<?php if(Session::exists('user_id')):?>
	<?=$this->insert('assets/svgs')?>
<?php endif?>

<?=$this->section('content')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
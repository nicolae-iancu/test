<!DOCTYPE html>
<?php include_once('includes/init.php');?>
<html>
	<head>
		<title>New one yeah!</title>
	</head>
	<body>
	<?php $manager	= new Manager('Agentu007');
				$team 		= new Team('Bagabontzii');
				var_dump($team);
				var_dump($manager);
	?>

	<?php $player = new Player('Bas', 'Beekhuis', 32);?>
	<?php $player2 = new Player('Leon', 'Magerl', 31);?>



	<p>Team name: <?php echo $team->team_name; ?>
	<p>Player name: <?php echo $player->first_name; ?>
	<?php 	echo $player->last_name; ?></p>
	<p>Age:<?php 	echo $player->age; ?></p>
	<p>Player name: <?php echo $player2->first_name; ?>
	<?php 	echo $player2->last_name; ?></p>
	<p>Age:<?php 	echo $player2->age; ?></p>



	</body>
</html>

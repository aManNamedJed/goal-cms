<div class="container">
	<div class="row">

		<?php include 'partials/add_goal_form.php' ?>
		
		<div class="col-md-6">
			<h2 style="color: #449DD9" class="text-center"><?php echo $message; ?></h2>	
		
			
			<?php 
					
				$Goals = Goal::get_all_goals();

				while ( $Goal = $Goals->fetchObject() ):
				
					if( $Goal->completed && $Goal->creator == $_SESSION['Email'] ):
						$goal_classes = 'goal-complete';
					else:
						$goal_classes = 'goal-incomplete';
					endif;

					include '../App/Views/goal_card.php';	

				endwhile;

			?>
		</div>
	</div>
</div>
<?php use_stylesheet("reservation.css") ?>

<?php include_component("reservation","insideMenu",array("param" => $param)) ?>

<h2>Validation de la reservation</h2>
	
<p><?php echo link_to ('<< retour', 'reservation_reservations') ?></p>


	<p><b>User</b> : <?php echo $reservation->getIdUserReserve() ?></p>
	<p><b>Asso</b> : <?php echo $reservation->getAsso() ?></p>
	<p><b>Salle</b> : <?php echo $reservation->getSalle() ?></p>
	<p><b>Date</b> : <?php echo $reservation->getDate() ?></p>	



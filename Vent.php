<?php

	//Connection a la BDD + requete avec test pour traiter les potentielles erreurs
	$conn = mysqli_connect("localhost", "root", "", "juillet-2019");
	if (!mysqli_query($conn,"SELECT AVG(Vitesse_vent) FROM `meteo` ORDERBY WHERE `Date` LIKE '%T11%' GROUP BY `Date`"))
	{
	  echo("Error description: " . mysqli_error($conn));
	}
	$result = mysqli_query($conn, "SELECT AVG(Vitesse_vent) FROM `meteo` ORDERBY WHERE `Date` LIKE '%T11%' GROUP BY `Date`");
	$data = array();
	while ($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
	}

	echo json_encode($data);

	

?>
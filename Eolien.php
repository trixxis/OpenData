<?php

	//Connection a la BDD + requete avec test pour traiter les potentielles erreurs
	$conn = mysqli_connect("localhost", "root", "", "juillet-2019");
	if (!mysqli_query($conn,"SELECT Production_eolienne FROM `enedis` ORDERBY WHERE Horodate LIKE '%11:00%'"))
	{
	  echo("Error description: " . mysqli_error($conn));
	}
	$result = mysqli_query($conn, "SELECT Production_eolienne FROM `enedis` ORDERBY WHERE Horodate LIKE '%11:00%'");
	$data = array();
	while ($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
	}

	echo json_encode($data);
	

?>
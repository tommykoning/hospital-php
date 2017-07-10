<?php

function getSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE spiecies_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function deleteSpecies($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function editClient() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($gender) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname, client_gender = :gender WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':gender' => $gender,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteClient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createSpecies() 
{
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	
	if (strlen($species_description) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_description) VALUES (:species_description )";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_description' => $species_description,));

	$db = null;
	
	return true;
}

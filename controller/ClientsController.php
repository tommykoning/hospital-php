<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create()
{
	render("clients/create");
}

function createSave()
{
	if (!createclient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "clients/index");
}

function edit($id)
{
	render("clients/edit", array(
		'client' => getclient($id)
	));
}

function editSave()
{
	if (!editclient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "clients/index");
} 

function delete($id)
{
	if (!deleteclient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "clients/index");
}

<?php
require 'db.php';

require 'partials/menu.php';

if(isset($_SESSION["user"]))
{
	//Est conecte
}
else
{
	if(!isset($_GET["page"]))
	{
		require 'accueil.php';
	}
	else if($_GET["page"] == "login")
	{
		require 'login.php';
	}
	else if($_GET["page"] == "register")
	{
		require 'register.php';
	}
}


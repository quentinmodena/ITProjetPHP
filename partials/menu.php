
<?php


if(!isset($_SESSION["user"]))
{
	echo "<ul>
	<li><a href='?page=login'>Se connecter</a></li>
	<li><a href='?page=register'>S'inscrire</a></li>	
	</ul>";
}
else
{
	echo "<ul>
	<li><a href='?page=profile'>Profile</a></li>
	<li><a href='?page=disconnect'>Se déconnecter</a></li>	
	</ul>";
}
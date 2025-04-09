<?php
function check_login()
{ 
	if(isset($_SESSION['login']) && $_SESSION['login'] != '')
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>
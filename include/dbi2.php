<?
    /******************************************************************************
     *
     * dbi.php
     *
     * Configuration file
     *
     * Created : 2014
     *
     ******************************************************************************/
//	$my_db = new mysqli("localhost", "root", "root", "ohuimall");	
	//$my_db = new mysqli("localhost", "root", "m!nv#Rtisin9", "ohuimall");
	$my_db = mysqli_connect("localhost", "root", "m!nv#Rtisin9", "belifbomb");
	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
?>

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
	//$my_db = new mysqli("localhost", "root", "m!nv#Rtisin9", "vdl_metal");
	$my_db = new mysqli("10.3.0.121", "root", "m!nv#Rtisin9", "vdl_metal");
	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
?>

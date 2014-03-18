<?php // php has to be called at least once
include_once ("Factory.php");
?>
<script>

	 
// Create an instance of our factory that makes cars
	var carFactory = new Factory();
	var car = carFactory.createVehicle({
		vehicleType : "car",
		color : "yellow",
		doors : 6
	});
	
	
	// Test to confirm our car was created using the vehicleClass/prototype Car
	alert("YOYOYOYOY car :" + car.doors + ":" + car.state + ":" + car.color);
</script>
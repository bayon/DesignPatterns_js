<?php // php has to be called at least once
include_once ("Types.php");
?>
<script>
	/*Approach #1: Modify a VehicleFactory instance to use the Truck class*/
	var movingTruck = carFactory.createVehicle({
		vehicleType : "truck",
		state : "like new",
		color : "red",
		wheelSize : "small"
	});
	// Test to confirm our truck was created with the vehicleClass/prototype Truck
	// Outputs: true
	console.log( movingTruck instanceof Truck);
	alert(movingTruck.vehicleType + ":" + movingTruck.state + ":" + movingTruck.color + ":" + movingTruck.wheelSize);
	// Outputs: Truck object of color "red", a "like new" state
	// and a "small" wheelSize
	console.log(movingTruck);
	alert(movingTruck.vehicleType + ":" + movingTruck.state + ":" + movingTruck.color + ":" + movingTruck.wheelSize);
</script>
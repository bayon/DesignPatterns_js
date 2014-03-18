<?php // php has to be called at least once
include_once ("Factory.php");
?>
<script>
	/*Approach #2: Subclass Factory to create a factory class that builds Trucks*/
	function TruckFactory() {
	}

	TruckFactory.prototype = new Factory();
	TruckFactory.prototype.vehicleClass = Truck;

	var truckFactory = new TruckFactory();
	var myBigTruck = truckFactory.createVehicle({
		vehicleType : "truck",
		state : "hunk of junk",
		color : "pink",
		wheelSize : "4ft diameter 2ft wide"
	});

	//  verify
	
	alert(myBigTruck.vehicleType + ":" + myBigTruck.state + ":" + myBigTruck.color + ":" + myBigTruck.wheelSize);

	
</script>
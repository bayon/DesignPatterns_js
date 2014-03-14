
<?php  // php has to be called at least once 
include_once("Types.php");
?>
<script>
	/*Approach #2: Subclass VehicleFactory to create a factory class that builds Trucks*/
	function TruckFactory () {}
TruckFactory.prototype = new VehicleFactory();
TruckFactory.prototype.vehicleClass = Truck;
 
var truckFactory = new TruckFactory();
var myBigTruck = truckFactory.createVehicle( {
                    state: "omg..so bad.",
                    color: "pink",
                    wheelSize: "so big" } );
 
// Confirms that myBigTruck was created with the prototype Truck
// Outputs: true
console.log( myBigTruck instanceof Truck );
 alert(myBigTruck.vehicleType + ":" + myBigTruck.state + ":" + myBigTruck.color + ":"+ myBigTruck.wheelSize);

// Outputs: Truck object with the color "pink", wheelSize "so big"
// and state "omg. so bad"
console.log( myBigTruck );
alert(myBigTruck.vehicleType + ":" + myBigTruck.state + ":" + myBigTruck.color + ":"+ myBigTruck.wheelSize);

</script>
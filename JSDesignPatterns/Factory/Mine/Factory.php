<?php  // php has to be called at least once ?>
<script>
// Define a skeleton  factory
	function Factory() {
	
	}
	// < FACTORY PRODUCTS >
	// A constructor for defining new cars
	function Car(options) {

		// some defaults
		this.doors = options.doors || 4;
		this.state = options.state || "brand new";
		this.color = options.color || "silver";

	}
	
	// A constructor for defining new trucks
	function Truck(options) {
		this.vehicleType = "truck";
		this.state = options.state || "used";
		this.wheelSize = options.wheelSize || "large";
		this.color = options.color || "blue";
	}
	
	// </ FACTORY PRODUCTS >
	
	
	// Our default vehicleClass is Car
	Factory.prototype.vehicleClass = Car;
	
	// Our Factory method for creating new Vehicle instances
	Factory.prototype.createVehicle = function(options) {

		if (options.vehicleType === "car") {
			this.vehicleClass = Car;
		} else {
			this.vehicleClass = Truck;
		}

		return new this.vehicleClass(options);

	};
	
	 
	
</script>


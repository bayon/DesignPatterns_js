<?php  // php has to be called at least once ?>
<script>
alert("module simulates encapsulation by function scope.");
var testModule = (function (){
	var counter = 0;
	
	return{
		incrementCounter: function(){
		return counter++;
		},
		resetCounter: function(){
			console.log("counter value prior to reset: "+counter);
		}
	};

})();
</script>
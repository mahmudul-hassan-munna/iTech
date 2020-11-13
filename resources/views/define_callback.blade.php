<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



</body>
	<script type="text/javascript">
		var data = {email:'trump@gmail.com', age:70}; // input json.


        // console.log(data);
        // let checkAge = checkAge(function(data){
        //     console.log('Email is valid'); // If data.age < 18 it'll log as not valid.
        // });
        //
        // checkAge();

        // let numbers = [1, 2, 4, 7, 3, 5, 6];

        // let oddNumbers = numbers.filter(function(number) {
        //     return number % 2;
        // });
        // console.log(oddNumbers);

        // let checkAge;

        // let age = checkAge(data, function(email){
        //     console.log('Email is valid'); // If data.age < 18 it'll log as not valid.
        // })

        // console.log(age);



  //       function greeting(name) {
		//   alert('Hello ' + name);
		// }

		// function processUserInput(callback) {
		//   var name = prompt('Please enter your name.');
		//   callback(name);
		// }

		// processUserInput(greeting);



        // function age(checkAge){
        //     checkAge(data, function(email){
        //         console.log('Email is valid'). // If data.age < 18 it'll log as not valid.
        //     })
        // }

        // age();


        function functionOne(checkAge) { 
        	checkAge(data, function(email){
                console.log('Email is valid'); // If data.age < 18 it'll log as not valid.
            }) 
    	};

		function functionTwo(checkAge) {
		    // some code
		    checkAge(checkAge);
		}

		functionTwo(functionOne);



        //
        //
        // let oddNumbers = numbers.filter(function(number) {
        //     return number % 2;
        // });
        // console.log(oddNumbers);


	</script>

</html>

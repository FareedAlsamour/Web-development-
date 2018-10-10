var x = []
for (var n = 0; n <= 135; n++){
	if ((n % 3 == 0) || (n % 5 == 0)){
		if ((n % 3 == 0) && (n % 5 !== 0)){
			x.push("Fizz")
		}
		if ((n % 3 !== 0) && (n % 5 == 0)){
			x.push("Buzz")
		}
		else if ((n % 3 == 0) && (n % 5 == 0))
			x.push("FizzBuzz")
	}
	else 
		x.push(n)
};
	
console.log(x);
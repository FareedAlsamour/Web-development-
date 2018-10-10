var a = [1,-2,4,1];
var b = []

for (var i = 0; i < a.length; i++){
	var t = a[i]
	if (t >= 0){
		b.push(a[i])
	}
}
console.log(b);
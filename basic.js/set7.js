var n = [1,-4,0,-1]
var l = n.length;
var d = []

function turning(n) {
	return "Turning";
}

for (var i = 0; i < l; i++){
	if (n[i] < 0){
		d.push(turning(n[i]))
		}
	else {
		d.push(n[i]);
	}
}
console.log(d);


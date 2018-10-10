var n = [2,-1,4,-3]
var a = []
for (var i = 0; i < n.length;i++){
	if (n[i] < 0){
	n[i] = 0;
	a.push(n[i]);
	}
	else {
		a.push(n[i]);
	};
};
console.log(a);

var y = 1;
var x = 0;
var m = Math.pow(10, 6);

console.log(x)
console.log(y)

for(x = 1; x + y < m; x++){
  x--;
  
  if (x < y){
  x += y;
	if (x < m){
	console.log(x)
	}
  }
  
  if (y <= x){
  y += x
	if (y < m){
	console.log(y)
	}
}
}
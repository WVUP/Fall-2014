@@ -4,10 +4,42 @@ var arr = ['Aaron', 'Pepper', 'Chris'];
// arr.splice(startIndex, howMany)
// arr.pop()


function accessGlobal () {
	var k = arr;
	console.log(k);
}

function testScope () {
	// internal local variable arr, which is NOT the same
	// as the global arr variable on line 1
	var arr = [1, 2, 3];
	console.log(arr);
	
	//window.arr = window.arr.concat(arr);
	window.arr = arr;
	console.log(window.arr);
}

var contact = {
	firstName: 'Aaron',
	lastName: 'Freeland',
	email: 'afreeland@gmail.com',
	languages: [
		{
			name: 'C#',
			label: 'C Sharp'
		},
		{
			name: 'JS',
			label: 'JavaScript'
		}
	],
	drinks: {
		pepsi: ['Mtn. Dew', 'Voltage'],
		coke: ['Dr.Pepper'],
		'dr pepper': ['cherry', 'vanilla']
	},

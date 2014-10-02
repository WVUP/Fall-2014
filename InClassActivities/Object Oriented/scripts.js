var arr = ['Aaron', 'Pepper', 'Chris'];
// Common available methods
// arr.push(obj)
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
	alert: function () {
		var combined = this.firstName + ' ' + this.lastName;
		console.log(combined);
		alert(combined);
	}
};

/**
 * This function does this that and the other
 * @param  {obj} obj is a contact
 * @return {}     
 */
function customAlert(obj){
	var _combined = obj.firstName + ' ' + obj.lastName;
	alert(_combined);
}


function Contact (fName, lName, age) {
	this.firstName = fName;
	this.lastName = lName;
	this.age = age || null;

	var combined = this.firstName + ' ' + this.lastName;
	this.fullName = combined;
}

Contact.prototype.alert = function () {
	alert(this.fullName);
};
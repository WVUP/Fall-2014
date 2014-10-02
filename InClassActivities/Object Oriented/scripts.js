var arr = ['Aaron', 'Pepper', 'Chris'];
// Common available methods
// arr.push(obj)
// arr.splice(startIndex, howMany)
// arr.pop()

var contact = {
	firstName: 'Aaron',
	lastName: 'Freeland',
	email: 'afreeland@gmail.com',
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


function Contact (fName, lName) {
	this.firstName = fName;
	this.lastName = lName;

	var combined = this.firstName + ' ' + this.lastName;
	this.fullName = combined;
}
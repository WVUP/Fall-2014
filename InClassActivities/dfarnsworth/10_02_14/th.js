var arr = ['Aaron', 'Pepper', 'Chris'];

var contact = {
	firstName: 'Aaron',
	LastName: 'Freeland',
	email: '@',
	alert: function () {
		alert(this.firstName);
	}
};

function customAlert(obj){
	var _combined = obj.firstName + ' ' + obj.lastName;
	alert(_combined_);
}

function Contact (fName, lName) {
	this.fistName = fName;
	this.lastName = lName;

	var combined = this.firstName + ' ' + this.lastName;
	this.fullName = combined;
}

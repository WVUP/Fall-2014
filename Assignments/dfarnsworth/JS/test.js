var fullName = '';

//Creates a variable to store user input
function _Create() {
	var createName = document.getElementById('_create').value;
	fullName = createName;
	_update();

//Updates user profile with stored input
function _update() {
	var updateName = document.getElementById("insert_profile_name");
	updateName.innerHTML = fullName;
};

};

//Deletes input from user profile
function _delete() {
	var deleteName = document.getElementById('insert_profile_name');
	fullName = 'Good riddance...';
	deleteName.innerHTML = fullName;

}
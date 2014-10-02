var fullName = '';

function _update() {
	var updateName = document.getElementById('_create').value;
	fullName = updateName;
	insert();

function insert() {
	var createName = document.getElementById("insert_profile_name");
	createName.innerHTML = fullName;
};

};

function _delete() {
	var deleteName = document.getElementById('insert_profile_name');
	fullName = 'Good riddance...';
	deleteName.innerHTML = fullName;

}
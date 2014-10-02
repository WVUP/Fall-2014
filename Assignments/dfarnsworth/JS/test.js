var fullName = '';

function insert() {
	var _createName = document.getElementById("insert_profile_name");
	var profileName = '';
	profileName += '<br />' + fullName;
	_createName.innerHTML = profileName;
};

function _update() {
	var updateName = document.getElementById('_create');
	fullName.push(updateName);
	insert();
};

function _delete() {
	var deleteName = document.getElementById('_create');
	fullName.push('');
}
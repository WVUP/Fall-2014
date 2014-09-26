var contacts = [

	{
		firstName: 'Dustin',
		lastName: 'Farnsworth',
		email: 'dfarnswo@gmail.com',
		age: 33
	},
		
	{
		firstName: 'D',
		lastName: 'F',
		email: 'df@gmail.com',
		age: 31
	},

	{
		firstName: 'Du',
		lastName: 'Fa',
		email: 'dfa@gmail.com',
		age: 'unknown??'
	},
		
	{
		firstName: 'Dus',
		lastName: 'Far',
		email: 'dfar@gmail.com',
		age: '31'
	}


];


function init () {
	var _body = document.getElementById('InjectHere');
	var html = ' ';

	for (var i = 0; i < contacts.length; i++) {
		html += '<tr>';

		html += '<td>' + contacts[i].firstName + '</td>';
		html += '<td>' + contacts[i].lastName + '</td>';
		html += '<td>' + contacts[i].email + '</td>';
		html += '<td>' + contacts[i].age + '</td>';

		html += '</tr>';
	}
	_body.innerHTML = html;
}

function add () {
	var _input = document.getElementById('myInput')
	var _value = _input.value;
	var SplitValue = value.split(',');
	var newContact = {
		firstName: SplitValue[0],
		lastName: SplitValue[1],
		email: SplitValue[2],
		age: SplitValue[3]
	};

	contcts.push(newContact);

	init();
}
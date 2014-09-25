var contacts = [

	{
		firstName: 'Aaron',
		lastName: 'Freeland',
		email: 'afreeland@nchannel.com',
		age: 28
	},
	{
		firstName: 'Josh',
		lastName: 'Pepper',
		email: 'jpepper@nchannel.com',
		age: 26
	},
	{
		firstName: 'Chris',
		lastName: 'Brown',
		email: 'cbrown@nchannel.com',
		age: 'unknown??'
	},
	{
		firstName: 'Jon',
		lastName: 'Stalnaker',
		email: 'jstalnaker@nchanne.com',
		age: '35'
	}
];


function init () {
	var _body = document.getElementById('InjectHere');
	var html = '';

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
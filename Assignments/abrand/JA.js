var contacts = [
	{
		firstName: 'Austin',
		lastName: 'Brand',
		email: 'abrand@wvup.edu',
		age: 19
	};

function init () {
	var _body = document.getElementById('InjectHere');
	console.log(_body);
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

function add () {
	var _input = document.getElementById('myInput')
	var _value = _input.value;
	var SplitValue = _value.split(',');

	var newContact = {
		firstName: SplitValue[0],
		lastName: SplitValue[1],
		email: SplitValue[2],
		age: SplitValue[3]
	};

	contacts.push(newContact);

	init();
}

type:"x,y"
{
	Draggable.create("#knob", {type: "rotation", throwProps: true});
}

type
{
	draggable.create
}

Draggable.create(".box", {type:"x,y", edgeResistance:0.65, bounds:"#container", throwProps:true});
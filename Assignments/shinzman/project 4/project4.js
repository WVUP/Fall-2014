function grey() {

    var oldlink = document.getElementsByTagName("link").item(0);

    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", "style1.css");
 
    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}
  
function green() {

    var oldlink = document.getElementsByTagName("link").item(0)

    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", "style2.css");
 
    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}
function red() {
 
    var oldlink = document.getElementsByTagName("link").item(0);
 
    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", "style3.css");
 
    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}

var contacts = [
    {
        firstName:"Shane",
        lastName:"Hinzman",
        address:"Sfhinzman@gmail.com",
        city: "Palestine",
        state: 'WV'
    }
];

function init() {
    var _body = document.getElementById("InjectHere");
    var html = "";

    for (var i = 0; i < contacts.length; i++) {
        html += '<tr>';

        html += '<td>' + contacts[i].firstName + '</td>';
        html += '<td>' + contacts[i].lastName + '</td>';
        html += '<td>' + contacts[i].address + '</td>';
        html += '<td>' + contacts[i].city + '</td>';
        html += '<td>' + contacts[i].state + '</td>';

        html += '</tr>';    
    }

    _body.innerHTML = html;
}

function add (e) {
   // e.preventDefault();
    var fName = document.getElementById("First").value;
    var lName = document.getElementById("Last").value;
    var addr = document.getElementById("Address").value;
    var cit = document.getElementById("City").value;
    var sta = document.getElementById("State").value;
    var newContact={
        firstName: fName,
        lastName: lName,
        Address: addr,
        city: cit,
        state: sta,
    };

    contacts.push(newContact);
    init();
    }

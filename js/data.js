/*
	Autor: Felipe Nunes
	Data: 12/07/2016
*/

window.onload = function () {
	getAno();
}

function getAno() {
	var data = new Date();
	ano = data.getFullYear();
	var p = document.getElementById('ano');
	p.innerHTML = "Copyright &copy; Siga-me Sistemas 2015 - "+ano;
}
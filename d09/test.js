/* stuff with the browser */

// alert('test');


// alert('toto');
// console.log('writing stuffff');

// var test;
// test = 42;
// console.debug(test);
// function myFunction() {}

// var array = new Array('tomato', 'salad', 'potato');
// for (element in array) {
//   array[element];
// }



// var myElement = document.getElementById('lga');
// myElement.getAttribute('id'); ==> 'lga'

// var newElement = document.createelement('span');
// newElement.setAttribute('style', 'background: red;');
// newElement.innerHTML('hello world'); ==> nope

// var_text = document.createTextNode('hello world');
// newElement.innerHTML(var_text); ==> nope
// newElement.appendChild(var_text);

// myElement.appendChild(newElement);
// myElement.removeChild(newElement);



/* jQuery */

$(document).ready(function() {
	$('$balloon').click(function() {
		$.get('test.php', function(data, status) {
			alert("Data: " + data + "\nStatus: " + status);
		}
	}
}
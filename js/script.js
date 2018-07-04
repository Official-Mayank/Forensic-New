function loadSearchResult() {
	var query = document.getElementById("search-input").value;
	console.log(query);
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("search-result").innerHTML = this.responseText;
		}
	};

	xhr.open("GET", "search.php?query=" + query, true);
	xhr.send();
}

function userSearch(email) {
	console.log(email);
	var xhr2 = new XMLHttpRequest();
	xhr2.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			console.log(document.getElementById(email).nextSibling)
			document.getElementById(email).innerHTML = this.responseText;
		}
	};

	xhr2.open("GET", "php/usersearch.php?email=" + email, true);
	xhr2.send();
}
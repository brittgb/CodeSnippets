window.onload = initAll;
var xhr = false;
var GroceryArray = new Array();

function initAll() {
	document.getElementById("searchField").onkeyup = searchSuggest;

	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	}
	else {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) { }
		}
	}

	if (xhr) {
		xhr.onreadystatechange = setGroceryArray;
		xhr.open("GET", "groceries.xml", true);
		xhr.send(null);
	}
	else {
		alert("Sorry, but I couldn't create an XMLHttpRequest");
	}
}

function setGroceryArray() {
	if (xhr.readyState == 4) {
		if (xhr.status == 200) {
			if (xhr.responseXML) {
				var allGroceries = xhr.responseXML.getElementsByTagName("item");
				for (var i=0; i<allGroceries.length; i++) {
					GroceryArray[i] = allGroceries[i].getElementsByTagName("label")[0].firstChild;
				}
			}
		}
		else {
			alert("There was a problem with the request " + xhr.status);
		}
	}
}

function searchSuggest() {
	var str = document.getElementById("searchField").value;
	document.getElementById("searchField").className = "";
	if (str != "") {
		document.getElementById("popups").innerHTML = "";
	
		for (var i=0; i<GroceryArray.length; i++) {
			var thisItem = GroceryArray[i].nodeValue;
	
			if (thisItem.toLowerCase().indexOf(str.toLowerCase()) == 0) {
				var tempDiv = document.createElement("div");
				tempDiv.innerHTML = thisItem;
				tempDiv.onclick = makeChoice;
				tempDiv.className = "suggestions";
				document.getElementById("popups").appendChild(tempDiv);
			}
		}
		var foundCt = document.getElementById("popups").childNodes.length;
		if (foundCt == 0) {
			document.getElementById("searchField").className = "error";
		}
		if (foundCt == 1) {
			document.getElementById("searchField").value = document.getElementById("popups").firstChild.innerHTML;
			document.getElementById("popups").innerHTML = "";
		}
	}
}

function makeChoice(evt) {
	var thisDiv = (evt) ? evt.target : window.event.srcElement;
	document.getElementById("searchField").value = thisDiv.innerHTML;
	document.getElementById("popups").innerHTML = "";
}
	var myImages = [	
		["images/p1.jpg", "A Park in London"], 
		["images/p2.jpg", "Dad and I at Mt. Rainier"], 
		["images/p3.jpg", "bridesmaids"], 
		["images/p4.jpg", "Family Photo"], 
		["images/p5.jpg", "Rope Swing"], 
		["images/p6.jpg", "Mom and I"] ];
					
	var imageNum = -1;
	
	window.onload = startPage;
	
	function startPage() {
	
	
		// preLoad all of the images to the cache 
		// by updating the array element to be an 
		// actual Image object instance
		var imgURL;
		for (i in myImages) { 
			imgURL = myImages[i][0];
			myImages[i][0] = new Image; 
			myImages[i][0].src=imgURL; 
		}
	
		// tell the browser to call the advanceImage() function
		// now and then every 4000 milliseconds (4 sec) after
		advanceImage();
		window.setInterval("advanceImage()", 2500);

	}
	
	function advanceImage() {
			
			imageNum = (++imageNum)%(myImages.length);
			document.getElementById("imageobj").src = myImages[imageNum][0].src;
			document.getElementById("caption").innerHTML = myImages[imageNum][1];
			
	}


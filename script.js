function handleSubmit(){
		
			var upnote = document.getElementById("upnote").value;
		 var footnote = document.getElementById("footnote").value; 
		alert(footnote);
			localStorage.setItem('upnote',upnote);
		 localStorage.setItem('footnote',footnote); 
		 document.getElementById("foot").innerHTML = footnote;
	}


var preloader = document.getElementById('loading');

function myFunction(){
	preloader.style.display = 'none';
}

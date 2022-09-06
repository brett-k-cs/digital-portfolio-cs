
document.getElementsByTagName("a").forEach(element => {
    if(element.href.endsWith(".php") {
	if(window.location.href.contains("github") {
	    var actualPath =  window.location.path.split("/").slice(0, 1).join("/")
	    while (element.href.startsWith("../") {
		var actualPathArray = actualPath.split("/")
		actualPath = actualPathArray.slice(actualPathArray.length - 2, actualPathArray.length - 1).join("/")
		element.href = element.split("../").slice(0, 1).join("../")
	    }
		   actualPath += element.href;
		   element.href = "/digital-portfolio/nophp.html?path=" + actualPath
		  }

	}
});
       
function toggleDropdown(id) {
	     var dropdowns = document.getElementsByClassName("dropdown-content");
	     var i;
	     for (i = 0; i < dropdowns.length; i++) {
		 var openDropdown = dropdowns[i];
		 if (openDropdown.id != id && openDropdown.classList.contains('show') && !openDropdown.classList.contains('hide')) {
		     openDropdown.classList.add('hide');
		     setTimeout(() => {
			 openDropdown.classList.remove('show');
			 openDropdown.classList.remove('hide');
		     }, 400);
		 }
	     }
	     let elem = document.getElementById(id)
	     if(elem.classList.contains("show")) {
		 return;
		 elem.classList.add('hide');
		 setTimeout(() => {
		     elem.classList.remove('show');
		     elem.classList.remove('hide');
		 }, 400);
	     } else {
		 elem.classList.add('show');
	     }
	 }
       
	 // Close the dropdown if the user moves outside of it
      window.onmousemove = function(event) {
	  if (!event.target.matches('.dropdown') && !event.target.matches('.dropbtn') && (!event.target.parentNode || !(event.target.parentNode instanceof Element) || !event.target.parentNode.matches('.dropdown-content'))) {
		 var dropdowns = document.getElementsByClassName("dropdown-content");
		 var i;
		 for (i = 0; i < dropdowns.length; i++) {
		     var openDropdown = dropdowns[i];
		     if (openDropdown.classList.contains('show') && !openDropdown.classList.contains('hide')) {
			 openDropdown.classList.add('hide');
			 waitThenDelete(openDropdown);
		     }
		 }
	     }
	 }
	 
	 function waitThenDelete(openDropdown) {
	     setTimeout(() => {
		 openDropdown.classList.remove('show');
		 openDropdown.classList.remove('hide');
             }, 500)
	 }

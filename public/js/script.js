
let header = document.getElementById('navidation-bar');

window.onscroll = (function(event){
	if(window.pageYOffset > 60)
		header.classList.add("bg-light");
	else
		header.classList.remove("bg-light");
});

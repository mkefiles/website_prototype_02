/*
* Modal Box Logic
*/
// Get page elements
var modal = document.getElementById("modal");
var btn = document.getElementById("modal_btn");
var span = document.getElementsByClassName("close")[0];

// Open modal on button-click
btn.addEventListener('click', (event) => {
	modal.style.display = "block";
});

// Close modal on "x" click
span.addEventListener('click', (event) => {
	modal.style.display = "none";
});

// Close modal when user clicks outside modal
window.addEventListener('click', (event) => {
	if(event.target == modal){
		modal.style.display = "none";
	}
});


/*
* Portfolio Description Open/Close
*/
// Get page elements
let portfolioButtons = document.querySelectorAll(".btn_toggle");
let portfolioDescription = document.querySelectorAll(".project__description");
let downArrow = document.querySelectorAll(".downArrow");
let upArrow = document.querySelectorAll(".upArrow");

// Loop through all 'buttons'
for(let i = 0; i < portfolioButtons.length; i++){
	portfolioButtons[i].addEventListener('click', (event) => {

		// Toggle the 'hidden' class on description
		portfolioDescription[i].classList.toggle("hidden");

		// Toggle the 'hidden' (alternating) on arrows
		downArrow[i].classList.toggle("hidden");
		upArrow[i].classList.toggle("hidden");
	});
}
// Basket
$(function() {
    $('.nav-toggle').click(function(e) { //When the basket is clicked, the function below is run.
        e.preventDefault(); // This ensures that when the user clicks the basket, the page doesn't automatically scroll to the top everytime. It is implemented to improve the user experience.
      $('#pull-out').toggleClass("hidden"); //Runs the "hidden" class, and displays the contents of the basket for the user to view. 
    });
});




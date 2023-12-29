// Wait for the DOM content to load
document.addEventListener('DOMContentLoaded', function() {
  // Display a welcome message
  var welcomeMessage = "Welcome! Please enter your information.";
  alert(welcomeMessage);

  // Clear form fields except for the "Submit" button
  var formFields = document.querySelectorAll('input:not([type="submit"])');
  formFields.forEach(function(field) {
    field.value = '';
  });
});

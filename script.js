$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
      e.preventDefault(); // Prevent the form from refreshing the page
  
      // Fetch form data
      const name = $('#name').val();
      const email = $('#email').val();
      const dob = $('#dob').val();
      const gender = $('#gender').val();
      const hobbies = $('#hobbies').val();
  
      // Display the result
      $('#resultName').text(name);
      $('#resultEmail').text(email);
      $('#resultDob').text(dob);
      $('#resultGender').text(gender);
      $('#resultHobbies').text(hobbies);
  
      $('#result').removeClass('hidden');
    });
  });
  
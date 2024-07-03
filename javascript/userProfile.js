function deleteAccount() {
    if (confirm("Are you sure you want to delete your account?")) {
      // Perform the account deletion process here
      // This could include making an API request to delete the account, updating the database, etc.
      alert("Your account has been deleted.");
    }
  }
  function editProfile() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var location = document.getElementById("location");
  
    name.contentEditable = true;
    email.contentEditable = true;
    location.contentEditable = true;
  
    name.focus();
  }
  
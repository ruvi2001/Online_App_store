alert('This is a paid app.Do you want to continue?');

document.addEventListener('DOMContentLoaded', function() {
    
    var paymentForm = document.querySelector('form');
  
    
    paymentForm.addEventListener('submit', function(event) {
      event.preventDefault(); 
  
      
      var name = document.getElementById('name').value;
      var cardNumber = document.getElementById('card-number').value;
      var expiry = document.getElementById('expiry').value;
      var cvv = document.getElementById('cvv').value;
      var email = document.getElementById('email').value;
      var country = document.getElementById('country').value;
  
      
      if (!name || !cardNumber || !expiry || !cvv || !email || !country) {
        alert('Please fill in all the required fields.');
        return;
      }
  
      
  
      alert('Payment submitted successfully!');
      paymentForm.reset(); 
    });
  });


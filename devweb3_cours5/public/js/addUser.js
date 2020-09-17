// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            validateAge();
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  function validateAge()
  console.log(Document.getElementById('Age').value);
  {
    if(document.getElementById('Age').value > 18)
    {
        document.getElementById('Age').setCustomValidity("");
    }
    else
    {
        document.getElementById('Age').setCustomValidity("Votre age doit être supérieur a 18.");
    }
  }
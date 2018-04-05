// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$("#enquiryForm").submit(function (event) {
  event.preventDefault();
  console.log($("#enquiryForm"));
  $.ajax({
    url: 'api/submitEnquiry.php',
    method: 'POST',
    data: $("form").serializeArray(),
    dataType: 'json'
  }).done(function(res) {
    console.log(res);
    if(!res.error) {
      $("#msg").html(res.error);
      $("#formOutput").show();
    } else {
      $('#formSuccess').modal('show')
    }
  });

  $('#formSuccess').on('hidden.bs.modal', function (e) {
    window.location = 'index.php';
  });
})

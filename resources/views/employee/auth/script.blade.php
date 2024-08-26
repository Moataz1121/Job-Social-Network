   <!-- Core -->
   <script src="front/assets/js/jquery/jquery-3.3.1.min.js"></script>
   <script src="front/assets/js/popper/popper.min.js"></script>
   <script src="front/assets/js/bootstrap/bootstrap.min.js"></script>
   <!-- Optional -->
   <script src="front/assets/js/app.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
   integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
   crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"
   integrity="sha512-MlEyuwT6VkRXExjj8CdBKNgd+e2H+aYZOCUaCrt9KRk6MlZDOs91V1yK22rwm8aCIsb5Ec1euL8f0g58RKT/Pg=="
   crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/themes/smoothness/jquery-ui.min.css"
        integrity="sha512-B2s07Riaz6vCNqR1AsLDeXzzVUWrXwBO+Ffr85wHIH3oKKxXJZjyWLRB5S0Ch7L74fQHY+9L36nTpkB5oKJZcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

   <script>
      $(document).ready(function() {

          $.datepicker.setDefaults({
              dateFormat: ' yy-mm-dd'
          });
          $(function() {
              $("#from_date").datepicker();
              $("#to_date").datepicker();
          });
          $('#filter_date').click(function() {
              let from_date = $('#from_date').val();
              let to_date = $('#to_date').val();
              if (from_date != '' && to_date != '') {
                  $.ajax({
                      url: "filtration_process.php",
                      method: "POST",
                      data: {
                          from_date: from_date,
                          to_date: to_date
                      },
                      success: function(data) {
                          $('#order_table').html(data);
                      }
                  })
              } else {
                  alert('Please select dates first.')
              }
          })
      });
  </script>
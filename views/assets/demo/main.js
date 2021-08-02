 $(document).ready(function(){
      $('.Programmer').on('click', function(){

          $('#PrograModal').modal('show');

              $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function(){
                  return $(this).text();
              }).get();

              console.log(data);

              $('#note_id').val(data[0]);
              $('#nom').val(data[1]);
              $('#prenom').val(data[2]);


      });

  });
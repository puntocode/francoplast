
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$('[data-toggle="tooltip"]').tooltip();

$('.delete').on('click', function(e){
      e.preventDefault();
      let url = $(this).attr("href");
      let table = $('#tabla');
      let row = $(this).parents("tr");
      let id = $(this).attr("data-id");
      var token = $("meta[name='csrf-token']").attr("content");

      Swal.fire({
          title: 'Desea eliminar este registro?',
          text: "Una vez eliminado no se puede recuperar!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si',
          preConfirm: function() {
              $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (response){
                   //window.location.href = base_url + resp;
                  if(response){
                      row.remove();
                      iziToast.success({
                          title: 'Colaborador eliminado correctamente',
                          theme: 'dark',
                          position: 'topRight',
                          timeout: 3500,
                          progressBar: true,
                          backgroundColor: '#4FCD64',
                      });
                  }else{
                      iziToast.error({
                          title: 'El colaborador no se pudo eliminar',
                          theme: 'dark',
                          position: 'topRight',
                          timeout: 3500,
                          progressBar: true
                      });
                  }
              }
          });
          }
      });
  });

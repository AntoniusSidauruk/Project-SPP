$(document).ready(function(){
          $("#editModal").on("show.bs.modal", function(e){
            var rowid = $(e.relatedTarget).data("id");

            $.ajax({
              type : "POST",
              url  : "../page/edit/editsiswa.php",
              data : "rowid="+rowid,

              success:function(data){
                $('.fetched-data').html(data);
              }
            })
          })
        })


        function contoh() {

         Swal.fire({
          title: 'Yakin akan menghapus?',
          text: "text dinamis php",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
              )
          }
        })
      }
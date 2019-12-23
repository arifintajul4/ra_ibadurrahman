$(document).ready(function() {

	console.log('Js Aman');
   $('#dataTable').DataTable();

   $( "#datepicker" ).datepicker();

   $(function () {
      $('[data-tooltip="tooltip"]').tooltip()
   })

   $('.selectpicker').selectpicker();

   $('#status').on('change', function() {
      if (this.value == "Masuk") {
            $('#tujuan').html("Dari");
      }else{
            $('#tujuan').html("Tujuan");
      }
   });

   $('.hapus').on('click', function (e) {
      e.preventDefault(); //cancel default action

      //Recuperate href value
      var href = $(this).attr('href');
      var message = $(this).data('confirm');

      //pop up
      swal({
         title: "Apakah Anda Yakin ??",
         text: message,
         icon: "warning",
         buttons: true,
         dangerMode: true,
      })
      .then((willDelete) => {
         if (willDelete) {
            window.location.href = href;
         } else {
            swal("Data Batal dihapus!");
         }
      });
   });

   $("#nama_siswa").autocomplete({
      source: base_url+"siswa/get_namasiswa",
      //source: data,
      select: function (event, ui) {
         console.log('ok');
         event.preventDefault();
         $("#nis").val(ui.item.value);
         $("#nama_siswa").val(ui.item.label);
      },
   });
   $("#saldo").hide();
   $("#metode").change(function(){
      if($("#metode").val() == "Tabungan"){
          const id = $("#nis").val();
          $("#saldo").show();
          $("#saldo").html('Saldo Siswa: Rp.0');
          $.ajax({
              url: base_url+"siswa/get_datasiswa",
              type:"POST",
              dataType: 'JSON',
              data:{
                  id: id
              },
              success:function(data){
                  $("#saldo").html('Saldo Siswa: Rp.'+data.saldo);
              }
          });
      }else{
          $("#saldo").hide();
      }
  });

});
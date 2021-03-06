$(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
});

$(document).ready( function() {
    $('#example1').DataTable( {
        "autoWidth": false,     
        dom: 'lBfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            autoFilter: true,
            sheetName: 'Export BPS',       
            exportOptions: {
            columns: 'th:not(:last-child)'
          },
          title: '',
          filename: function () { 
          var txt = prompt("Masukkan Nama File :");
          return txt; }
        } ]

    } );
} );

window.setTimeout(function(){
    $('.alert').fadeTo(500,0).slideUp(500, function(){
        $(this).remove();
    });
},3000);

$(document).ready(function(){
    $('nav ul li a').click(function(){
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(document).ready(function(){
    $('#komponen').change(function(){
        var id = $(this).val();
        $.ajax({
          type: 'POST',
          url : "/Dokumen/getSub",
          data: {
            id: id
          },
          dataType: 'JSON',
          success: function(response){
            $('#subkomponen').find('option').not(':first').remove();
            $('#subsubkomponen').find('option').not(':first').remove();
            $('#kelengkapan').find('option').not(':first').remove();
            $.each(response,function(index,data){
              $('#subkomponen').append('<option value="'+data['id_sub_k']+'">'+data['nama_sub_k']+'</option>');
            });
          }
        });
    });
    //Sub Sub Komponen Start
    $('#subkomponen').change(function(){
        var id_sub = $(this).val();
        $.ajax({
          type: 'POST',
          url : "/Dokumen/getSubSub",
          data: {
            id_sub: id_sub
          },
          dataType: 'JSON',
          success: function(response){
            $('#subsubkomponen').find('option').not(':first').remove();
            $('#kelengkapan').find('option').not(':first').remove();
            $.each(response,function(index,data){
              $('#subsubkomponen').append('<option value="'+data['id_sub_sub_k']+'">'+data['nama_sub_sub_k']+'</option>');
            });
          }
        });
    });
    $('#subsubkomponen').change(function(){
      var id_sub_sub_k = $(this).val();
      $.ajax({
        type: 'POST',
        url : "/Dokumen/getKelengkapan",
        data: {
          id_sub_sub_k: id_sub_sub_k
        },
        dataType: 'JSON',
        success: function(response){
          $('#kelengkapan').find('option').not(':first').remove();
          $.each(response,function(index,data){
            $('#kelengkapan').append('<option value="'+data['id_kelengkapan']+'">'+data['nama_kelengkapan']+'</option>');
          });
        }
      });
  });
});

$(document).ready(function() {
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
});
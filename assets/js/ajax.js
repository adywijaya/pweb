$("#email").change( function(){
    $.ajax({
        url: "/pweb/ajax/cekemail",
        data: { "emailaddr" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warningemail").html( "Email sudah pernah terdaftar" );
                  $(":submit").attr("disabled", true);
            } else {
                $("#warningemail").html( "Email OK" );
                $(":submit").removeAttr("disabled");
            }
        }
    });
} );

$("#nim").change( function(){
  var pr=['510','520','310','320']
  var d = new Date();
  var tahun = d.getFullYear().toString();
  var nim = $(this).val();

  if (pr.indexOf(nim.substr(0,3)) < 0
  || parseInt(nim.substr(3,2))+2000 > tahun)  {
    $("#nim").attr("placeholder","Nim Tidak Valid!").val("").focus();
    $("#warningnim").html( "" );

  }else{

    $.ajax({
        url: "/pweb/ajax/ceknim",
        data: { "nimnya" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warningnim").html( "NIM sudah pernah terdaftar" );
                $("#nim").focus();
                $(":submit").attr("disabled", true);
            } else {
                $("#warningnim").html( "NIM OK" );
                $("#angkatan").val( "20" + $('#nim').val().substr(3, 2) );

                var jrsn;
                switch ( $('#nim').val().substr(0, 3) ) {
                    case '510':
                        jrsn = 'Sistem Informasi';
                        break;
                    case '520':
                        jrsn = 'Teknik Informatika';
                        break;
                    case '310':
                        jrsn = 'Manajemen Informatika';
                        break;
                    case '320':
                        jrsn = 'Teknik Komputer';
                        break;
                }
                $("#jurusan").val(jrsn);
                $(":submit").removeAttr("disabled");
            }
        }
    });
}
} );

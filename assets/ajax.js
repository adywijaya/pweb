$("#nama").change( function(){
    $.ajax({
        url: "/pweb_161/ukmku/ajax/cekuser",
        data: { "namausernya" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warning_user_name").html( "Username sudah terdaftar" );
            } else {
                $("#warning_user_name").html( "Username OK" );
            }
        }
    });
} );

$("#email").change( function(){
    $.ajax({
        url: "/pweb_161/ukmku/ajax/cekemail",
        data: { "emailaddr" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warningemail").html( "Email sudah pernah terdaftar" );
            } else {
                $("#warningemail").html( "Email OK" );
            }
        }
    });
} );

function validasiangka(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }

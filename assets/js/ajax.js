$("#nama").change( function(){
    $.ajax({
        url: "/pweb/ajax/cekuser",
        data: { "namausernya" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warning_user_name").html( "Username sudah terdaftar" );
                    $(":submit").attr("disabled", true);
            } else {
                $("#warning_user_name").html( "Username OK" );
                    $(":submit").removeAttr("disabled");
            }
        }
    });
} );

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
    $.ajax({
        url: "/pweb/ajax/cekemail",
        data: { "emailaddr" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warningnim").html( "Nim sudah pernah terdaftar" );
                    $(":submit").attr("disabled", true);
            } else {
                $("#warningnim").html( "" );
                    $(":submit").removeAttr("disabled");
            }
        }
    });
} );
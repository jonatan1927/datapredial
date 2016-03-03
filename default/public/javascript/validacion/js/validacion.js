$(document).on("ready", inicio);
function inicio() {
    var v = true;
    $("span.help-block").hide();
}
 function sumar()
    {       
         valor1=document.getElementById('terreno').value;
         valor2=document.getElementById('requerida').value;
         valor4=document.getElementById('inicial').value;
         valor5=document.getElementById('final').value;
         valor3 = parseFloat(valor1)-parseFloat(valor2);
         valor6 = parseFloat(valor5)-parseFloat(valor4);
         document.getElementById('sobrante').value=valor3;
         document.getElementById('total').value=valor2;
         document.getElementById('Longitud').value=valor6;     
    }
 function ficha(){
    v1 = validacion('ficha');
    if(v1 === false){
               $("#exito").hide();
        $("#error").show();
    } else {
        $("#error").hide();
        $("#exito").show();
    }
 }
    
    
    
function verificar() {

//    var v1 = 0, v2 = 0, v3 = 0, v4 = 0, v5 = 0, v6 = 0;
//    v1 = validacion('codigo');
//    v2 = validacion('nombres');
//    v3 = validacion('dni');
//    v4 = validacion('email');
//    v5 = validacion('genderRadios');
//    v6 = validacion('carrera');
//    if (v1 === false || v2 === false || v3 === false || v4 === false || v5 === false || v6 === false) {
//        $("#exito").hide();
//        $("#error").show();
//    } else {
//        $("#error").hide();
//        $("#exito").show();
//    }
    /*total=v1+v2+v3+v4+v5+v6;
     if (v && total>=6) {
     $("#error").hide();
     $("#exito").show();
     }else{
     $("#exito").hide();
     $("#error").show();
     }
     
     
     validacion('nombres');
     validacion('dni');
     validacion('email');
     validacion('genderRadios');
     validacion('carrera');
     if (v) {
     alert("los campos estan validados")
     }
     else{
     alert("los campos no estan validados");
     }*/

}

function validacion(campo) {
    var a = 0;
            if (campo==='ficha'){
                Matricula = document.getElementById(campo).value;
                if( Matricula == null || Matricula.length == 0 || /^\s+$/.test(Matricula)) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el numero de la ficha").show();
                    return false;      
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;    
                } 
        }
             if (campo==='uf'){
                uf = document.getElementById(campo).value;
                if( uf == null || uf == 0 || /^\s+$/.test(uf) ) {       
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la unidad funcional").show();
                    return false;       
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
            if (campo==='Cedulacatastral'){
                Cedulacatastral = document.getElementById(campo).value;
                if( Cedulacatastral == null || Cedulacatastral.length == 0 || /^\s+$/.test(Cedulacatastral) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la cedula catastral").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                        if (campo==='Matricula'){
                Matricula = document.getElementById(campo).value;
                if( Matricula == null || Matricula.length == 0 || /^\s+$/.test(Matricula) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la matricula inmobiliaria").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
             if (campo==='nombre'){
                apellido = document.getElementById(campo).value;
                if( apellido == null || apellido.length == 0 || /^\s+$/.test(apellido) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el nombre con apellidos").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                          if (campo==='escritura'){
                escritura = document.getElementById(campo).value;
                if( escritura == null || escritura.length == 0 || /^\s+$/.test(escritura) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el numero de la escritura").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                          if (campo==='notaria'){
                notaria = document.getElementById(campo).value;
                if( notaria == null || notaria.length == 0 || /^\s+$/.test(notaria) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el nombre de la notaria").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
            if (campo==='Cedula'){
                dni = document.getElementById(campo).value;
                if( dni == null || dni.length == 0 || /^\s+$/.test(dni) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la cedula del propietario").show();
                    return false;
                    
                }
                else
                {
                    if( isNaN(dni) ) 
                    {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No acepto letras").show();
                        return false;
                    }
                        else{
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                            $('#'+campo).parent().children('span').hide();                    
                            return true;
                        }
                        
                    }  
                }
                            if (campo==='Telefono')
            {
                codigo = document.getElementById(campo).value;
                if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el telefono del propietario").show();
                    return false;
                   
                }
                else
                {
                    if(isNaN(codigo)) {

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No Acepta letras").show();
                        return false;
                    }
                    else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        return true;
                    }
                    
                    
                }
                
            }
            if (campo==='Email'){
                email = document.getElementById(campo).value;
                if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algun Email").show();                        
                    return false;
                    
                }
                else{
                    if (!(/\S+@\S+\.\S+/.test(email))) {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Ingrese un Email valido").show();
                        return false;
                    }
                    else{
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();                    
                        return true;
                    }
                }

            }
            if (campo==='Direccion'){
                Direccion = document.getElementById(campo).value;
                if( Direccion == null || Direccion.length == 0 || /^\s+$/.test(Direccion) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la dirección del predio").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                     if (campo==='Sector'){
                Sector = document.getElementById(campo).value;
                if( Sector == null || Sector.length == 0 || /^\s+$/.test(Sector) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Seleccione el sector de la vía").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
         if (campo==='Municipio'){
                Municipio = document.getElementById(campo).value;
               if( Municipio == null || Municipio == 0 || /^\s+$/.test(Municipio) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Seleccione un municipio").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
             if (campo==='Vereda'){
                Vereda = document.getElementById(campo).value;
               if( Vereda == null || Vereda == 0 || /^\s+$/.test(Vereda) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Seleccione una vereda").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
        if (campo==='requerido'){
                requerido = document.getElementById(campo).value;
               if( requerido == null || requerido == 0 || /^\s+$/.test(requerido) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Seleccione la opcion correcta").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                }
            }
             if (campo==='suelo'){
                suelo = document.getElementById(campo).value;
               if( suelo == null || suelo == 0 || /^\s+$/.test(suelo) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("seleccione uso del suelo").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                }
            }
                          if (campo==='economica'){    
                economica = document.getElementById(campo).value;
               if( economica == null || economica == 0 || /^\s+$/.test(economica) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Seleccione una actividad economica").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                }
            }
                         if (campo==='Topografia'){
                Topografia = document.getElementById(campo).selectedIndex;
               if( Topografia == null || Topografia == 0 || /^\s+$/.test(Topografia) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Seleccione la topografía").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                }
            }
        if (campo==='terreno'){
                terreno = document.getElementById(campo).value;
                if( terreno == null || terreno.length == 0 || /^\s+$/.test(terreno) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el area de terreno").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                if (campo==='requerida'){
                requerida = document.getElementById(campo).value;
                if( requerida == null || requerida.length == 0 || /^\s+$/.test(requerida) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el area requerida").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
         if (campo==='remanente'){
                remanente = document.getElementById(campo).value;
                if( remanente == null || remanente.length == 0 || /^\s+$/.test(remanente) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el area remanente").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }    
        if (campo==='sobrante'){
                sobrante = document.getElementById(campo).value;
                if( sobrante == null || sobrante.length == 0 || /^\s+$/.test(sobrante) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese el area sobrante").show();
                    return false;
                    
                }
                 else  if( requerida.valueOf() > terreno.valueOf()) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("el area requerida esta mal").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }   
       if (campo==='total'){
                total = document.getElementById(campo).value;
                if( total == null || total.length == 0 || /^\s+$/.test(total) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    return false;
                    
                }
              
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                             if (campo==='Margen'){
                Margen = document.getElementById(campo).selectedIndex;
                if( Margen == null || Margen == 0 ) {
                    $('#Margen').parent().parent().attr("class", "form-group has-error");
                    return false;
                }
                else{
                    $('#Margen').parent().parent().attr("class", "form-group has-success");
                    return true;

                }
            }
      if (campo==='inicial'){
                inicial = document.getElementById(campo).value;
                if( inicial == null || inicial.length == 0 || /^\s+$/.test(inicial) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }    
        if (campo==='final'){
                final = document.getElementById(campo).value;
                if( final == null || final.length == 0 || /^\s+$/.test(final) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }   
       if (campo==='Longitud'){
                Longitud = document.getElementById(campo).value;
                if( Longitud == null || Longitud.length == 0 || /^\s+$/.test(Longitud) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    return false;
                    
                }
                else  if( final.valueOf()<=inicial.valueOf()) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("la longitud esta mal").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                         if (campo==='usuario'){
                Apellido = document.getElementById(campo).value;
                if( Apellido == null || Apellido.length == 0 || /^\s+$/.test(Apellido) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
                         if (campo==='contra'){
                Apellido = document.getElementById(campo).value;
                if( Apellido == null || Apellido.length == 0 || /^\s+$/.test(Apellido) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }
}


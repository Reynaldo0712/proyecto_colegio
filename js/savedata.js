
$(document).ready(function(){

 


$('#task-form').submit(function(e){



const postData = {
    seleccionSede: $('#seleccionSede').val(),
    apellidoEstudiante: $('#apellidoEstudiante').val(),
    nombreEstudiante: $('#nombreEstudiante').val(),
    DireccionEstudiante: $('#DireccionEstudiante').val(),
    fechaNacimiento: $('#fechaNacimiento').val(),
    numeroActa: $('#numeroActa').val(),
    actaFolio: $('#actaFolio').val(),
    actaLibro: $('#actaLibro').val(),
    actaAnio: $('#actaAnio').val(),
    colegioOrigen: $('#colegioOrigen').val(),
    gradoOrigen: $('#gradoOrigen').val(),
    gradoInscribir: $('#gradoInscribir').val(),
    vivecon: $('#vivecon').val(),
    apellidoPadre: $('#apellidoPadre').val(),
    nombrePadre: $('#nombrePadre').val(),
    direccionPadre: $('#direccionPadre').val(),
    cedulaPadre: $('#cedulaPadre').val(),
    estudioPadre: $('#estudioPadre').val(),
    trabajoPadre: $('#trabajoPadre').val(),
    ocupacionPadre: $('#ocupacionPadre').val(),
    emailPadre: $('#emailPadre').val(),
    telefonoResidenc: $('#telefonoResidenc').val(),
    telefonoOfic: $('#telefonoOfic').val(),
    telefonoMov: $('#telefonoMov').val(),
    apelliMadre: $('#apelliMadre').val(),
    nombreMadre: $('#nombreMadre').val(),
    direccionMadre: $('#direccionMadre').val(),
    cedMadre: $('#cedMadre').val(),
    estudioMadre: $('#estudioMadre').val(),
    trabajoMadre: $('#trabajoMadre').val(),
    ocupacMadre:  $('#ocupacMadre').val(),
    emailMadre:   $('#emailMadre').val(),
    telefMadre:   $('#telefMadre').val(),
    teloficMadre: $('#teloficMadre').val(),
    telefMovil:   $('#telefMovil').val(),
    apellidoTutors: $('#apellidoTutors').val(),
    nombreTutor:  $('#nombreTutor').val(),
    dirTutor: $('#dirTutor').val(),
    cedTutor: $('#cedTutor').val(),
    estudioTutor: $('#estudioTutor').val(),
    ocupacTutor: $('#ocupacTutor').val(),
    trabajoTutor: $('#trabajoTutor').val(),
    emailTutor:  $('#emailTutor').val(),
    teleRes: $('#teleRes').val(),
    teleOfic: $('#teleOfic').val(),
    teleMov:  $('#teleMov').val(),
    apeEmer:  $('#apeEmer').val(),
    nameEmer: $('#nameEmer').val(),
    lugarWork: $('#lugarWork').val(),
    idDom: $('#idDom').val(),
    telephoneNum: $('#telephoneNum').val(),
    emailPersona: $('#emailPersona').val(),
    nameAux: $('#nameAux').val(),
    lastname: $('#lastname').val(),
    idcedula: $('#idcedula').val(),
    telefCel: $('#telefCel').val(),
    namePerson2: $('#namePerson2').val(),
    lastNamePer2: $('#lastNamePer2').val(),
    idPerson2: $('#idPerson2').val(),
    person2Telef: $('#person2Telef').val(),
    namePerson3: $('#namePerson3').val(),
    lastnamePerson3: $('#lastnamePerson3').val(),
    idPerson3: $('#idPerson3').val(),
    telefMov3: $('#telefMov3').val(),
    sarampion: $('#sarampion').val(),
    tetanos: $('#tetanos').val(),
    polio: $('#polio').val(),
    otitis: $('#otitis').val(),
    hemofilia: $('#hemofilia').val(),
    malaria: $('#malaria').val(),
    varicela: $('#varicela').val(),
    difteria: $('#difteria').val(),
    tosFerina: $('#tosFerina').val(),
    fiebreTifoidea: $('#fiebreTifoidea').val(),
    epilepsia: $('#epilepsia').val(),
    hepatitis: $('#hepatitis').val(),
    rubeola: $('#rubeola').val(),
    escarlatina: $('#escarlatina').val(),
    anginas: $('#anginas').val(),
    amebiasis: $('#amebiasis').val(),
    osteomielitis: $('#osteomielitis').val(),
    amigdalitis: $('#amigdalitis').val(),
    papera: $('#papera').val(),
    neumonia: $('#neumonia').val(),
    tuberculosis: $('#tuberculosis').val(),
    anemia: $('#anemia').val(),
    meningitis: $('#meningitis').val(),
    apendicitis: $('#apendicitis').val(),
    dengue: $('#dengue').val(),
    colera: $('#colera').val(),
    gripe: $('#gripe').val(),
    migrana: $('#migrana').val(),
    varicela: $('#varicela').val(),
    ninguna: $('#ninguna').val(),
    alergiasNi: $('#alergiasNi').val(),
    medicamento: $('#medicamento').val(),
    tipoSangre: $('#tipoSangre').val(),
    enfermeAlumno: $('#enfermeAlumno').val(),
    cirugia: $('#cirugia').val(),
    causaCiru: $('#causaCiru').val(),
    dateSurgery: $('#dateSurgery').val(),
    medicoHead: $('#medicoHead').val(),
    nameMedico: $('#nameMedico').val(),
    movilMed: $('#movilMed').val(),
    arsCompany: $('#arsCompany').val(),
    numberPoliz: $('#numberPoliz').val(),
    infoImport: $('#infoImport').val(),
    actaNaci: $('#actaNaci').val(),
    foto2x2: $('#foto2x2').val(),
    certiMed: $('#certiMed').val(),
    regVacu: $('#regVacu').val(),
    idFather: $('#idFather').val(),
    idMother: $('#idMother').val(),
    picSeg: $('#picSeg').val()

};


if($('#seleccionSede').val() == "" || $('#seleccionSede').val() == 0)
{
  $('#seleccionSede').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste selecionar la sede',
  })
  
  
}


else if($('#apellidoEstudiante').val() == "")
{
  $('#apellidoEstudiante').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el apellido',
  })
  
}else if($('#nombreEstudiante').val() == "")
{
  
  $('#nombreEstudiante').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el nombre',
  })
  
}
else if($('#DireccionEstudiante').val() == "")
{

  $('#DireccionEstudiante').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste la direccion',
  })
  
}
else if($('#fechaNacimiento').val() == null || $('#fechaNacimiento').val() == 0)
{
  $('#fechaNacimiento').focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste seleccionar la fecha de nacimiento',
  })
  
}
else if($('#numeroActa').val() == "")
{

  $('#numeroActa').focus();
 
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el numero de acta',
})


}

else if($('#numeroActa').val().length > 12 || $('#numeroActa').val().length < 11 || isNaN($('#numeroActa').val()))
{

  $('#numeroActa').focus();
 
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de acta no es correcto',
  })
  

}

else if($('#actaFolio').val() == "")
{
  $('#actaFolio').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el numero de folio de acta ',
  })

  
}


else if($('#actaFolio').val().length >= 5 || $('#actaFolio').val().length < 4 || isNaN($('#actaFolio').val()))
{
  $('#actaFolio').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de folio de acta no es correcto',
  })
  

}

else if($('#actaLibro').val() == "")
{
  $('#actaLibro').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el libro del acta',
  })
  

}
else if($('#actaLibro').val().length >= 6 ||$('#actaLibro').val().length < 5 || isNaN($('#actaLibro').val()))
{
  $('#actaLibro').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de libro de no es correcto',
  })
  

}
else if($('#actaAnio').val() == "")
{
  $('#actaAnio').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el año del acta',
  })

  
}
else if($('#actaAnio').val().length >= 5 || isNaN($('#actaAnio').val()))
{
  $('#actaAnio').focus()
    Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de año no es correcto',
  })

  
}
else if($('#colegioOrigen').val() == "")
{
  $('#colegioOrigen').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el nombre del colegio de origen',
  })

  
}
else if($('#gradoOrigen').val() == "")
{
  $('#gradoOrigen').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el grado del colegio de origen',
  })
  

}
else if($('#gradoInscribir').val() == "" || $('#gradoInscribir').val() == 0)
{
  $('#gradoInscribir').focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste el grado a inscribir',
  })
  

} 
else if($('#vivecon').val() == 0)
{
  $('#vivecon').focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste seleccionar con quien vives',
  })
  
} 
else if($('#vivecon').val() == 1 && $('#apelliMadre').val() == "")
{

 
  $('#apelliMadre').focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste el apellidode la madre',
  })

}

else if($('#vivecon').val() == 1 && $('#nombreMadre').val() == "")
{
  $('#nombreMadre').focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste el nombre la madre',
  })

}
else if($('#vivecon').val() == 1 && $('#direccionMadre').val() == "")
  {
    $('#direccionMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar la direccion de la madre',
    })
    

  }
  else if($('#vivecon').val() == 1 && $('#cedMadre').val() == "")
  {
    $('#cedMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar la cedula de la madre',
    })

    

  }
  else if($('#vivecon').val() == 1 && $('#cedMadre').val().length > 11 || $('#cedMadre').val().length < 11 || isNaN($('#cedMadre').val()))
  {
    $('#cedMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'La cedula de la madre esta incorrecta',
    })
    

  }
  
  else if($('#vivecon').val() == 1 && $('#estudioMadre').val() == "")
  {

    $('#estudioMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar los estudios de la madre',
    })
    
  }else if($('#vivecon').val() == 1 && $('#trabajoMadre').val() == "")
  {

    $('#trabajoMadre').focus();

    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar el trabajo de la madre',
    })
    

  }else if($('#vivecon').val() == 1 && $('#ocupacMadre').val() == "")
  {

    $('#ocupacMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar la ocupacion de la madre',
    })
    
  }else if($('#vivecon').val() == 1 && $('#emailMadre').val() == "")
  {
    $('#emailMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar el email de la madre',
    })
    


  }
  else if($('#vivecon').val() == 1 && $('#telefMadre').val() == "")
  {


    $('#telefMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar numero de telefono de la madre',
    })
    
  }else if($('#vivecon').val() == 1 && $('#telefMadre').val().length < 10 ||  $('#telefMadre').val().length > 10 || isNaN($('#telefMadre').val()))
  {



    $('#telefMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto',
    })


    
  }
  
  else if($('#vivecon').val() == 1 && $('#teloficMadre').val() == "")
  {


    $('#teloficMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar numero de telefono de la  oficina de la madre',
    })
    
  }else if($('#vivecon').val() == 1 && $('#teloficMadre').val().length < 10 || $('#teloficMadre').val().length > 10 || isNaN($('#teloficMadre').val()))
  {



    $('#teloficMadre').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto',
    })

    

  }

  else if($('#vivecon').val() == 1 && $('#telefMovil').val() == "")
  {


    $('#telefMovil').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar numero de telefono mobil de la madre',
    })
    
  }else if($('#vivecon').val() == 1 && $('#telefMovil').val().length < 10 || $('#telefMovil').val().length > 10 || isNaN($('#telefMovil').val()))
  {



    $('#telefMovil').focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto',
    })
    
  }
 


else if($('#vivecon').val() == 2)
{
  padre();
  
}else if($('#vivecon').val() == 3)
{
  tutor();
   
}else if($('#vivecon').val() == 4)
{

  padreMadre();
  
}


else if($('#apeEmer').val() == "")
{
  $('#apeEmer').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el apellido de la persona de Emergencia'
  })
  
}else if($('#nameEmer').val() == "")
{
  $('#nameEmer').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el nombre de la persona de Emergencia'
  })
  
}else if($('#lugarWork').val() == "")
{
  $('#lugarWork').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olviaste agregar el trabajo de la persona de Emergencia'
  })
  
}else if($('#idDom').val() == "")
{
  $('#idDom').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar la cedula de la persona de Emergencia'
  })
  
}else if($('#idDom').val().length > 11 ||$('#idDom').val().length < 11 || isNaN($('#idDom').val()))
{
  $('#idDom').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'La cedula de la persona de Emergencia esta incorrecta'
  })
  
}else if($('#telephoneNum').val() == "")
{
  $('#telephoneNum').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el telefono de la persona de Emergencia'
  })
  
}else if($('#telephoneNum').val().length < 10 ||$('#telephoneNum').val().length > 10 || isNaN($('#telephoneNum').val()))
{
  $('#telephoneNum').focus()
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El telefono de la persona de Emergencia esta incorrecto'
  })
  
}else if($('#emailPersona').val() == "")
{
  $('#emailPersona').focus();
  Swal.fire({
    icon: 'error',
    title: 'Eror',
    text: 'Olvidaste el email de la persona'
  })
  
}
else
{
let url = "save_data.php";

$.post(url,postData,function(response){

  console.log(response)

})

Swal.fire({
  icon: 'success',
  title: 'Buen trabajo',
  text: 'Datos guardados correctamente', 
})



}

e.preventDefault();
});

 


function padre()
{

if($('#apellidoPadre').val() == "")
{
  $('#apellidoPadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el apellido del padre',
  })
  
}else if($('#nombrePadre').val() == "")
{
  $('#nombrePadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste los nombres del padre',
  })
  
}else if($('#direccionPadre').val() == "")
{
  $('#direccionPadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste la direccion del padre',
  })
  
}else if($('#cedulaPadre').val() == "")
{
  $('#cedulaPadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text:'Olvidaste la cedula del padre',
  })
  
}else if ($('#cedulaPadre').val().length > 11 || $('#cedulaPadre').val().length > 11 || isNaN($('#cedulaPadre').val()))
{
  $('#cedulaPadre').focus();
  Swal.fire({
    icon:'error',
    title:'Error',
    text: 'La cedula del padre esta incorrecta',
  })
  
}else if($('#estudioPadre').val() == "")
{
  $('#estudioPadre').focus();
  Swal.fire({
    icon:'error',
    title:'Error',
    text: 'Olvidaste completar los estudios del padre',

  })
  
}else if($('#trabajoPadre').val() == "")
{
  $('#trabajoPadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el trabajo del padre',
    })
    
}
else if($('#ocupacionPadre').val() == "")
{
  $('#ocupacionPadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar la ocupacion del padre',
  })
  
  
}else if($('#emailPadre').val() == "")
{
  $('#emailPadre').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el email del padre',
})

  
}else if($('#telefonoResidenc').val() == "")
{
  $('#telefonoResidenc').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el telefono residencial del padre',
  })
  
}else if($('#telefonoResidenc').val().length < 10 ||  $('#telefonoResidenc').val().length > 10 || isNaN($('#telefonoResidenc').val()))
{ 
  $('#telefonoResidenc').focus();
  Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono residencial no es correcto',
    })
    
}
else if($('#telefonoOfic').val() == "")
{
  $('#telefonoOfic').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el telefono de la oficina del padre',
  })
  
}else if($('#telefonoOfic').val().length < 10 ||  $('#telefonoOfic').val().length > 10 || isNaN($('#telefonoOfic').val()))
{
  $('#telefonoOfic').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de telefono de oficina no es correcto',
  })
  
}
else if ($('#telefonoMov').val() == "")
{
  $('#telefonoMov').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el telefono movil del padre',
  })
  
}else if($('#telefonoMov').val().length < 10 || $('#telefonoMov').val().length > 10 || isNaN($('#telefonoMov').val()))
{
  $('#telefonoMov').focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de telefono movil no es correcto',
  })
  
}

}


function tutor()
{

 
  if($('#apellidoTutors').val() == "")
  {
    $('#apellidoTutors').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el apellido del tutor',
    })
    
  }
  else if( $('#nombreTutor').val() == "")
  {
    $('#nombreTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el nombre del tutor',
    })
    
  }
  else if($('#dirTutor').val()== "")
  {
    $('#dirTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar la direccion del tutor',
    })
    
  }


  else if($('#cedTutor').val()== "")
  {
    $('#cedTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar la cedula del tutor',
    })
    
  }else if( $('#cedTutor').val().length < 11 ||  $('#cedTutor').val().length > 11 || isNaN( $('#cedTutor').val()))
  {
    $('#cedTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'La cedula del tutor esta incorrecta del tutor',
    })
    
  }

  else if($('#estudioTutor').val() == "")
  {
    $('#estudioTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar los estudios del tutor',
    })
    
  }

  else if($('#ocupacTutor').val() == "")
  {
    $('#ocupacTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar la ocupacion del tutor',
    })
    
  }

  else if($('#trabajoTutor').val() == "")
  {
    $('#trabajoTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el trabajo del tutor',
    })
    
  }

  else if($('#emailTutor').val()== "")
  {
    $('#emailTutor').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el email del tutor',
    })
    
  }

  else if($('#teleRes').val() == "")
  {
    $('#teleRes').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el numero de telefono del tutor',
    })
    
  }
  
  else if($('#teleRes').val().length < 10 || $('#teleRes').val().length > 10 || isNaN($('#teleRes').val()))
  {
    $('#teleRes').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto del tutor',
    })
    
  }



  else if( $('#teleOfic').val() == "")
  {
    $('#teleOfic').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste el numero de telefono del tutor',
    })
    
  }
  
  else if( $('#teleOfic').val().length < 10 ||  $('#teleOfic').val().length > 10 || isNaN( $('#teleOfic').val()))
  {
    $('#teleOfic').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto del tutor',
    })
    

  }



  else if( $('#teleMov').val() == "")
  {
    $('#teleMov').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste el numero de telefono del tutor',
    })
    
  }
  
  else if($('#teleMov').val().length < 10 ||  $('#teleMov').val().length > 10 || isNaN( $('#teleMov').val()))
  {
    $('#teleMov').focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto del tutor',
    })
    
  } 

}
 
function padreMadre()
{

  padre();
  madre();


}









});

 
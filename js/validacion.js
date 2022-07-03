

function validarCampos()
{
var sede = document.getElementById('seleccionSede');
var apellido = document.getElementById('apellidoEstudiante');
var nombreEstudiante = document.getElementById('nombreEstudiante');
var DireccionStudent = document.getElementById('DireccionEstudiante');
var numeroActa = document.getElementById('numeroActa');
var actaFolio = document.getElementById('actaFolio');
var actaLibro = document.getElementById('actaLibro');
var actaAnio = document.getElementById('actaAnio');
var gradoOrigen = document.getElementById('gradoOrigen');
var gradoInscribir = document.getElementById('gradoInscribir');
var fechaNacimiento = document.getElementById('fechaNacimiento');
var vivecon = document.getElementById('vivecon');
var apeEmer = document.getElementById('apeEmer');
var nameEmer = document.getElementById('nameEmer');
var lugarWork = document.getElementById('lugarWork');
var idDom = document.getElementById('idDom');
var telephoneNum = document.getElementById('telephoneNum');
var emailPersona = document.getElementById('emailPersona');
var submit = document.getElementById('submit');

if(sede.value == "" || sede.value == 0)
{
  sede.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste selecionar la sede',
  })
  
  return false;
}
else if(apellido.value == "")
{
  apellido.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el apellido',
  })
  return false;
}else if(nombreEstudiante.value == "")
{
  
  nombreEstudiante.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el nombre',
  })
  return false;
}
else if(DireccionStudent.value == "")
{

  DireccionStudent.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste la direccion',
  })
  return false;
}
else if(fechaNacimiento.value == null || fechaNacimiento.value == 0)
{
  fechaNacimiento.focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste seleccionar la fecha de nacimiento',
  })
  return false;
}
else if(numeroActa.value == "")
{

  numeroActa.focus();
 
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el numero de acta',
})
return false;

}
else if(numeroActa.value.length >= 12 || numeroActa.value.length < 11 || isNaN(numeroActa.value))
{

  numeroActa.focus();
 
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de acta no es correcto',
  })
  return false;

}

else if(actaFolio.value == "")
{
  actaFolio.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el numero de folio de acta ',
  })

  return false;
}


else if(actaFolio.value.length >= 5 || actaFolio.value.length < 4 || isNaN(actaFolio.value))
{
  actaFolio.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de folio de acta no es correcto',
  })
  return false;

}

else if(actaLibro.value == "")
{
  actaLibro.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el libro del acta',
  })
  return false;

}
else if(actaLibro.value.length >= 6 || actaLibro.value.length < 5 || isNaN(actaLibro.value))
{
  actaLibro.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de libro de no es correcto',
  })
  return false;

}
else if(actaAnio.value == "")
{
  actaAnio.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el año del acta',
  })

  return false;
}
else if(actaAnio.value.length >= 5 || isNaN(actaAnio.value))
{
  actaAnio.focus()
    Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de año no es correcto',
  })

  return false;
}
else if(colegioOrigen.value == "")
{
  colegioOrigen.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el nombre del colegio de origen',
  })

  return false;
}
else if(gradoOrigen.value == "")
{
  gradoOrigen.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el grado del colegio de origen',
  })
  return false;

}
else if(gradoInscribir.value == "" || gradoInscribir.value == 0)
{
  gradoInscribir.focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste el grado a inscribir',
  })
  return false;

} else if(vivecon.value == 0 || vivecon.value == "")
{
  vivecon.focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste seleccionar con quien vives',
  })
  return false;
} 
else if(apeEmer.value == "")
{
  apeEmer.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el apellido de la persona de Emergencia'
  })
  return false;
}else if(nameEmer.value == "")
{
  nameEmer.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar el nombre de la persona de Emergencia'
  })
  return false;
}else if(lugarWork.value == "")
{
  lugarWork.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olviaste agregar el trabajo de la persona de Emergencia'
  })
  return false;
}else if(idDom.value == "")
{
  idDom.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste agregar la cedula de la persona de Emergencia'
  })
  return false;
}else if(idDom.value.length > 11 || idDom.value.length < 11 || isNaN(idDom.value))
{
  idDom.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'La cedula de la persona de Emergencia esta incorrecta'
  })
  return false;
}else if(telephoneNum.value == "")
{
  telephoneNum.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el telefono de la persona de Emergencia'
  })
  return false;
}else if(telephoneNum.value.length < 10 || telephoneNum.value.length > 10 || isNaN(telephoneNum.value))
{
  telephoneNum.focus()
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El telefono de la persona de Emergencia esta incorrecto'
  })
  return false;
}else if(emailPersona.value == "")
{
  emailPersona.focus();
  Swal.fire({
    icon: 'error',
    title: 'Eror',
    text: 'Olvidaste el email de la persona'
  })
  return false;
}
 


else if(vivecon.value == "1")
{
  madre();
  
}

else if(vivecon.value == "2")
{
  padre();
  
}else if(vivecon.value == "3")
{
  tutor();
   
}else if(vivecon.value == "4")
{

  padreMadre();
  
}


else{

  Swal.fire({
    icon: 'success',
    title: 'Buen trabajo',
    text: 'Datos guardados correctamente', 
  })

 
 
}



}

 






function madre()
{

  var madreApellido = document.getElementById('apelliMadre');
  var madreNombre =  document.getElementById('nombreMadre');
  var direccionMadre = document.getElementById('direccionMadre');
  var cedMadre = document.getElementById('cedMadre');
  var estudioMadre = document.getElementById('estudioMadre');
  var trabajoMadre = document.getElementById('trabajoMadre');
  var ocupacMadre = document.getElementById('ocupacMadre');
  var emailMadre = document.getElementById('emailMadre');
  var telefMadre = document.getElementById('telefMadre');
  var teloficMadre = document.getElementById('teloficMadre');
  var telefMovil = document.getElementById('telefMovil');

if(madreApellido.value == "")
{
  madreApellido.focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste el apellidode la madre',
  })

return false;
}else if(madreNombre.value == "")
{
  madreNombre.focus();
  Swal.fire({
    icon:'error',
    title: 'Error',
    text: 'Olvidaste el nombre la madre',
  })

  return false;

}
 
  
  
  
  else if(direccionMadre.value == "")
  {
    direccionMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar la direccion de la madre',
    })
    return false;

  }else if(cedMadre.value == "")
  {
    cedMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar la cedula de la madre',
    })

    return false;

  }else if(cedMadre.value.length > 11 || cedMadre.value.length < 11 || isNaN(cedMadre.value))
  {
    cedMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'La cedula de la madre esta incorrecta',
    })
    return false;

  }
  
  
  else if(estudioMadre.value == "")
  {

    estudioMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar los estudios de la madre',
    })
    return false;
  }else if(trabajoMadre.value == "")
  {

    trabajoMadre.focus();

    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar el trabajo de la madre',
    })
    return false;

  }else if(ocupacMadre.value == "")
  {

    ocupacMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar la ocupacion de la madre',
    })
    return false;
  }else if(emailMadre.value == "")
  {
     emailMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar el email de la madre',
    })
    return false;


  }
  else if(telefMadre.value == "")
  {


    telefMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar numero de telefono de la madre',
    })
    return false;
  }else if(telefMadre.value.length < 10 || telefMadre.value.length > 10 || isNaN(telefMadre.value))
  {



    telefMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto',
    })


    return false;
  }
  
  else if(teloficMadre.value == "")
  {


    teloficMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar numero de telefono de la  oficina de la madre',
    })
    return false;
  }else if(teloficMadre.value.length < 10 || teloficMadre.value.length > 10 || isNaN(teloficMadre.value))
  {



    teloficMadre.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto',
    })

    return false;

  }





  else if(telefMovil.value == "")
  {


    telefMovil.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'Olvidaste completar numero de telefono mobil de la madre',
    })
    return false;
  }else if(telefMovil.value.length < 10 || telefMovil.value.length > 10 || isNaN(telefMovil.value))
  {



    telefMovil.focus();
    Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto',
    })
    return false;
  }
}








function padre()
{
  var apellidoPadre = document.getElementById('apellidoPadre')
  var nombrePadre = document.getElementById('nombrePadre');
  var direccionPadre = document.getElementById('direccionPadre');
  var cedulaPadre = document.getElementById('cedulaPadre');
  var estudioPadre = document.getElementById('estudioPadre');
  var trabajoPadre = document.getElementById('trabajoPadre');
  var ocupacionPadre = document.getElementById('ocupacionPadre');
  var emailPadre = document.getElementById('emailPadre');
  var telefonoResidenc = document.getElementById('telefonoResidenc');
  var telefonoOfic = document.getElementById('telefonoOfic');
  var telefonoMov = document.getElementById('telefonoMov');

if(apellidoPadre.value == "")
{
  apellidoPadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste el apellido del padre',
  })
  return false;
}else if (nombrePadre.value == "")
{
  nombrePadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste los nombres del padre',
  })
  return false;
}else if (direccionPadre.value == "")
{
  direccionPadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste la direccion del padre',
  })
  return false;
}else if (cedulaPadre.value == "")
{
  cedulaPadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text:'Olvidaste la cedula del padre',
  })
  return false;
}else if (cedulaPadre.value.length > 11 || cedulaPadre.value.length > 11 || isNaN(cedulaPadre.value))
{
  cedulaPadre.focus();
  Swal.fire({
    icon:'error',
    title:'Error',
    text: 'La cedula del padre esta incorrecta',
  })
  return false;
}else if(estudioPadre.value == "")
{
  estudioPadre.focus();
  Swal.fire({
    icon:'error',
    title:'Error',
    text: 'Olvidaste completar los estudios del padre',

  })
  return false;
}else if(trabajoPadre.value == "")
{
  trabajoPadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el trabajo del padre',
    })
    return false;
}
else if(ocupacionPadre.value =="")
{
  ocupacionPadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar la ocupacion del padre',
  })
  return false;
  
}else if(emailPadre.value == "")
{
  emailPadre.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el email del padre',
})
return false;
  
}else if(telefonoResidenc.value == "")
{
  telefonoResidenc.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el telefono residencial del padre',
  })
  return false;
}else if(telefonoResidenc.value.length < 10 || telefonoResidenc.value.length > 10 || isNaN(telefMadre.value))
{ 
  telefonoResidenc.focus();
  Swal.fire({
      icon:'error',
      title: 'Error',
      text: 'El numero de telefono residencial no es correcto',
    })
    return false;
}
else if(telefonoOfic.value == "")
{
  telefonoOfic.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el telefono de la oficina del padre',
  })
  return false;
}else if(telefonoOfic.value.length < 10 || telefonoOfic.value.length > 10 || isNaN(telefonoOfic.value))
{
  telefonoOfic.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de telefono de oficina no es correcto',
  })
  return false;
}
else if (telefonoMov.value == "")
{
  telefonoMov.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Olvidaste completar el telefono movil del padre',
  })
  return false;
}else if(telefonoMov.value.length < 10 || telefonoMov.value.length > 10 || isNaN(telefonoMov.value))
{
  telefonoMov.focus();
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El numero de telefono movil no es correcto',
  })
  return false;
}
}


function tutor()
{

  var apellidoTutors = document.getElementById('apellidoTutors');
  var nombreTutor = document.getElementById('nombreTutor');
  var dirTutor = document.getElementById('dirTutor');
  var cedTutor = document.getElementById('cedTutor');
  var estudioTutor = document.getElementById('estudioTutor')
  var ocupacTutor = document.getElementById('ocupacTutor');
  var trabajoTutor = document.getElementById('trabajoTutor');
  var emailTutor = document.getElementById('emailTutor');
  var teleRes = document.getElementById('teleRes');
  var teleOfic = document.getElementById('teleOfic');
  var teleMov = document.getElementById('teleMov');
  if(apellidoTutors.value == "")
  {
    apellidoTutors.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el apellido del tutor',
    })
    return false;
  }
  else if(nombreTutor.value == "")
  {
    nombreTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el nombre del tutor',
    })
    return false;
  }
  else if(dirTutor.value == "")
  {
    dirTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar la direccion del tutor',
    })
    return false;
  }


  else if(cedTutor.value == "")
  {
    cedTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar la cedula del tutor',
    })
    return false;
  }else if(cedTutor.value.length < 11 || cedTutor.value.length > 11 || isNaN(cedTutor.value))
  {
    cedTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'La cedula del tutor esta incorrecta del tutor',
    })
    return false;
  }

  else if(estudioTutor.value == "")
  {
    estudioTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar los estudios del tutor',
    })
    return false;
  }

  else if(ocupacTutor.value == "")
  {
    ocupacTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar la ocupacion del tutor',
    })
    return false;
  }

  else if(trabajoTutor.value == "")
  {
    trabajoTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el trabajo del tutor',
    })
    return false;
  }

  else if(emailTutor.value == "")
  {
    emailTutor.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el email del tutor',
    })
    return false;
  }

  else if(teleRes.value == "")
  {
    teleRes.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste completar el numero de telefono del tutor',
    })
    return false;
  }
  
  else if(teleRes.value.length < 10 || teleRes.value.length > 10 || isNaN(teleRes.value))
  {
    teleRes.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto del tutor',
    })
    return false;
  }



  else if(teleOfic.value == "")
  {
    teleOfic.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste el numero de telefono del tutor',
    })
    return false;
  }
  
  else if(teleOfic.value.length < 10 || teleOfic.value.length > 10 || isNaN(teleOfic.value))
  {
    teleOfic.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto del tutor',
    })
    return false;

  }



  else if(teleMov.value == "")
  {
    teleMov.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Olvidaste el numero de telefono del tutor',
    })
    return false;
  }
  
  else if(teleMov.value.length < 10 || teleMov.value.length > 10 || isNaN(teleMov.value))
  {
    teleMov.focus();
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'El numero de telefono no es correcto del tutor',
    })
    return false;
  }
  


}
 
function padreMadre()
{

  padre();
  madre();


}

 




<?php


 
include('Backend\db.php');




    $Sede = $_POST['seleccionSede'];
    $apellidoEstudiante = $_POST['apellidoEstudiante'];
    $nombreEstudiante = $_POST['nombreEstudiante'];
    $DireccionEstudiante = $_POST['DireccionEstudiante'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $numeroActa = $_POST['numeroActa'];
    $actaFolio = $_POST['actaFolio'];
    $actaLibro = $_POST['actaLibro'];
    $actaAnio = $_POST['actaAnio'];
    $colegioOrigen = $_POST['colegioOrigen'];
    $gradoOrigen = $_POST['gradoOrigen'];
    $gradoInscribir = $_POST['gradoInscribir'];
    $vivecon = $_POST['vivecon'];
    $apellidoPadre = $_POST['apellidoPadre'];
    $nombrePadre = $_POST['nombrePadre'];
    $direccionPadre = $_POST['direccionPadre'];
    $cedulaPadre = $_POST['cedulaPadre'];
    $estudioPadre = $_POST['estudioPadre'];
    $trabajoPadre = $_POST['trabajoPadre'];
    $ocupacionPadre = $_POST['ocupacionPadre'];
    $emailPadre = $_POST['emailPadre'];
    $telefonoResidenc = $_POST['telefonoResidenc'];
    $telefonoOfic = $_POST['telefonoOfic'];
    $telefonoMov = $_POST['telefonoMov'];
    $apelliMadre = $_POST['apelliMadre'];
    $nombreMadre = $_POST['nombreMadre'];
    $direccionMadre = $_POST['direccionMadre'];
    $cedMadre = $_POST['cedMadre'];
    $estudioMadre = $_POST['estudioMadre'];
    $trabajoMadre = $_POST['trabajoMadre'];
    $ocupacMadre = $_POST['ocupacMadre'];
    $emailMadre = $_POST['emailMadre'];
    $telefMadre = $_POST['telefMadre'];
    $teloficMadre = $_POST['apellidoPadre'];

    $telefMovil = $_POST['telefMovil'];
    $apellidoTutors = $_POST['apellidoTutors'];
    $nombreTutor = $_POST['nombreTutor'];
    $dirTutor = $_POST['dirTutor'];
    $cedTutor = $_POST['cedTutor'];
    $estudioTutor = $_POST['estudioTutor'];
    $ocupacTutor = $_POST['ocupacTutor'];
    $trabajoTutor = $_POST['trabajoTutor'];
    $emailTutor = $_POST['emailTutor'];
    $teleRes = $_POST['teleRes'];
    $teleOfic = $_POST['teleOfic'];
    $teleMov = $_POST['teleMov'];
    $apeEmer = $_POST['apeEmer'];

    $nameEmer = $_POST['nameEmer'];
    $lugarWork = $_POST['lugarWork'];
    $idDom = $_POST['idDom'];
    $telephoneNum = $_POST['telephoneNum'];
    $emailPersona = $_POST['emailPersona'];
    $nameAux = $_POST['nameAux'];
    $lastname = $_POST['lastname'];
    $idcedula = $_POST['idcedula'];
    $telefCel = $_POST['telefCel'];
    $namePerson2 = $_POST['namePerson2'];
    $lastNamePer2 = $_POST['lastNamePer2'];
    $idPerson2 = $_POST['idPerson2'];
    $person2Telef = $_POST['person2Telef'];

    $namePerson3 = $_POST['namePerson3'];
    $lastnamePerson3 = $_POST['lastnamePerson3'];
    $idPerson3 = $_POST['idPerson3'];
    $telefMov3 = $_POST['telefMov3'];

    //falta terminar
    $Infeccciones = "";
    if(isset($_POST['Infecciones']))
    {

        $Infeccciones = implode(',', $_POST['Infecciones']);

    }
   

    $alergiasNi = $_POST['alergiasNi'];
    $medicamento = $_POST['medicamento'];
    $tipoSangre = $_POST['tipoSangre'];
    $enfermeAlumno = $_POST['enfermeAlumno'];
    $cirugia = $_POST['cirugia'];
    $causaCiru = $_POST['causaCiru'];
    $dateSurgery = $_POST['dateSurgery'];
    $medicoHead = $_POST['medicoHead'];
    $nameMedico = $_POST['nameMedico'];
    $movilMed = $_POST['movilMed'];


    
    $arsCompany = $_POST['arsCompany'];
    $numberPoliz = $_POST['numberPoliz'];
    $infoImport = $_POST['infoImport'];
 
    
    //FALTAN EN EL QUERY
    $actaNaci = $_POST['actaNaci'];
    $foto2x2 = $_POST['foto2x2'];
    $certiMed = $_POST['certiMed'];
    $regVacu = $_POST['regVacu'];
    $idFather = $_POST['idFather'];
    $idMother = $_POST['idMother'];
    $picSeg = $_POST['picSeg'];

 
  
  $sql = "INSERT INTO sede1(SEDE, APELLIDOESTUDIANTE, NOMBREESTUDIANTE, DIRECCIONESTUDIANTE, FECHANAC, NUMEROACTA, FOLIO, LIBRO, ACTAANIO, COLEGIOPRO, GRADOPRO, GRADOINSCRIBIR, VIVECON, PADREAPELLIDO, PADRENOMBRE, DIRECCIONPADRE, CEDULAPADRE, NIVELESTUDIOPADRE, LUGARTRABAJOPADRE, OCUPACIONPADRE, EMAILPADRE, TELEFONOREPADRE, TELEFONOOFIPADRE, TELEFONOMOVILPADRE, APELLIDOMADRE, NOMBREMADRE, DIRECCIONMADRE, CEDULAMADRE, NIVELESTUMADRE, LUGARTRABAMADRE, OCUPACIONMADRE, EMAILMADRE, TELERESIMADRE, TELEOFIMADRE, TELEMOBILMADRE, APELLIDOTUTOR0, NOMBRETUTOOR, DIRECCIONTUTOR, CEDULATUTOR, ESTUDIOSTUTOR, OCUPACIONTUTUR, TRABAJOTUTOR, EMAILTUTOR, TELERESTUTOR, TELEOFITUTOR, TELEMOBTUTOR, APELLIDOEMER, NOMBREEMER, LUGARTRABAJOEMER, CEDULAREMER, TELEERMER, EMAILEMER, NOMBREAUTO1, APELLIDOAUTO1, CEDULAAUTO1, TELECELAUTO1, NOMBREAUTO2, APELLIDOAUTO2, CEDULAAUTO2, TELEAUTO2, NOMBREAUTO3, APELLIDOAUTO3, CEDULAAUTO3, TELEAUTO3, Infecciones, Alergias, TIPOSANDRE, ENFERMEDADESPASADO, CIRUGIASIONO, causaCiru, dateSurgery, medicoHead, nameMedico, movilMed, arsCompany, numberPoliz, infoImport, ACTAURL, FOTOURL, CERTIFURL, VACUNAURL, CEDULAPADREURL, CEDULAMADREURL, SEGUROURL)
   VALUES('$Sede','$apellidoEstudiante','$nombreEstudiante','$DireccionEstudiante','$fechaNacimiento', '$numeroActa', '$actaFolio', '$actaLibro','$actaAnio', '$colegioOrigen', '$gradoOrigen', '$gradoInscribir','$vivecon', '$apellidoPadre','$nombrePadre', '$direccionPadre','$cedulaPadre', '$estudioPadre', '$trabajoPadre', '$emailPadre','$telefonoResidenc', '$telefonoOfic', '$telefonoMov','$apelliMadre', '$nombreMadre',  '$direccionMadre',   '$cedMadre',   '$estudioMadre', '$trabajoMadre',   '$ocupacMadre',  '$emailMadre', '$telefMadre',  '$teloficMadre','$telefMovil', '$apellidoTutors',  '$nombreTutor',  '$dirTutor',  '$cedTutor', '$estudioTutor',   '$ocupacTutor',   '$trabajoTutor',  '$emailTutor',  '$teleRes',   '$teleOfic',   '$teleMov','$apeEmer',  '$nameEmer',  '$lugarWork',   '$idDom' , '$telephoneNum', '$emailPersona', '$nameAux', '$lastname', '$idcedula', '$telefCel', '$namePerson2', '$lastNamePer2', '$idPerson2',  '$person2Telef',  '$namePerson3',  '$lastnamePerson3',  '$idPerson3',  '$telefMov3',  '$alergiasNi', '$Infeccciones', '$medicamento', '$tipoSangre', '$enfermeAlumno', '$cirugia', '$causaCiru', '$dateSurgery', '$medicoHead', '$nameMedico', '$movilMed',  '$arsCompany',  '$numberPoliz', '$infoImport', '$actaNaci', '$foto2x2', '$certiMed','$regVacu', '$idFather',  '$idMother', '$picSeg')"; 

    


if($conexion->query($sql) === true)
{


  echo "task saved";

}
 





 





?>
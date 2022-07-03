<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img\cropped-swswsws-1.png">
    <title>Centro Educativo Ms. Núñez</title>
</head>

<body>

    <?php require_once('header.php')?>


    <div class="container">


 <form id="task-form">
   

        <div class="row">
            <div class="col-md-12">
                <div class="mt-4">
                    <label for="seleccionSede">Selecciona la Sede *</label>
                    <select class="form-select" aria-label="Default select example" id="seleccionSede" name="seleccionSede">
                        <option selected value="0">Seleccione</option>
                        <option value="1">1. Sede Bella Vista</option>
                        <option value="2">2. Sede Alma Rosa</option>
                        <option value="3">3. Sede Arroyo Hondo</option>
                    </select>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="apellidoEstudiante" class="form-label">Apellido del Estudiante *</label>
                    <input type="text" id="apellidoEstudiante" name="apellidoEstudiante" class="form-control" aria-describedby="Apellido">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="nombreEstudiante" class="form-label">Nombres del Estudiante *</label>
                    <input type="text" id="nombreEstudiante" name="nombreEstudiante" class="form-control" aria-describedby="Nombre">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="DireccionEstudiante" class="form-label">Dirección del Estudiante *</label>
                    <input type="text" id="DireccionEstudiante" class="form-control" aria-describedby="Apellido" name="DireccionEstudiante">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="fechaNacimiento" class="form-label">Fecha de Nacimiento del Estudiante*</label>
                    <input type="date" id="fechaNacimiento" class="form-control" aria-describedby="Nombre" name="fechaNacimiento">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="mt-3"><label for="numeroActa" class="form-label">Número Único de Identidad de Acta
                        *</label>
                    <input type="text" id="numeroActa" class="form-control" aria-describedby="Apellido" name="numeroActa">
                </div>
            </div>
            <div class="col-sm-3 col-md-3 offset-md-2 col-lg-3 offset-lg-0">
                <div class="mt-3"><label for="actaFolio" class="form-label">Acta de Nacimiento Folio *</label>
                    <input type="text" id="actaFolio" class="form-control" name="actaFolio">
                </div>
            </div>

            <div class="col-sm-3 col-md-3 offset-md-2 col-lg-3 offset-lg-0">
                <div class="mt-3"><label for="actaLibro" class="form-label">Acta de Nacimiento Libro *</label>
                    <input type="text" id="actaLibro" class="form-control" aria-describedby="Nombre" name="actaLibro">
                </div>
            </div>

            <div class="col-sm-3 col-md-3 offset-md-2 col-lg-3 offset-lg-0">
                <div class="mt-3"><label for="actaAnio" class="form-label">Acta de Nacimiento Año *</label>
                    <input type="text" id="actaAnio" class="form-control" aria-describedby="Nombre" name="actaAnio">
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="mt-3"><label for="colegioOrigen" class="form-label">Colegio de Precendencia *</label>
                    <input type="text" id="colegioOrigen" class="form-control" aria-describedby="Apellido" name="colegioOrigen">
                </div>
            </div>
            <div class="col-sm-4 col-md-4 offset-md-2 col-lg-4 offset-lg-0">
                <div class="mt-3"><label for="gradoOrigen" class="form-label">Grado de Colegio de Precedencia
                        *</label>
                    <input type="text" id="gradoOrigen" class="form-control" aria-describedby="Nombre" name="gradoOrigen">
                </div>
            </div>

            <div class="col-sm-4 col-md-4 offset-md-2 col-lg-4 offset-lg-0">
                <div class="mt-4">
                    <label for="gradoInscribir">Grado a Inscribir *</label>
                    <select class="form-select" aria-label="Default select example" id="gradoInscribir" name="gradoInscribir">
                        <option selected value="0">Seleccione el Grado *</option>
                        <option value="1">Infante - 1 año</option>
                        <option value="2">Párvulo - 2 años</option>
                        <option value="3">Pre-kinder - 3 años</option>
                        <option value="4">Kinder - 4 años</option>
                        <option value="5">Pre-primerio - 5 años</option>
                        <option value="6">Primer grado - 6 años</option>
                        <option value="7">Segundo grado - 7 años</option>
                        <option value="8">Tercer grado - 8 años</option>
                        <option value="9">Cuarto grado - 9 años</option>
                        <option value="10">Quinto grado - 10 años</option>
                        <option value="11">Sexto grado - 11 años</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="mt-3">
                    <label for="vivecon">Vive con *</label>
                    <select class="form-select" aria-label="Default select example" id="vivecon" name="vivecon">
                        <option selected value="0">Seleccione</option>
                        <option value="1">Madre</option>
                        <option value="2">Padre</option>
                        <option value="3">Tutor</option>
                        <option value="4">Padre y madre</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="apellidoPadre" class="form-label">Apellidos del Padre *</label>
                    <input type="text" id="apellidoPadre" class="form-control" aria-describedby="Apellido" name="apellidoPadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="nombrePadre" class="form-label">Nombres del Padre *</label>
                    <input type="text" id="nombrePadre" class="form-control" aria-describedby="Nombre" name="nombrePadre">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="direccionPadre" class="form-label">Dirección del Padre *</label>
                    <input type="text" id="direccionPadre" class="form-control" aria-describedby="Apellido" name="direccionPadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="cedulaPadre" class="form-label">Cédula del Padre *</label>
                    <input type="text" id="cedulaPadre" class="form-control" aria-describedby="Nombre" name="cedulaPadre">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="estudioPadre" class="form-label">Nivel de Estudios del Padre *</label>
                    <input type="text" id="estudioPadre" class="form-control" aria-describedby="Apellido" name="estudioPadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="trabajoPadre" class="form-label">Lugar de Trabajo del Padre *</label>
                    <input type="text" id="trabajoPadre" class="form-control" aria-describedby="Nombre" name="trabajoPadre">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="ocupacionPadre" class="form-label">Ocupación del Padre *</label>
                    <input type="text" id="ocupacionPadre" class="form-control" aria-describedby="Apellido" name="ocupacionPadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="emailPadre" class="form-label">Email del Padre *</label>
                    <input type="email" id="emailPadre" class="form-control" aria-describedby="Nombre" name="emailPadre">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="telefonoResidenc" class="form-label">Teléfono Residencial *</label>
                    <input type="text" id="telefonoResidenc" class="form-control" aria-describedby="Apellido" name="telefonoResidenc">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="telefonoOfic" class="form-label">Teléfono de la Oficina *</label>
                    <input type="text" id="telefonoOfic" class="form-control" aria-describedby="Nombre" name="telefonoOfic">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="telefonoMov" class="form-label">Teléfono Móvil *</label>
                <input type="text" id="telefonoMov" class="form-control" aria-describedby="passwordHelpBlock" name="telefonoMov">
            </div>

        </div>


        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="apelliMadre" class="form-label">Apellidos de la Madre *</label>
                    <input type="text" id="apelliMadre" class="form-control" aria-describedby="Apellido" name="apelliMadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="nombreMadre" class="form-label">Nombres de la Madre *</label>
                    <input type="text" id="nombreMadre" class="form-control" aria-describedby="Nombre" name="nombreMadre">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="direccionMadre" class="form-label">Dirección de la Madre *</label>
                    <input type="text" id="direccionMadre" class="form-control" aria-describedby="Apellido" name="direccionMadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="cedMadre" class="form-label">Cédula de la Madre *</label>
                    <input type="text" id="cedMadre" class="form-control" aria-describedby="Nombre" name="cedMadre">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="estudioMadre" class="form-label">Nivel de Estudios de la Madre</label>
                    <input type="text" id="estudioMadre" class="form-control" aria-describedby="Apellido" name="estudioMadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="trabajoMadre" class="form-label">Lugar de Trabajo de la Madre *</label>
                    <input type="text" id="trabajoMadre" class="form-control" aria-describedby="Nombre" name="trabajoMadre">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="ocupacMadre" class="form-label">Ocupación de la Madre *</label>
                    <input type="text" id="ocupacMadre" class="form-control" aria-describedby="Apellido" name="ocupacMadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="emailMadre" class="form-label">Email de la Madre *</label>
                    <input type="email" id="emailMadre" class="form-control" aria-describedby="Nombre" name="emailMadre">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="telefMadre" class="form-label">Teléfono Residencial *</label>
                    <input type="text" id="telefMadre" class="form-control" aria-describedby="Apellido" name="telefMadre">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="teloficMadre" class="form-label">Teléfono de la Oficina *</label>
                    <input type="text" id="teloficMadre" class="form-control" aria-describedby="Nombre" name="teloficMadre">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <label for="telefMovil" class="form-label">Teléfono Móvil *</label>
                <input type="text" id="telefMovil" class="form-control" aria-describedby="passwordHelpBlock" name="telefMovil">
            </div>

        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="apellidoTutors" class="form-label">Apellidos del Tutor</label>
                    <input type="text" id="apellidoTutors" class="form-control" aria-describedby="Apellido" name="apellidoTutors">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="nombreTutor" class="form-label">Nombres del Tutor</label>
                    <input type="text" id="nombreTutor" class="form-control" aria-describedby="Nombre" name="nombreTutor">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="dirTutor" class="form-label">Dirección del Tutor</label>
                    <input type="text" id="dirTutor" class="form-control" aria-describedby="Apellido" name="dirTutor">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="cedTutor" class="form-label">Cédula del Tutor</label>
                    <input type="text" id="cedTutor" class="form-control" aria-describedby="Nombre" name="cedTutor">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="estudioTutor" class="form-label">Nivel de Estudios del Tutor</label>
                    <input type="text" id="estudioTutor" class="form-control" aria-describedby="Apellido" name="estudioTutor">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="ocupacTutor" class="form-label">Ocupación del Tutor</label>
                    <input type="text" id="ocupacTutor" class="form-control" aria-describedby="Nombre" name="ocupacTutor">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="trabajoTutor" class="form-label">Lugar de Trabajo del Tutor</label>
                    <input type="text" id="trabajoTutor" class="form-control" aria-describedby="Apellido" name="trabajoTutor">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="emailTutor" class="form-label">Email del Tutor</label>
                    <input type="email" id="emailTutor" class="form-control" aria-describedby="Nombre" name="emailTutor">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <div class="mt-3"><label for="teleRes" class="form-label">Teléfono Residencial</label>
                    <input type="text" id="teleRes" class="form-control" aria-describedby="Apellido" name="teleRes">
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div class="mt-3"><label for="teleOfic" class="form-label">Teléfono de la Oficina</label>
                    <input type="text" id="teleOfic" class="form-control" aria-describedby="Nombre" name="teleOfic">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="teleMov" class="form-label">Teléfono Móvil</label>
                <input type="text" id="teleMov" class="form-control" aria-describedby="passwordHelpBlock" name="teleMov">
            </div>
        </div>

        <div class="col-md-12">
            <div class="mt-3"><label for="apeEmer" class="form-label">Apellidos (Pariente o Tutor que pueda ser
                    contactado en caso de una Emergencia)</label>
                <input type="text" id="apeEmer" class="form-control" aria-describedby="Apellido" name="apeEmer">
            </div>


            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="nameEmer" class="form-label">Nombres</label>
                        <input type="text" id="nameEmer" class="form-control" aria-describedby="Nombre" name="nameEmer">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="lugarWork" class="form-label">Lugar de Trabajo</label>
                        <input type="text" id="lugarWork" class="form-control" aria-describedby="Nombre" name="lugarWork">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="idDom" class="form-label">Cédula</label>
                        <input type="text" id="idDom" class="form-control" aria-describedby="Nombre" name="idDom">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="telephoneNum" class="form-label">Teléfono Móvil</label>
                        <input type="text" id="telephoneNum" class="form-control" aria-describedby="Nombre" name="telephoneNum">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="emailPersona" class="form-label">Email</label>
                    <input type="email" id="emailPersona" class="form-control" name="emailPersona">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="nameAux" class="form-label">Nombres (Personas autorizadas a recoger su hijo)</label>
                    <input type="email" id="nameAux" class="form-control" name="nameAux">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="lastname" class="form-label">Apellidos</label>
                        <input type="text" id="lastname" class="form-control" aria-describedby="Nombre" name="lastname">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="idcedula" class="form-label">Cédula</label>
                        <input type="text" id="idcedula" class="form-control" aria-describedby="Nombre" name="idcedula">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="telefCel" class="form-label">Teléfono Móvil</label>
                    <input type="text" id="telefCel" class="form-control" aria-describedby="passwordHelpBlock" name="telefCel">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="namePerson2" class="form-label">Nombres (Persona 2)</label>
                        <input type="text" id="namePerson2" class="form-control" aria-describedby="Nombre" name="namePerson2">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="lastNamePer2" class="form-label">Apellidos</label>
                        <input type="text" id="lastNamePer2" class="form-control" aria-describedby="Nombre" name="lastNamePer2">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="idPerson2" class="form-label">Cédula</label>
                        <input type="text" id="idPerson2" class="form-control" aria-describedby="Nombre" name="idPerson2">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="person2Telef" class="form-label">Teléfono Móvil</label>
                        <input type="text" id="person2Telef" class="form-control" aria-describedby="Nombre" name="person2Telef">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="namePerson3" class="form-label">Nombres (Persona 3)</label>
                        <input type="text" id="namePerson3" class="form-control" aria-describedby="Nombre" name="namePerson3">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="lastnamePerson3" class="form-label">Apellidos</label>
                        <input type="text" id="lastnamePerson3" class="form-control" aria-describedby="Nombre" name="lastnamePerson3">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="idPerson3" class="form-label">Cédula</label>
                        <input type="text" id="idPerson3" class="form-control" aria-describedby="Nombre" name="idPerson3">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="telefMov3" class="form-label">Teléfono Móvil</label>
                        <input type="text" id="telefMov3" class="form-control" aria-describedby="Nombre" name="telefMov3">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        
        <div class="row mt-3">
            <label for="inputPassword5" class="form-label">Datos médicos del alumno (Marque si el niño o niña ha padecido alguna de estas infecciones)</label>
                <div class="col-md-4">
                    <div class="list-group">
                        <label class="list-group-item" for="sarampion">
                            <input class="form-check-input me-1" type="checkbox" value="Sarampión" id="sarampion" name="Infecciones[]">
                            Sarampión
                        </label>
                        <label class="list-group-item" for="tetanos">
                            <input class="form-check-input me-1" type="checkbox" value="Tétanos" id="tetanos" name="Infecciones[]">
                            Tétanos
                        </label>
                        <label class="list-group-item" for="polio">
                            <input class="form-check-input me-1" type="checkbox" value="Polio" id="polio" name="Infecciones[]">
                            Polio
                        </label>
                        <label class="list-group-item" for="otitis">
                            <input class="form-check-input me-1" type="checkbox" value="Otitis" id="otitis" name="Infecciones[]">
                            Otitis
                        </label>
                        <label class="list-group-item" for="hemofilia">
                            <input class="form-check-input me-1" type="checkbox" value="Hemofilia" id="hemofilia" name="Infecciones[]">
                            Hemofilia
                        </label>
                        <label class="list-group-item" for="malaria">
                            <input class="form-check-input me-1" type="checkbox" value="Malaria" id="malaria" name="Infecciones[]">
                            Malaria
                        </label>
                        <label class="list-group-item" for="varicela">
                            <input class="form-check-input me-1" type="checkbox" value="Varicela" id="varicela" name="Infecciones[]">
                            Varicela
                        </label>
                        <label class="list-group-item" for="difteria">
                            <input class="form-check-input me-1" type="checkbox" value="Difteria" id="difteria" name="Infecciones[]">
                            Difteria
                        </label>

                        <label class="list-group-item" for="tosFerina">
                            <input class="form-check-input me-1" type="checkbox" value="Tos ferina" id="tosFerina" name="Infecciones[]">
                            Tos ferina
                        </label>
                        <label class="list-group-item" for="fiebreTifoidea">
                            <input class="form-check-input me-1" type="checkbox" value="Fiebre tifoidea" id="fiebreTifoidea" name="Infecciones[]">
                            Fiebre tifoidea
                        </label>
                    </div>
                </div>


            <div class="col-md-4">
                <div class="list-group">
                    <label class="list-group-item" for="epilepsia">
                        <input class="form-check-input me-1" type="checkbox" value="Epilepsia" id="epilepsia" name="Infecciones[]">
                        Epilepsia
                    </label>
                    <label class="list-group-item" for="hepatitis">
                        <input class="form-check-input me-1" type="checkbox" value="Hepatitis" id="hepatitis" name="Infecciones[]">
                        Hepatitis
                    </label>
                    <label class="list-group-item" for="rubeola">
                        <input class="form-check-input me-1" type="checkbox" value="Rubéola" id="rubeola" name="rubeola"name="Infecciones[]">
                        Rubéola
                    </label>
                    <label class="list-group-item" for="escarlatina">
                        <input class="form-check-input me-1" type="checkbox" value="Escarlatina" id="escarlatina" name="Infecciones[]">
                        Escarlatina
                    </label>
                    <label class="list-group-item" for="anginas">
                        <input class="form-check-input me-1" type="checkbox" value="Anginas" id="anginas" name="Infecciones[]">
                        Anginas
                    </label>
                    <label class="list-group-item" for="amebiases">
                        <input class="form-check-input me-1" type="checkbox" value="Amebiasis" id="amebiasis" name="Infecciones[]">
                        Amebiasis
                    </label>
                    <label class="list-group-item" for="osteomielitis">
                        <input class="form-check-input me-1" type="checkbox" value="Osteomielitis" id="osteomielitis" name="Infecciones[]">
                        Osteomielitis
                    </label>
                    <label class="list-group-item" for="amigdalitis">
                        <input class="form-check-input me-1" type="checkbox" value="Amigdalitis" id="amigdalitis" name="Infecciones[]">
                        Amigdalitis
                    </label>
                    <label class="list-group-item" for="papera">
                        <input class="form-check-input me-1" type="checkbox" value="Papera" id="papera" name="Infecciones[]">
                        Papera
                    </label>
                    <label class="list-group-item" for="neumonia">
                        <input class="form-check-input me-1" type="checkbox" value="Neumonía" id="neumonia" name="Infecciones[]">
                        Neumonía
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="list-group">
                    <label class="list-group-item" for="tuberculosis">
                        <input class="form-check-input me-1" type="checkbox" value="Tuberculosis" id="tuberculosis" name="Infecciones[]">
                        Tuberculosis
                    </label>
                    <label class="list-group-item" for="anemia">
                        <input class="form-check-input me-1" type="checkbox" value="Anemia" id="anemia"name="Infecciones[]">
                        Anemia
                    </label>
                    <label class="list-group-item" for="meningitis">
                        <input class="form-check-input me-1" type="checkbox" value="Meningitis" id="meningitis" name="Infecciones[]">
                        Meningitis
                    </label>
                    <label class="list-group-item" for="apendicitis">
                        <input class="form-check-input me-1" type="checkbox" value="Apendicitis" id="apendicitis" name="Infecciones[]">
                        Apendicitis
                    </label>
                    <label class="list-group-item" for="dengue">
                        <input class="form-check-input me-1" type="checkbox" value="Dengue" id="dengue" name="Infecciones[]">
                        Dengue
                    </label>
                    <label class="list-group-item" for="colera">
                        <input class="form-check-input me-1" type="checkbox" value="Cólera" id="colera" name="Infecciones[]">
                        Cólera
                    </label>
                    <label class="list-group-item" for="gripe">
                        <input class="form-check-input me-1" type="checkbox" value="Gripe AH1 N1" id="gripe" name="Infecciones[]">
                        Gripe AH1 N1
                    </label>
                    <label class="list-group-item" for="migrana">
                        <input class="form-check-input me-1" type="checkbox" value="Migraña" id="migrana" name="Infecciones[]">
                        Migraña
                    </label>
                    <label class="list-group-item" for="varicela">
                        <input class="form-check-input me-1" type="checkbox" value="Varicela del mono" id="varicela" name="Infecciones[]">
                        Varicela del mono
                    </label>
                    <label class="list-group-item" for="ninguna">
                        <input class="form-check-input me-1" type="checkbox" value="Ninguna" id="ninguna" name="Infecciones[]" checked>
                        Ninguna
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="alergiasNi" class="form-label">Alergias a</label>
                        <input type="text" id="alergiasNi" class="form-control" aria-describedby="Nombre"
                            placeholder="Dejar en blanco sino padece ninguna" name="alergiasNi">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="medicamento" class="form-label">Medicamento a tomar en caso de
                            Emergencia</label>
                        <input type="text" id="medicamento" class="form-control" aria-describedby="Nombre" name="medicamento">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="tipoSangre" class="form-label">Tipo de Sangre</label>
                        <input type="text" id="tipoSangre" class="form-control" aria-describedby="Nombre" name="tipoSangre">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="enfermeAlumno" class="form-label">Enfermedades que ha tenido el
                            Alumno</label>
                        <input type="text" id="enfermeAlumno" class="form-control" aria-describedby="Nombre" name="enfermeAlumno">
                    </div>
                </div>
            </div>


            <div class="row mt-4">

                <label for="cirugia" class="form-label">¿El alumno ha sido intervenido quirurgicamente?</label>
                <div class="col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cirugia" id="cirugia" value="Si">
                        <label class="form-check-label" for="cirugia">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cirugia" id="cirugia" value="No" checked>
                        <label class="form-check-label" for="cirugia">
                            No
                        </label>
                    </div>



                </div>


            </div>





            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="causaCiru" class="form-label">¿De que fue la cirugia?</label>
                        <input type="text" id="causaCiru" class="form-control" aria-describedby="Nombre" name="causaCiru">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="dateSurgery" class="form-label">Fecha de la Cirugía</label>
                        <input type="date" id="dateSurgery" class="form-control" aria-describedby="Nombre" name="dateSurgery">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="medicoHead" class="form-label">Apellidos del Médico de
                            Cabecera</label>
                        <input type="text" id="medicoHead" class="form-control" aria-describedby="Nombre" name="medicoHead">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="nameMedico" class="form-label">Nombres del Médico de
                            Cabecera</label>
                        <input type="text" id="nameMedico" class="form-control" aria-describedby="Nombre" name="nameMedico">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="movilMed" class="form-label">Teléfono Móvil</label>
                        <input type="text" id="movilMed" class="form-control" aria-describedby="Nombre" name="movilMed">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="arsCompany" class="form-label">ARS o Compañía del Seguro
                            Médico *</label>
                        <input type="text" id="arsCompany" class="form-control" aria-describedby="Nombre" name="arsCompany">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="numberPoliz" class="form-label">No. de Poliza *</label>
                        <input type="text" id="numberPoliz" class="form-control" aria-describedby="Nombre" name="numberPoliz">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="mt-3"><label for="infoImport" class="form-label">Añada alguna otra información que
                            pueda ser importante para enfermería</label>
                        <textarea class="form-control" id="infoImport" class="form-control"
                            aria-describedby="Nombre" name="infoImport"></textarea>
                    </div>
                </div>


                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <label for="actaNaci" class="form-label">Foto de Acta de Nacimiento *</label>
                    <input class="form-control" type="file" id="actaNaci" name="actaNaci">
                </div>

                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <label for="foto2x2" class="form-label">Foto 2x2 *</label>
                    <input class="form-control" type="file" id="foto2x2" name="foto2x2">
                </div>

                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <label for="certiMed" class="form-label">Certificado Médico *</label>
                    <input class="form-control" type="file" id="certiMed" name="certiMed">
                </div>

                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <label for="regVacu" class="form-label">Copia de registro de vacunas al día *</label>
                    <input class="form-control" type="file" id="regVacu" name="regVacu">
                </div>

                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <label for="idFather" class="form-label">Foto de la Cédula del Padre *</label>
                    <input class="form-control" type="file" id="idFather" name="idFather">
                </div>

                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <label for="idMother" class="form-label">Foto de la Cédula de la Madre  *</label>
                    <input class="form-control" type="file" id="idMother" name="idMother">
                </div>

                <div class="mb-3">
                    <label for="picSeg" class="form-label">Foto del Seguro *</label>
                    <input class="form-control" type="file" id="picSeg" name="picSeg">
                </div>

            </div>

        <div class="row justify-content-end allign-items-end">
        <div class="col-md-1">
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>



        </div>
        </form>
        </div>

    </div>
    </div>
   

    <?php require_once('footer.php')?>

</body>

</html>




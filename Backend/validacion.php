<?php

require('db.php');


/*$sql = "CREATE TABLE SEDE1(
    Id INT(50) AUTO_INCREMENT PRIMARY KEY,
    SEDE VARCHAR(10) NOT NULL,
    APELLIDOESTUDIANTE VARCHAR(25) NOT NULL,
    NOMBREESTUDIANTE VARCHAR(25) NOT NULL,
    DIRECCIONESTUDIANTE VARCHAR(50) NOT NULL,
    FECHANAC DATE NOT NULL,
    NUMEROACTA INT(25) NOT NULL,
    FOLIO INT(25) NOT NULL,
    LIBRO INT(25) NOT NULL,
    ACTAANIO INT(25) NOT NULL,
    COLEGIOPRO VARCHAR(25) NOT NULL,
    GRADOPRO VARCHAR(25) NOT NULL,
    GRADOINSCRIBIR VARCHAR(25) NOT NULL,
    VIVECON VARCHAR(25) NOT NULL,
    PADREAPELLIDO VARCHAR(25),
    PADRENOMBRE VARCHAR(25),
    DIRECCIONPADRE VARCHAR(25),
    CEDULAPADRE VARCHAR(25),
    NIVELESTUDIOPADRE VARCHAR(25),
    LUGARTRABAJOPADRE TEXT(25),
    OCUPACIONPADRE TEXT(25),
    EMAILPADRE TEXT(25),
    TELEFONOREPADRE TEXT(25),
    TELEFONOOFIPADRE TEXT(25),
    TELEFONOMOVILPADRE TEXT(25),
    APELLIDOMADRE TEXT(25),
    NOMBREMADRE TEXT(25),
    DIRECCIONMADRE TEXT(25),
    CEDULAMADRE TEXT(25),
    NIVELESTUMADRE TEXT(50),
    LUGARTRABAMADRE TEXT(25),
    OCUPACIONMADRE TEXT(25),
    EMAILMADRE TEXT(25),
    TELERESIMADRE TEXT(25),
    TELEOFIMADRE TEXT(25),
    TELEMOBILMADRE TEXT(25),
    APELLIDOTUTOR0 TEXT(25),
    NOMBRETUTOOR TEXT(25),
    DIRECCIONTUTOR TEXT(25),
    CEDULATUTOR TEXT(25),
    ESTUDIOSTUTOR TEXT(25),
    OCUPACIONTUTUR TEXT(25),
    TRABAJOTUTOR TEXT(25),
    EMAILTUTOR TEXT(25),
    TELERESTUTOR TEXT(25),
    TELEOFITUTOR TEXT(25),
    TELEMOBTUTOR TEXT(25),
    APELLIDOEMER TEXT(25) NOT NULL,
    NOMBREEMER TEXT(25) NOT NULL,
    LUGARTRABAJOEMER TEXT(25) NOT NULL,
    CEDULAREMER TEXT(25) NOT NULL,
    TELEERMER TEXT(25) NOT NULL,
    EMAILEMER TEXT(25) NOT NULL,
    NOMBREAUTO1 TEXT(25),
    APELLIDOAUTO1 TEXT(25),
    CEDULAAUTO1 TEXT(25),
    TELECELAUTO1 TEXT(25),
    NOMBREAUTO2 TEXT(25),
    APELLIDOAUTO2 TEXT(25),
    CEDULAAUTO2 TEXT(25),
    TELEAUTO2 TEXT(25),
    NOMBREAUTO3 TEXT(25),
    APELLIDOAUTO3 TEXT(25),
    CEDULAAUTO3 TEXT(25),
    TELEAUTO3 TEXT(25),
    Sarampión TEXT(25),
    Tétanos TEXT(25),
    Polio   TEXT(25),
    Otitis TEXT(25),
    Hemofilia TEXT(25),
    Malaria TEXT(25),
    Varicela TEXT(25),
    Difteria TEXT(25),
    Tosferina TEXT(25),
    Fiebretifoidea TEXT(25),
    Epilepsia  TEXT(25),
    Hepatitis TEXT(25),
    Rubéola TEXT(25),
    Escarlatina TEXT(25),
    Anginas TEXT(25),
    Amebiasis TEXT(25),
    Osteomielitis TEXT(25),
    Amigdalitis TEXT(25),
    Papera TEXT(25),
    Neumonía TEXT(25),
    Tuberculosis TEXT(25),
    Anemia VARCHAR(25),
    Meningitis VARCHAR(25),
    Apendicitis VARCHAR(25),
    Dengue VARCHAR(25),
    Cólera VARCHAR(25),
    GripeAH1N1 VARCHAR(25),
    Migraña VARCHAR(25),
    VaricelaDelmono VARCHAR(25),
    Ninguna VARCHAR(25),
    ALERGIAS VARCHAR(25),
    MEDICAMENTO VARCHAR(25),
    TIPOSANDRE VARCHAR(25),
    ENFERMEDADESPASADO VARCHAR(25),
    CIRUGIASIONO VARCHAR(3),
    causaCiru VARCHAR(25),
    dateSurgery VARCHAR(25),
    medicoHead  VARCHAR(25),
    nameMedico VARCHAR(25),
    movilMed VARCHAR(25),
    arsCompany VARCHAR(25),
    numberPoliz VARCHAR(25),
    infoImport VARCHAR(100),
    ACTAURL VARCHAR(255), 
    FOTOURL VARCHAR(255),
    CERTIFURL VARCHAR(255),
    VACUNAURL VARCHAR(255),
    CEDULAPADREURL  VARCHAR(255),
    CEDULAMADREURL  VARCHAR(255),
    SEGUROURL  VARCHAR(255),
    TIMESTAMP TIMESTAMP



)";*/


/*$sql = "CREATE TABLE SEDE2(
    Id INT(50) AUTO_INCREMENT PRIMARY KEY,
    SEDE VARCHAR(10) NOT NULL,
    APELLIDOESTUDIANTE VARCHAR(25) NOT NULL,
    NOMBREESTUDIANTE VARCHAR(25) NOT NULL,
    DIRECCIONESTUDIANTE VARCHAR(50) NOT NULL,
    FECHANAC DATE NOT NULL,
    NUMEROACTA INT(25) NOT NULL,
    FOLIO INT(25) NOT NULL,
    LIBRO INT(25) NOT NULL,
    ACTAANIO INT(25) NOT NULL,
    COLEGIOPRO VARCHAR(25) NOT NULL,
    GRADOPRO VARCHAR(25) NOT NULL,
    GRADOINSCRIBIR VARCHAR(25) NOT NULL,
    VIVECON VARCHAR(25) NOT NULL,
    PADREAPELLIDO VARCHAR(25),
    PADRENOMBRE VARCHAR(25),
    DIRECCIONPADRE VARCHAR(25),
    CEDULAPADRE VARCHAR(25),
    NIVELESTUDIOPADRE VARCHAR(25),
    LUGARTRABAJOPADRE TEXT(25),
    OCUPACIONPADRE TEXT(25),
    EMAILPADRE TEXT(25),
    TELEFONOREPADRE TEXT(25),
    TELEFONOOFIPADRE TEXT(25),
    TELEFONOMOVILPADRE TEXT(25),
    APELLIDOMADRE TEXT(25),
    NOMBREMADRE TEXT(25),
    DIRECCIONMADRE TEXT(25),
    CEDULAMADRE TEXT(25),
    NIVELESTUMADRE TEXT(50),
    LUGARTRABAMADRE TEXT(25),
    OCUPACIONMADRE TEXT(25),
    EMAILMADRE TEXT(25),
    TELERESIMADRE TEXT(25),
    TELEOFIMADRE TEXT(25),
    TELEMOBILMADRE TEXT(25),
    APELLIDOTUTOR0 TEXT(25),
    NOMBRETUTOOR TEXT(25),
    DIRECCIONTUTOR TEXT(25),
    CEDULATUTOR TEXT(25),
    ESTUDIOSTUTOR TEXT(25),
    OCUPACIONTUTUR TEXT(25),
    TRABAJOTUTOR TEXT(25),
    EMAILTUTOR TEXT(25),
    TELERESTUTOR TEXT(25),
    TELEOFITUTOR TEXT(25),
    TELEMOBTUTOR TEXT(25),
    APELLIDOEMER TEXT(25) NOT NULL,
    NOMBREEMER TEXT(25) NOT NULL,
    LUGARTRABAJOEMER TEXT(25) NOT NULL,
    CEDULAREMER TEXT(25) NOT NULL,
    TELEERMER TEXT(25) NOT NULL,
    EMAILEMER TEXT(25) NOT NULL,
    NOMBREAUTO1 TEXT(25),
    APELLIDOAUTO1 TEXT(25),
    CEDULAAUTO1 TEXT(25),
    TELECELAUTO1 TEXT(25),
    NOMBREAUTO2 TEXT(25),
    APELLIDOAUTO2 TEXT(25),
    CEDULAAUTO2 TEXT(25),
    TELEAUTO2 TEXT(25),
    NOMBREAUTO3 TEXT(25),
    APELLIDOAUTO3 TEXT(25),
    CEDULAAUTO3 TEXT(25),
    TELEAUTO3 TEXT(25),
    Sarampión TEXT(25),
    Tétanos TEXT(25),
    Polio   TEXT(25),
    Otitis TEXT(25),
    Hemofilia TEXT(25),
    Malaria TEXT(25),
    Varicela TEXT(25),
    Difteria TEXT(25),
    Tosferina TEXT(25),
    Fiebretifoidea TEXT(25),
    Epilepsia  TEXT(25),
    Hepatitis TEXT(25),
    Rubéola TEXT(25),
    Escarlatina TEXT(25),
    Anginas TEXT(25),
    Amebiasis TEXT(25),
    Osteomielitis TEXT(25),
    Amigdalitis TEXT(25),
    Papera TEXT(25),
    Neumonía TEXT(25),
    Tuberculosis TEXT(25),
    Anemia VARCHAR(25),
    Meningitis VARCHAR(25),
    Apendicitis VARCHAR(25),
    Dengue VARCHAR(25),
    Cólera VARCHAR(25),
    GripeAH1N1 VARCHAR(25),
    Migraña VARCHAR(25),
    VaricelaDelmono VARCHAR(25),
    Ninguna VARCHAR(25),
    ALERGIAS VARCHAR(25),
    MEDICAMENTO VARCHAR(25),
    TIPOSANDRE VARCHAR(25),
    ENFERMEDADESPASADO VARCHAR(25),
    CIRUGIASIONO VARCHAR(3),
    causaCiru VARCHAR(25),
    dateSurgery VARCHAR(25),
    medicoHead  VARCHAR(25),
    nameMedico VARCHAR(25),
    movilMed VARCHAR(25),
    arsCompany VARCHAR(25),
    numberPoliz VARCHAR(25),
    infoImport VARCHAR(100),
    ACTAURL VARCHAR(255), 
    FOTOURL VARCHAR(255),
    CERTIFURL VARCHAR(255),
    VACUNAURL VARCHAR(255),
    CEDULAPADREURL  VARCHAR(255),
    CEDULAMADREURL  VARCHAR(255),
    SEGUROURL  VARCHAR(255),
    TIMESTAMP TIMESTAMP



)";*/
/*
$sql = "CREATE TABLE SEDE3(
    Id INT(50) AUTO_INCREMENT PRIMARY KEY,
    SEDE VARCHAR(10) NOT NULL,
    APELLIDOESTUDIANTE VARCHAR(25) NOT NULL,
    NOMBREESTUDIANTE VARCHAR(25) NOT NULL,
    DIRECCIONESTUDIANTE VARCHAR(50) NOT NULL,
    FECHANAC DATE NOT NULL,
    NUMEROACTA INT(25) NOT NULL,
    FOLIO INT(25) NOT NULL,
    LIBRO INT(25) NOT NULL,
    ACTAANIO INT(25) NOT NULL,
    COLEGIOPRO VARCHAR(25) NOT NULL,
    GRADOPRO VARCHAR(25) NOT NULL,
    GRADOINSCRIBIR VARCHAR(25) NOT NULL,
    VIVECON VARCHAR(25) NOT NULL,
    PADREAPELLIDO VARCHAR(25),
    PADRENOMBRE VARCHAR(25),
    DIRECCIONPADRE VARCHAR(25),
    CEDULAPADRE VARCHAR(25),
    NIVELESTUDIOPADRE VARCHAR(25),
    LUGARTRABAJOPADRE TEXT(25),
    OCUPACIONPADRE TEXT(25),
    EMAILPADRE TEXT(25),
    TELEFONOREPADRE TEXT(25),
    TELEFONOOFIPADRE TEXT(25),
    TELEFONOMOVILPADRE TEXT(25),
    APELLIDOMADRE TEXT(25),
    NOMBREMADRE TEXT(25),
    DIRECCIONMADRE TEXT(25),
    CEDULAMADRE TEXT(25),
    NIVELESTUMADRE TEXT(50),
    LUGARTRABAMADRE TEXT(25),
    OCUPACIONMADRE TEXT(25),
    EMAILMADRE TEXT(25),
    TELERESIMADRE TEXT(25),
    TELEOFIMADRE TEXT(25),
    TELEMOBILMADRE TEXT(25),
    APELLIDOTUTOR0 TEXT(25),
    NOMBRETUTOOR TEXT(25),
    DIRECCIONTUTOR TEXT(25),
    CEDULATUTOR TEXT(25),
    ESTUDIOSTUTOR TEXT(25),
    OCUPACIONTUTUR TEXT(25),
    TRABAJOTUTOR TEXT(25),
    EMAILTUTOR TEXT(25),
    TELERESTUTOR TEXT(25),
    TELEOFITUTOR TEXT(25),
    TELEMOBTUTOR TEXT(25),
    APELLIDOEMER TEXT(25) NOT NULL,
    NOMBREEMER TEXT(25) NOT NULL,
    LUGARTRABAJOEMER TEXT(25) NOT NULL,
    CEDULAREMER TEXT(25) NOT NULL,
    TELEERMER TEXT(25) NOT NULL,
    EMAILEMER TEXT(25) NOT NULL,
    NOMBREAUTO1 TEXT(25),
    APELLIDOAUTO1 TEXT(25),
    CEDULAAUTO1 TEXT(25),
    TELECELAUTO1 TEXT(25),
    NOMBREAUTO2 TEXT(25),
    APELLIDOAUTO2 TEXT(25),
    CEDULAAUTO2 TEXT(25),
    TELEAUTO2 TEXT(25),
    NOMBREAUTO3 TEXT(25),
    APELLIDOAUTO3 TEXT(25),
    CEDULAAUTO3 TEXT(25),
    TELEAUTO3 TEXT(25),
    Sarampión TEXT(25),
    Tétanos TEXT(25),
    Polio   TEXT(25),
    Otitis TEXT(25),
    Hemofilia TEXT(25),
    Malaria TEXT(25),
    Varicela TEXT(25),
    Difteria TEXT(25),
    Tosferina TEXT(25),
    Fiebretifoidea TEXT(25),
    Epilepsia  TEXT(25),
    Hepatitis TEXT(25),
    Rubéola TEXT(25),
    Escarlatina TEXT(25),
    Anginas TEXT(25),
    Amebiasis TEXT(25),
    Osteomielitis TEXT(25),
    Amigdalitis TEXT(25),
    Papera TEXT(25),
    Neumonía TEXT(25),
    Tuberculosis TEXT(25),
    Anemia VARCHAR(25),
    Meningitis VARCHAR(25),
    Apendicitis VARCHAR(25),
    Dengue VARCHAR(25),
    Cólera VARCHAR(25),
    GripeAH1N1 VARCHAR(25),
    Migraña VARCHAR(25),
    VaricelaDelmono VARCHAR(25),
    Ninguna VARCHAR(25),
    ALERGIAS VARCHAR(25),
    MEDICAMENTO VARCHAR(25),
    TIPOSANDRE VARCHAR(25),
    ENFERMEDADESPASADO VARCHAR(25),
    CIRUGIASIONO VARCHAR(3),
    causaCiru VARCHAR(25),
    dateSurgery VARCHAR(25),
    medicoHead  VARCHAR(25),
    nameMedico VARCHAR(25),
    movilMed VARCHAR(25),
    arsCompany VARCHAR(25),
    numberPoliz VARCHAR(25),
    infoImport VARCHAR(100),
    ACTAURL VARCHAR(255), 
    FOTOURL VARCHAR(255),
    CERTIFURL VARCHAR(255),
    VACUNAURL VARCHAR(255),
    CEDULAPADREURL  VARCHAR(255),
    CEDULAMADREURL  VARCHAR(255),
    SEGUROURL  VARCHAR(255),
    TIMESTAMP TIMESTAMP



)";*/










if($conexion->query($sql) === true)
{

echo "La tabla se creo correctamente";

}else
{
    die("Error al crear la tabla: " . $conexion->error);
}









?>
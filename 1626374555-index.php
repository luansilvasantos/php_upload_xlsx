<?php
session_start(); //Inicializar a sessão com PHP
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

    <title>Importar TXT</title>
</head>

<body>
    <!--Titulo do Formulário-->
    <h1>Importar dados do arquivo TXT</h1>
    <!--Formulário com PHP para fazer upload de arquivo com PHP-->
    <form action="upload.php" class="dropzone" id="meuPrimeiroDropzone">
    </form>
    <script>
    Dropzone.options.meuPrimeiroDropzone = {
        paramName: "fileToUpload",
        dictDefaultMessage: "Arraste seus arquivos para cá!",
        maxFilesize: 15,
        accept: function(file, done) {

            // if (file.name == "olamundo.png") {
            //     done("Arquivo não aceito.");

            // } else {
            //     done();

            // }

        }

    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
</body>

</html>
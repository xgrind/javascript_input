<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <style>
        .form-group {
            padding: 10px;
        }
        .btn-apagar {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Adicionar Campo</h1>
    <form action="">
        <div id="formulario">
            <div class="form-group">
                <label for="">Aula: </label>
                <input type="text" name="titulo[]" id="" placeholder="Nome da aula">
                <button type="button" id="add-campo"> + </button>
            </div>            
        </div>
        <div class="form-group">
            <input type="button" name="CadAulas" id="CadAulas" value="Cadastrar">
        </div>
    </form>


    

    <script>
        var cont = 1;

        $("#add-campo").click(function() {           
            cont++; 	
            $("#formulario").append('<div class="form-group" id="campo'+ cont +'"><label for="">Aula: </label><input type="text" name="titulo[]" id="" placeholder="Nome da aula"><button id="'+ cont +'" class="btn-apagar"> - </button></div>');
        });

        $( "form" ).on( "click", ".btn-apagar", function() {
            var button_id = $(this).attr( "id" );
            $( '#campo' + button_id + '' ).remove();
        });

        $( "#CadAulas" ).click(function() {
            alert('Cadastrar');
        });
    </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuelos</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Editar Vuelo</h2>
                <br>
                <form action="{{ route('actualizar.vuelo', $vuelo->numeroVuelo) }}" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="color">Numero:</label>
                        <input type="text" class="form-control" value="{{ $vuelo->numeroVuelo }}" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Origen</label>
                        <input type="text" name="origen" id="origen" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Destino:</label>
                        <input type="text" name="destino" id="destino" class="form-control"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
                <script>
                        document.getElementById('miFormulario').addEventListener('submit', function(event) {
                        event.preventDefault(); // Detiene el envío del formulario predeterminado
                        var formData = new FormData(this);
                        
                        fetch(this.action, {
                            method: 'PUT',
                            body: formData
                        })
                        .then(response => {
                            // Manejar la respuesta
                        })
                        .catch(error => {
                            // Manejar errores
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</body>
</html>
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
                <h2>Agregar asiento a vuelo</h2>
                <br>
                <form action="{{ route('asiento.actualizar', $buscarVuelo->numeroVuelo ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="metros">Numero Vuelo</label>
                    <input type="text"class="form-control" value = "{{ $buscarVuelo->numeroVuelo }}" readonly/>
                </div>

                <div class="form-group">
                    <label for="metros">Fecha Vuelo</label>
                    <input class="form-control" value="{{ $buscarVuelo->fechaSalida }}" readonly/>
                </div>


                <form >
                    <div class="form-group">
                        <label for="color">Numero Asiento:</label>
                        <input type="text" name="numeroAsiento" id="numeroAsiento" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="color">Id Tipo Asiento:</label>
                        <input type="text" name="idTipoAsiento" id="idTipoAsiento" class="form-control" />
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</body>
</html>
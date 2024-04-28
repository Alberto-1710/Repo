<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Asientos</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Editar Tipo Asiento</h2>
                <br>
                <div class="form-group">
                    <label for="color">Id Tipo Asiento:</label>
                    <input type="text" class="form-control" name="idTipoAsiento" id="idTipoAsiento" value="{{ $tipoAsiento->idTipoAsiento }}"/>
                </div>

                <form action="{{ route('tipoasiento.actualizar', $tipoAsiento->idTipoAsiento)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="color">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $tipoAsiento->descripcion }}"/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio" value="{{ $tipoAsiento->precio}}"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Estado:</label>
                        <input type="text" class="form-control" name="estado" id="estado" value="{{ $tipoAsiento->estado }}"/>
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
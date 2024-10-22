<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Factura</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php echo $menu; ?>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px;">
            <div class="col-md-8">
                <h2 class="text-center">Nueva Factura</h2>
                <form method="POST" action="<?php /*echo site_url("");*/ ?>">
                    <div id="productos-container">
                        <div class="form-group">
                            <label for="producto">Productos</label>
                            <div class="row align-items-center mb-2">
                                <div class="col">
                                    <select class="form-select" aria-label="Selector de producto" name="producto[]">
                                        <option selected>Producto</option>
                                        <option value="1">Producto1</option>
                                        <option value="2">Producto2</option>
                                        <option value="3">Producto3</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                                                            <!-- controlar aca el limite por stock -->
                                    <input type="number" class="form-control" name="cantidad[]" min="1" max="100" step="1" value="1">
                                </div>
                                <div class="col-auto">
                                    <p class="mb-0">Precio</p>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger remove-product"><i class="bi bi-trash-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-primary" id="add-product">Agregar otro producto</button>
                        <button type="submit" class="btn btn-success btn-block mt-3">Facturar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
    <script>
    document.getElementById('add-product').addEventListener('click', function() {
        const productosContainer = document.getElementById('productos-container');

        const newProductRow = document.createElement('div');
        newProductRow.classList.add('row', 'align-items-center', 'mb-2');
        newProductRow.innerHTML = `
            <div class="col">
                <select class="form-select" aria-label="Selector de producto" name="producto[]">
                    <option selected>Producto</option>
                    <option value="1">Producto1</option>
                    <option value="2">Producto2</option>
                    <option value="3">Producto3</option>
                </select>
            </div>
            <div class="col-auto">
                <input type="number" class="form-control" name="cantidad[]" min="1" max="100" step="1" value="1">
            </div>
            <div class="col-auto">
                <p class="mb-0">Precio</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-danger remove-product"><i class="bi bi-trash-fill"></i></button>
            </div>
        `;

        productosContainer.appendChild(newProductRow);
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-product')) {
            event.target.closest('.row').remove();
        }
    });
    </script>
</body>
</html>
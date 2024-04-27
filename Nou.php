<?php
 
require_once('Connexio.php');
require_once('Header.php');

/**
 * @author Joan Rebassa Oliver
 * 
 * Classe per emplenar ses dades d'un nou producte
 * 
 * Genera un formulari Html per introduïr per teclat els valors 
 * dels camps id, nom, descripció, preu i categoria (tots els camps
 * són requerits) d'un nou producte a inserir en sa BBDD MariaDB la_meva_botiga.
 * En fer submit del formulari crida al script Inserir.php per inserir 
 * el nou registre en BBDD.
 * 
 */
class Nou {

    /** 
     * Mètode per mostrar el formulari d'alta d'un producte
     */
    public function mostrarFormulariAlta() {

        // Obtiene la conexión a la base de datos
        $conexionObj = new Connexio();
        $conexion = $conexionObj->obtenirConnexio();

        // Consulta para obtener el siguiente id de producto disponible
        $consulta = "SELECT max(id)+1 nouId FROM productes;";
        $resultado = $conexion->query($consulta);
        $producto = $resultado->fetch_assoc();

        // Imprime la estructura HTML del formulario de alta
        echo '<!DOCTYPE html>
             <html lang="es">
             <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
               <title>Alta de producte</title>
               <!-- Enlace a Bootstrap desde su repositorio remoto -->
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
             </head>
             <body>
               <div class="container mt-5" style="margin-bottom: 200px">
                   <h2>Alta de producte</h2>
                   <hr>
                   <form action="Inserir.php" method="POST">                            
                       <input type="hidden" name="id" value="' . $producto['nouId'] . '">
                              
                       <div class="mb-3">
                           <label for="id" class="form-label">Id Producte:</label>
                           ' . $producto['nouId'] . '
                       </div>

                       <div class="mb-3">
                           <label for="nom" class="form-label">Nombre:</label>
                           <input type="text" name="nom" class="form-control" required>
                       </div>

                       <div class="mb-3">
                           <label for="descripcio" class="form-label">Descripción:</label>
                           <input type="text" name="descripcio" class="form-control" required>
                       </div>

                       <div class="mb-3">
                           <label for="preu" class="form-label">Precio:</label>
                           <input type="number" name="preu" class="form-control" required>
                       </div>

                       <div class="mb-3">
                           <label for="categoria" class="form-label">Categoría:</label>
                           <select name="categoria" class="form-select" required>
                               <!-- Opciones del selector de categorías -->
                               <option value="1">Electrónicos</option>
                               <option value="2">Roba</option>
                               <!-- Agrega más opciones según sea necesario -->
                           </select>
                       </div>

                       <!-- Agrega más campos según sea necesario -->

                       <hr>
                       <!-- Botones de guardar y cancelar -->
                       <input type="submit" value="Guardar" class="btn btn-primary">
                       <a href="Principal.php" class="btn btn-secondary">Cancelar</a>
                   </form>
               </div>';
            
        // Incluye el pie de página
        require_once('Footer.php');

        // Cierra la conexión a la base de datos
        $conexion->close();
    }
}

// Crea una instancia de la clase Nou y llama al método mostrarFormulariAlta
$nouProducto = new Nou();
$nouProducto->mostrarFormulariAlta();

?>

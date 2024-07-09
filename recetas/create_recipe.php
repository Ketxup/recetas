<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Receta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Crear una Nueva Receta</h1>
    </header>
    
    <main>
        <section id="recipe-form">
            <form action="add_recipe.php" method="post">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
                
                <label for="ingredients">Ingredientes:</label>
                <textarea id="ingredients" name="ingredients" required></textarea>
                
                <label for="instructions">Instrucciones:</label>
                <textarea id="instructions" name="instructions" required></textarea>
                
                <button type="submit">Añadir Receta</button>
            </form>
        </section>

        <!-- Botón para volver a la página principal -->
        <section id="navigation">
            <a href="index.php" class="button">Volver a Inicio</a>
        </section>
    </main>
</body>
</html>

<?php
// edit_recipe.php
$index = $_GET['index'];
$recipesFile = 'recipes.json';
if (file_exists($recipesFile)) {
    $recipes = json_decode(file_get_contents($recipesFile), true);
    $recipe = $recipes[$index];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Receta</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo de estilos CSS -->
</head>
<body>
    <header>
        <h1>Editar Receta</h1> <!-- Título principal de la página -->
    </header>
    
    <main>
        <section id="recipe-form">
            <h2>Modificar Receta</h2>
            <form action="update_recipe.php" method="post">
                <input type="hidden" name="index" value="<?php echo $index; ?>">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($recipe['title']); ?>" required>
                
                <label for="ingredients">Ingredientes:</label>
                <textarea id="ingredients" name="ingredients" required><?php echo htmlspecialchars($recipe['ingredients']); ?></textarea>
                
                <label for="instructions">Instrucciones:</label>
                <textarea id="instructions" name="instructions" required><?php echo htmlspecialchars($recipe['instructions']); ?></textarea>
                
                <button type="submit">Guardar Cambios</button>
            </form>
        </section>
        
        <!-- Botón para volver a la página principal -->
        <section id="navigation">
            <a href="index.php" class="button">Volver a Inicio</a>
        </section>
    </main>
</body>
</html>

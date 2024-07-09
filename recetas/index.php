<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Aplicación de Recetas</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo de estilos CSS -->
    <script>
    // Función JavaScript para confirmar el borrado
    function confirmDelete(recipeIndex) {
        var confirmAction = confirm("¿Estás seguro de que deseas eliminar esta receta?");
        if (confirmAction) {
            window.location.href = "delete_recipe.php?index=" + recipeIndex;
        }
    }
    </script>
</head>
<body>
    <header>
        <h1 style="color: #fff;">Bienvenidos a la Aplicación de Recetas</h1> <!-- Título principal de la página -->
    </header>

    <main>
        <!-- Sección para añadir nuevas recetas, colocada en la parte superior derecha -->
        <section id="add-recipe" style="text-align: right;">
            <a href="create_recipe.php" class="button">Añadir Nueva Receta</a>
        </section>

        <!-- Título e información general sobre la aplicación -->
        <section id="info">
            <h2>Explora y Comparte Recetas</h2>
            <p>Descubre las mejores recetas compartidas por nuestra comunidad y comparte tus creaciones culinarias. Desde postres hasta platos principales, explora una variedad de recetas para todos los gustos y ocasiones.</p>
        </section>

        <!-- Sección de lista de recetas añadidas -->
        <section id="recipe-list">
            <h2>Recetas Añadidas</h2>
            <ul>
                <?php
                $recipesFile = 'recipes.json';

                if (file_exists($recipesFile)) {
                    $recipes = json_decode(file_get_contents($recipesFile), true);
                    foreach ($recipes as $index => $recipe) {
                        echo '<li>';
                        echo '<h3>' . htmlspecialchars($recipe['title']) . '</h3>';
                        echo '<p><strong>Ingredientes:</strong> ' . nl2br(htmlspecialchars($recipe['ingredients'])) . '</p>';
                        echo '<p><strong>Instrucciones:</strong> ' . nl2br(htmlspecialchars($recipe['instructions'])) . '</p>';
                        echo '<a href="edit_recipe.php?index=' . $index . '" class="button">Editar</a> ';
                        echo '<a href="#" onclick="confirmDelete(' . $index . ');" class="button delete">Borrar</a>';
                        echo '</li>';
                    }
                } else {
                    echo '<li>No hay recetas aún. ¡Añade tu primera receta!</li>';
                }
                ?>
            </ul>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Aplicación de Recetas. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

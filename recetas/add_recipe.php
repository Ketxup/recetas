<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    $recipesFile = 'recipes.json';
    if (file_exists($recipesFile)) {
        $recipes = json_decode(file_get_contents($recipesFile), true);
    } else {
        $recipes = [];
    }

    $recipes[] = ['title' => $title, 'ingredients' => $ingredients, 'instructions' => $instructions];
    file_put_contents($recipesFile, json_encode($recipes, JSON_PRETTY_PRINT));

    header('Location: index.php');
    exit();
}
?>

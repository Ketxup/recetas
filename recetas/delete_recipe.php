<?php
// delete_recipe.php
if (isset($_GET['index'])) {
    $index = $_GET['index'];
    
    $recipesFile = 'recipes.json';
    if (file_exists($recipesFile)) {
        $recipes = json_decode(file_get_contents($recipesFile), true);
        if (isset($recipes[$index])) {
            array_splice($recipes, $index, 1);
            file_put_contents($recipesFile, json_encode($recipes, JSON_PRETTY_PRINT));
        }
    }
}

header('Location: index.php');
exit();
?>

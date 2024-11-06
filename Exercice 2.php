<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 5 | Exercice 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body class="bg-warning">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <span class="navbar-brand">Amine Kilani | Atelier 5</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Exercice 1.php">Exercice 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Exercice 2.php">Exercice 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Exercice 3.php">Exercice 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Exercice 4.php">Exercice 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-3">        
            <div class="alert alert-warning mt-3">
                <?php
                    class MiseEnForme
                    {
                        private string $chaine;
                        function gras(string $chaine): string
                        {
                            return "<strong>".$chaine."</strong>";
                        }
                        function italique(string $chaine): string
                        {
                            return "<em>".$chaine."</em>";
                        }
                        function souligne(string $chaine): string
                        {
                            return "<u>".$chaine."</u>";
                        }
                        function majuscules(string $chaine): string
                        {
                            return strtoupper($chaine);
                        }
                    }
                    $chaine="Programmation orientée objet en PHP";
                    echo "Gras : ".(new MiseEnForme())->gras($chaine)."<br>";
                    echo "Italique : ".(new MiseEnForme())->italique($chaine)."<br>";
                    echo "Souligné : ".(new MiseEnForme())->souligne($chaine)."<br>";
                    echo "Majuscules : ".(new MiseEnForme())->majuscules($chaine);
                ?>
            </div>
        </div>
    </body>
</html>
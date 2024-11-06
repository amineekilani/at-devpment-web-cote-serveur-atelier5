<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 5 | Exercice 1</title>
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
                            <a class="nav-link active" href="Exercice 1.php">Exercice 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Exercice 2.php">Exercice 2</a>
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
                    //1
                    class Ville
                    {
                        private string $nom;
                        private string $gouvernorat;
                        function __construct(string $n, string $g)
                        {
                            $this->nom=$n;
                            $this->gouvernorat=$g;
                        }
                        function get_info(): string
                        {
                            return $this->nom." est dans le gouvernorat ".$this->gouvernorat.".";
                        }
                        function __toString(): string
                        {
                            return $this->nom." est dans le gouvernorat ".$this->gouvernorat.".";
                        }
                    }
                    //2
                    $ville1=new Ville("Chebba","Mahdia");
                    $ville2=new Ville("Radès","Ben Arous");
                    //3
                    echo "Avec la méthode <strong>get_info()</strong> :<br>".$ville1->get_info()."<br>".$ville2->get_info();
                    //4
                    echo "<br>Avec la méthode <strong>__toString()</strong> :<br>".$ville1;
                ?>
            </div>
        </div>
    </body>
</html>
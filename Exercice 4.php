<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 5 | Exercice 4</title>
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
                            <a class="nav-link" href="Exercice 2.php">Exercice 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Exercice 3.php">Exercice 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Exercice 4.php">Exercice 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-3">
            <div class="alert alert-warning mt-3">
                <?php
                    abstract class Personne
                    {
                        protected string $nom;
                        protected string $prenom;
                        function __construct(string $n, string $p)
                        {
                            $this->nom=$n;
                            $this->prenom=$p;
                        }
                        abstract function getInfo();
                    }
                    class Adulte extends Personne
                    {
                        private string $metier;
                        private float $salaire;
                        function __construct(string $n, string $p, string $m, float $s)
                        {
                            parent::__construct($n,$p);
                            $this->metier=$m;
                            $this->salaire=$s;
                        }
                        function getInfo(): string
                        {
                            $res="Nom : ".$this->nom;
                            $res.="<br>Prénom : ".$this->prenom;
                            $res.="<br>Métier : ".$this->metier;
                            $res.="<br>Salaire : ".$this->salaire;
                            return $res;
                        }
                    }
                    class Adolescent extends Personne
                    {
                        private int $age;
                        private string $loisir;
                        function __construct(string $n, string $p, int $a, string $l)
                        {
                            parent::__construct($n,$p);
                            $this->age=$a;
                            $this->loisir=$l;
                        }
                        function getInfo(): string
                        {
                            $res="Nom : ".$this->nom;
                            $res.="<br>Prénom : ".$this->prenom;
                            $res.="<br>Age : ".$this->age;
                            $res.="<br>Loisir : ".$this->loisir;
                            return $res;
                        }
                    }
                    $Adulte1=new Adulte("Kilani","Amine","Etudiant",0);
                    $Adolescent1=new Adolescent("Kilani","Anas",14,"Formula One");
                    echo "<h5>Adulte</h5>".$Adulte1->getInfo();
                    echo "<h5>Adolescent</h5>".$Adolescent1->getInfo();
                ?>
            </div>
        </div>
    </body>
</html>
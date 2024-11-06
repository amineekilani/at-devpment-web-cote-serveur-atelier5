<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 5 | Exercice 3</title>
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
                            <a class="nav-link active" href="Exercice 3.php">Exercice 3</a>
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
                    class Salarie
                    {
                        private int $code;
                        private string $nom;
                        private string $prenom;
                        private float $salaireBase;
                        private float $idemnite;
                        function __construct(int $c, string $n, string $p, int $s, string $i)
                        {
                            $this->code=$c;
                            $this->nom=$n;
                            $this->prenom=$p;
                            $this->salaireBase=$s;
                            $this->idemnite=$i;
                        }
                        function calculSalaire(): float
                        {
                            return $this->salaireBase+$this->idemnite;
                        }
                        function infoSalarie(): string
                        {
                            $res="Code : ".$this->code;
                            $res.="<br>Nom : ".$this->nom;
                            $res.="<br>Prénom : ".$this->prenom;
                            $res.="<br>Salaire de base : ".$this->salaireBase;
                            $res.="<br>Idemnité : ".$this->idemnite;
                            $res.="<br>Salaire : ".$this->calculSalaire();
                            return $res;
                        }
                    }
                    class Contractuel extends Salarie
                    {
                        private string $date;
                        private string $type;
                        function __construct(int $c, string $n, string $p, int $s, string $i, string $d, string $t)
                        {
                            parent::__construct($c,$n,$p,$s,$i);
                            $this->date=$d;
                            $this->type=$t;
                        }
                        function infoSalarie(): string
                        {
                            $res=parent::infoSalarie();
                            $res.="<br>Date du contrat : ".$this->date;
                            $res.="<br>Type du contrat : ".$this->type;
                            return $res;
                        }
                    }
                    $c=new Contractuel(1919,"Kilani","Amine",10000,1000,"06/11/2024","Stage");
                    echo $c->infoSalarie();
                ?>
            </div>
        </div>
    </body>
</html>
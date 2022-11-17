<?php
session_start();

    if(!isset($_SESSION['contador'])){
        $_SESSION['contador']=0;
    }else{
        $_SESSION['contador']++;
    }
    class Dado{
        public $tipo = "";

        public function tira(){
            $dado = rand(1, 6);
            $this->tipo = $this->nombreFigura($dado) ;
        }

        public function nombreFigura($dado){
            switch ($dado){
                case 1:
                    return "AS";
                case 2:
                    return "K";
                case 3:
                    return "Q";
                case 4:
                    return "J";
                case 5:
                    return "rojo";
                case 6:
                    return "negro";
            }
        }

        public function getTipo(){
            return $this->tipo;
        }
    }

    class Cubilete{
        public $dados = [];

        public function tirarDados(){
            for($i = 0; $i < 6; $i++){
                $dado = new Dado;
                $dado->tira();
                array_push($this->dados, $dado); 
            }
        }

        public function mostrarMano(){
            for ($i = 0; $i < count($this->dados); $i++){
                echo (($this->dados[$i])->tipo.", ");
            }
        }
    }


    if(isset($_POST["tirada"])){
        $cubilete = new Cubilete;
        $cubilete->tirarDados();
        $cubilete->mostrarMano();
    }

    if(isset($_POST["terminar"])){
        $_SESSION["contador"] = 0;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poker Dados</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="submit" value="Tirar dados" name="tirada"></input>
        <input type="submit" value="Terminar Partida" name="terminar"></input>
    </form>
    <h2> Numero de manos: <?php echo $_SESSION["contador"]; ?></h2>
</body>
</html>
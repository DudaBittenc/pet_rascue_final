<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css"/>
    <title>Pet Rescue</title>
</head>

<body>


<header>
    <div class="center">
        <div class="logo"><img src="../../assets/img/petrascue 1 (3).png" alt=""></div><!--logo--> 
        <div class="bem-vindo-usuario">
            
            <h1> Bem-vindo ao nosso sistema, 
            <?= 
            session_start();
            $_SESSION["user_data"]["name"] ?></h1>
        </div>
        <div class="menu">
            <a href="../Controller/Auth.php?operation=logout">Sair</a>
        </div><!--menu-->
    </div><!--center-->
</header>
    
    <div class="row">

        <div class="card A">
            <button type="submit" class="button">
                <a href="#">
                <img class="image" src="../../assets/img/quero-adotar-um-amigo-2.png" width: 300px/>
                </a>
            </button>
        </div>

        <div class="card B">
            <button type="submit"  class="button">
                <a href="adotation.php">
                <img class="image" src="../../assets/img/para-adocao.png"/>
                </a>
            </button>
        </div>

        <div class="card C">
            <button type="submit"  class="button">
                <a href="lostanimal.php">
                <img class="image" src="../../assets/img/animal-perdido.png"/>
                </a>
            </button>
        </div>

    </div> <!-- row-->
    
</body>
</html>
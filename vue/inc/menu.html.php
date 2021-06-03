<?php
function find_login_password(string $login, string $password): array{
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    $arrayUser = json_decode($json, true);
    foreach ($arrayUser as $user) {
        if($user['login']== $login && $user['password']== $password){
            return $user;
        }
    }
    return [];
}
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="">QUIZZ</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
   
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php if(est_admin()):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.questions'?>">liste des questions <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.questions'?>">liste des joueurs</a>
            </li>
            <?php endif; ?>
            <?php if(est_joueur()): ?>
            <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controllers=joueur&view=jeu'?>">Jeu</a>
                    
                </div>
            </li>
            <?php endif; ?>
        </ul>
        <?php if(est_connect()): ?>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>">DECONNEXION<span class="sr-only">(current)</span></a>
            </li> 
        </ul>
        <?php endif ?>
    </div>
</nav>
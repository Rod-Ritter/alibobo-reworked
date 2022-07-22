« DELETE FROM `articles` WHERE `articles`.`id_article` = 1 »
 DELETE FROM `articles` WHERE `articles`.`id_article` = 1 »

 <?php

function suppArticle(){
    if($pdo = pdo){
        
    }
qtestockesecu

       <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?=$prenom?>" />
    </div>
    <div>
        <label for="email">E-mail :</label>
        <input type="text" id="email" name="email" value="<?=$email?>" />
    </div>
    <div>
        <label for="mdp1">Mot de passe :</label>
        <input type="password" id="mdp1" name="mdp1" />
    </div>
    <div>
        <label for="mdp2">Vérification mot de passe :</label>
        <input type="password" id="mdp2" name="mdp2" />
    </div>
    <div>
        <input type="checkbox" name="cgu" id="cgu" value="1"<?=isset($_POST['cgu'])?"checked":'';?> /><label for="cgu" >J'accepte les <a href="index.php?page=cgu" target="_blank">Conditions Générales d'Utilisation</a></label>
    </div>

    <?php

class Sql
{
    private string $bddName;
    private string $user;
    private string $mdp;
    private string $url;

    public function getbddName(): string
    {
        return $this->bddName;
    }

    public function setbddName(string $bddName): void
    {
        $this->bddName = $bddName;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}

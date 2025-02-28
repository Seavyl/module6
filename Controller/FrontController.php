<?php 


class FrontController extends AbstractController {

    /**
     * cette méthode est en charge de l'affichage de la page d'accueil du site
     * attention il faut mettre home en minuscule (comme mentionné dans le $routes)
     *
     */

    public function home()
    {
       

    $sql = "
        SELECT  e.id, e.prenom, e.nom, e.email, e.cv, e.dt_naissance, e.isAdmin, dt_mis_a_jour
        FROM étudiants AS e
        ORDER BY e.id";
    
    $data = [
        "titre" => "home",
        "étudiants" => BDD::getInstance()->query($sql)
        
    ];
   $this->render("home" , $data);

       

}

    public function gestionEtudiant()
    {

        
    }
    
}

   
        
    

    

    


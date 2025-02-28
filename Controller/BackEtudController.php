<?php 

declare(strict_types = 1); 

class BackEtudController extends AbstractController{

   

    public function index(){
        $data = [
            "titre" => "Gestion des étudiants",
            "users" => BDD::getInstance()->query("SELECT e.id, e.prenom, e.nom, e.email , e.cv , e.dt_naissance , e.isAdmin, e.dt_mis_a_jour
            FROM étudiants AS e")
            ];
            

        $this->render("back/user_index", $data);
    }


    public function new(){

        $id = "";
        $email = "";
        $password = "";
        $role = ""; 
        $is_active = 0 ; 
        $erreurs = [];

        if(!empty($_POST)){
            $email = isset($_POST["email"]) ? $_POST["email"] : $email ;
            $password = isset($_POST["password"]) ? $_POST["password"] : $password ;
            $role = isset($_POST["role"]) ? $_POST["role"] : $role ;
            $is_active = isset($_POST["is_active"]) ? 1 : 0 ; 

            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                $erreurs[] = "l'email n'est pas conforme"; 
            }      
            
            }

            $user = BDD::getInstance()->query("SELECT * FROM users WHERE email = :email" , ["email" => $email]);
            if(!empty($user)){
                $erreurs[] = "l'email soumis est déjà utilisé, veuillez en choisir un autre"; 
            }

          
        }


        $data = [
            "titre" => "créer un nouveau profil utilisateur",
            "data_form" => [
                "id" => $id,
                "email" => $email,
                "password" => $password,
                "role" => $role,
                "is_active" => $is_active
            ],
            "erreurs" => $erreurs
        ];
        $this->render("back/user_form" , $data); 
    }

    public function delete(string $id){

       $user = BDD::getInstance()->query("SELECT * FROM users WHERE id = :id" , [ "id" => $id ]);

        if(empty($user)){
            $data = [
                "titre" => "impossible de supprimer le profil utilisateur",
                "contenu" => [
                    "num" => 404,
                    "message" => "le profil que vous souhaitez supprimer n'existe pas"
                ]
                ];
            $this->render("front/erreur" , $data);
            die(); 
        }

        
        try{
            BDD::getInstance()->query("DELETE FROM users WHERE id = :id" , ["id" => $id]);
        }catch(Exception $e){
            $data = [
                "titre" => "impossible de supprimer le profil",
                "contenu" => [
                    "num" => 403,
                    "message" => "le profil ne peut être supprimé car il est associé à une recette"
                ]
                ];
            $this->render("front/erreur" , $data);
            die();
        }
        
        header("Location:" . URL . "?page=admin/user");

    }


    public function update(string $id){

        $user = BDD::getInstance()->query("SELECT * FROM users WHERE id = :id" , [ "id" => $id ]);

   

        $email = $user[0]["email"];
        $password = "";
        $role = $user[0]["role"]; 
        $is_active=$user[0]["is_active"];
        $erreurs = [];

        if(!empty($_POST)){
            $email = isset($_POST["email"]) ? $_POST["email"] : $email ;
            $password = isset($_POST["password"]) ? $_POST["password"] : $password ;
            $role = isset($_POST["role"]) ? $_POST["role"] : $role ;
            $is_active = isset($_POST["is_active"]) ? 1 : 0 ; 

        

           
        }

        

            header("Location: " . URL . "?page=admin/user");
            die(); 
        }

        $data = [
            "titre" => "mise à jour d'un profil utilisateur",
            "data_form" => [
                "id" => $id,
                "email" => $email,
                "password" => $password,
                "role" => $role,
                "is_active" => $is_active
            ],
            "erreurs" => $erreurs
        ];
        $this->render("back/user_form" , $data); 
    

}
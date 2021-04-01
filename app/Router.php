<?php

require_once('./app/autoload.php');

class Router{
    private $ctrca;
    private $ctrv;
    private $ctru;
    private $ctrg;

    public function __construct()
    {
        $this->ctrca = new AdminCategorieController();
        $this->ctrv = new AdminVoitureController();
        $this->ctru = new AdminUtilisateurController();
        $this->ctrg = new AdminGradeController();
    }

    public function getPath(){
        if(isset($_GET['action'])){
            switch($_GET['action']){
                case 'list_cat': 
                    $this->ctrca->listCategories();
                    break;
                case 'delete_cat':
                    $this->ctrca->removeCat();
                    break;
                case 'edit_cat':
                    $this->ctrca->editCat();
                    break;
                case 'add_cat':
                    $this->ctrca->addCat();
                    break;
                case 'list_v':
                    $this->ctrv->listVoitures();
                    break;
                case 'add_v':
                    $this->ctrv->addVoitures();
                    break;
                case 'delete_v':
                    $this->ctrv->removeVoiture();
                    break;
                case 'edit_v':
                    $this->ctrv->editVoiture();
                    break;
                case 'list_u':
                    $this->ctru->listUsers();
                    break;
                case 'login':
                    $this->ctru->login();
                    break;
                case 'logout':
                    AuthController::logout();
                    break;
                case 'register':
                    $this->ctru->addUser();
                    break;
                case 'list_g':
                    $this->ctrg ->listGrades();
                    break;
            }
        }
    }
}
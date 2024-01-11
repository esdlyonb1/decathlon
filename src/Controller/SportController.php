<?php

namespace App\Controller;

use App\Repository\SportRepository;
use Core\Controller\Controller;
use Core\Http\Response;

class SportController extends Controller
{

    public function index():Response
    {

        $monInformation = "voila une nouvelle info";

        $sportRepository = new SportRepository();

        $sports = $sportRepository->findAll();

        return $this->render("sport/index", [
           "pageTitle"=>"Les sports",
            "information" => $monInformation,
            "sports" => $sports
        ]);
    }

    public function show():Response
    {
       if(!empty($_GET["id"]) && ctype_digit($_GET['id']))
       {
           $id = $_GET['id'];
       }


        $sportRepository = new SportRepository();

        $sport = $sportRepository->find($id);



        //$sport = "un sport blabla";

        return $this->render("sport/show", [
            "pageTitle"=>"Un sport",
            "sport"=>$sport
        ]);
    }

}
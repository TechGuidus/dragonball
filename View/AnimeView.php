<?php
require_once('./libs/smarty/Smarty.class.php');

class AnimeView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();   
    }

    function RenderHome($seasons,$logged)
    {
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);

        $this->smarty->display('templates/home.tpl');
    }

    function RenderList($chapters,$season,$all_seasons,$logged)
    { 
        
        $this->smarty->assign('chapters',$chapters);
        $this->smarty->assign('season',$season);
        $this->smarty->assign('seasons',$all_seasons);
        $this->smarty->assign('logged',$logged);

        $this->smarty->display('templates/dinamicList.tpl');
    }

    function RenderLogin($seasons,$logged)
    {
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);

        $this->smarty->display('templates/login.tpl');
    }
    function RenderError($error_message,$error_solution)
    {
        $this->smarty->assign('error_message', $error_message);
        $this->smarty->assign('error_solution', $error_solution);

        $this->smarty->display('templates/error.tpl');
    }
    function RenderEdit($seasons,$logged,$chapter)
    {
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);
        $this->smarty->assign('chapter',$chapter);

        $this->smarty->display('templates/edit.tpl');
    }
    function RenderUploadModo($seasons,$logged){
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);

        $this->smarty->display('templates/uploadform.tpl');
    }
    function RenderSeasons($seasons,$logged){
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);

        $this->smarty->display('templates/seasons_list.tpl');
    }
    function RenderSeasonEdit($seasons, $logged,$season_to_edit )
    {
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);
        $this->smarty->assign('season_edit',$season_to_edit[0]);

        $this->smarty->display('templates/edit_season_form.tpl');
    }
    function RenderUploadSeasonModo($logged,$seasons){
        $this->smarty->assign('logged',$logged);
        $this->smarty->assign('seasons',$seasons);

        $this->smarty->display('templates/upload_season_form.tpl');
    }
    function RenderDetails($seasons , $logged, $chapter,$season_number){
        $this->smarty->assign('seasons',$seasons);
        $this->smarty->assign('logged',$logged);
        $this->smarty->assign('chapter',$chapter);
        $this->smarty->assign('season_number',$season_number);

        $this->smarty->display('templates/chapter_details.tpl');
    }
}

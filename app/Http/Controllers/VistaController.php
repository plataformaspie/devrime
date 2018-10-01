<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ModuloPdes\ProyectoPdes as Proyecto;

class VistaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user= \Auth::user();
            $this->user= \Auth::user();
            $rol = (int) $this->user->id_rol;
            $sql = \DB::select("SELECT  m.* FROM roles_modulos um INNER JOIN modulos m ON um.id_modulo = m.id WHERE um.id_rol = ".$rol." ORDER BY orden ASC");
            $this->modulos = array();
            foreach ($sql as $mn) {
                array_push($this->modulos, array('id' => $mn->id,'titulo' => $mn->titulo,'descripcion' => $mn->descripcion,'url' => $mn->url,'icono' => $mn->icono,'target' => $mn->target,'id_html' => $mn->id_html));
            }

            $sql = \DB::select("SELECT m.* FROM menus m INNER JOIN roles_menu rm ON m.id = rm.id_menu WHERE rm.id_rol = ".$rol." AND id_modulo = 1 ORDER BY m.orden ASC");
            $this->menus = array();

            foreach ($sql as $mn) {
                $submenu = \DB::select("SELECT * FROM sub_menus WHERE id_menu = ".$mn->id." ORDER BY orden ASC");
                array_push($this->menus, array('id' => $mn->id,'titulo' => $mn->titulo,'descripcion' => $mn->descripcion,'url' => $mn->url,'icono' => $mn->icono,'id_html' => $mn->id_html,'submenus' => $submenu));
            }

            \View::share(['modulos'=> $this->modulos,'menus'=>$this->menus]);
            return $next($request);
        });
    }


    public function index($vista)
    {
        return view($vista);
    }



}

<?php

namespace App\Http\Controllers;

use App\Models\Casals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CasalController extends Controller
{

    function index(){

        $sql = 'SELECT * FROM casals';
        $casals = DB::select($sql);

        $sql = 'SELECT * FROM ciutats';
        $ciutats = DB::select($sql);

        return view("inici", ["casals" => $casals, "ciutats" => $ciutats]);
    }



    function anadirCasal(){
        $sql = 'SELECT * FROM ciutats';
        $ciutats = DB::select($sql);

        return view("anadir", ["ciutats" => $ciutats]);
    }

    function anadirCasalBd(Request $request){

        $validated = $request->validate([
            'nom' => 'required',
            'data_inici' => 'required',
            'data_final' => 'required',
            'num_places' => 'required',
            'id_ciutat' => 'required',

        ]);

        if($request->input("data_inici") > $request->input("data_final")){
            return redirect()->back()->withErrors(['msg' => 'LA FECHA DE INICIO NO PUESE SER INFERIOR A LA FECHA FINAL']);;
            
        }
        elseif(!$validated){
            return redirect()->back()->withErrors(['msg' => 'TODOS LOS CAMPOS SON OBLIGATORIOS']);
        }
        else{
            $casal = new Casals();
            $casal->nom = $request->input("nom");
            $casal->data_inici = $request->input("data_inici");
            $casal->data_final = $request->input("data_final");
            $casal->n_places = $request->input("num_places");
            $casal->id_ciutats = $request->input("id_ciutat");
            
            $casal->save();

            return redirect("/");
        }

    }


    function editarCasal(Request $request){

        $sql = 'SELECT * FROM ciutats';
        $ciutats = DB::select($sql);

        $casal = DB::table('casals')->where('id', $request->input("id_casal"))->first();

        return view("editar", ["ciutats" => $ciutats, "casal" => $casal]);
        
    }

    function editarCasalBd(Request $request){

        $validated = $request->validate([
            'nom' => 'required',
            'data_inici' => 'required',
            'data_final' => 'required',
            'num_places' => 'required',
            'id_ciutat' => 'required',

        ]);

        if($request->input("data_inici") > $request->input("data_final")){
            return redirect("/")->withErrors(['msg' => 'ERROR EN LA EDICION DEL CASAL']);
            
        }
        else{
            DB::table('casals')

            ->where('id', $request->input("id_casal"))

            ->update([
                'nom' => $request->input("nom"),
                'data_inici' => $request->input("data_inici"),
                'data_final' => $request->input("data_final"),
                'n_places' => $request->input("num_places"),
                'id_ciutats' => $request->input("id_ciutat"),

            ]);

            return redirect("/");
        }

        
        
    }

    function eliminarCasal(Request $request){

        DB::table('casals')
            ->where('id',  $request->input("id_casal"))
            ->delete();

        return redirect("/");
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Painel;
use App\Models\BannerModel;
use App\Models\banersecundario;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = DB::table('img_banners')->count();
        $img_banner = DB::table('img_banners')->select('id','imagem','titulo','textopequeno')->get();

        // echo '<pre>';
        // print_r($img_banner);
        // echo '<pre>';

    
        return view('painel.painel',['banner' => $banners],['imagens' => $img_banner]);
    }

    public function secundario()
    {
        $banners = DB::table('banersecundarios')->count();
        $img_banner = DB::table('banersecundarios')->select('imagem','id')->get();
        return view('painel.secundario',['banner' => $banners],['imagens' => $img_banner]);
    }

    public function upload(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'arquivo' => 'required',
            'arquivo.*' => 'mimes:jpeg,jpg,png,jpeg'
          ]);
          $banner = $request->arquivo;
          //   $path = 'public/banners'; //Nome da pasta
          // /storage/public/banners/02080631627039c71b6b6.jpg
          $path = 'banner';
          $nameImage = uniqid(date('dhis')). '.' . $banner->extension();
          $uploadFiles = $banner->storeAs($path,$nameImage);
            

          DB::table('img_banners')->insert([
            'imagem' => $nameImage,
            'titulo'    => $request->input('titulo'),
            'textopequeno' =>$request->input('pequenotexto')
            ]);
            return redirect('painel');
       
    }

    public function uploadsecundario(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'arquivo' => 'required',
            'arquivo.*' => 'mimes:jpeg,jpg,png,jpeg'
          ]);
          $banner = $request->arquivo;
          //   $path = 'public/banners'; //Nome da pasta
          // /storage/public/banners/02080631627039c71b6b6.jpg
          $path = 'banner';
          $nameImage = uniqid(date('dhis')). '.' . $banner->extension();
          $uploadFiles = $banner->storeAs($path,$nameImage);
            

          DB::table('banersecundarios')->insert([
            'imagem' => $nameImage
            ]);
            return redirect('painelsecundario');
       
    }
    public function apagarsecundario($id)
    {
       if( DB::table('banersecundarios')->where('id', $id)->delete()){
        return redirect('painelsecundario');
       }
       
    }
    //Apaga Banner de sliders
    public function apagar($id)
    {
       if( DB::table('img_banners')->where('id', $id)->delete()){
        return redirect('img_banners');
       }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Painel  $painel
     * @return \Illuminate\Http\Response
     */
    public function show(Painel $painel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painel  $painel
     * @return \Illuminate\Http\Response
     */
    public function edit(Painel $painel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Painel  $painel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Painel $painel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painel  $painel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painel $painel)
    {
        //
    }
}

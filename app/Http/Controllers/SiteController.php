<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //baners principal slider
        $banners = DB::table('img_banners')->get();
        //baners secundários
        $secundario = DB::table('banersecundarios')->get();
        return view('principal', ['banner' => $banners], ['secundario' => $secundario]);
    }

    public function creditorural()
    {
        return view('creditorural');
    }
    public function topografia()
    {
        return view('topografia');
    }
    public function ambiental()
    {
        return view('ambiental');
    }

    public function custeioagricola()
    {
        return view('custeioagricola');
    }

    public function custeiopecuario()
    {
        return view('custeiopecuario');
    }

     public function twitter()
    {
        return view('twitter');
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
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class clientController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = maison::paginate(10);
        return view("clients.index",compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
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
        request()->validate([
            "nom" => ["Required", "String"],
            "critere"=>["Required", "String"],
            "prix" => ["Required", "Integer"],
            "logement" => ["Required", "String"],
            "ma_photo" => ["Required", "image", "max:5000"],
            "surface" => ["Required", "Integer"],
            "type_bien" => ["Required", "String"],
            "piece" => ["Required", "Integer"],
            "commune" =>["Required", "String"],
            "descriptions" => ["Required", "String"]

        ]);
   
        $data =new maison([
        "nom" => request('nom'),
        "critere"=>request('critere'),
        "prix" =>request("prix"),
        "images" => request('ma_photo')->store("images", "public"),
        "logement" =>request('logement'),
        "surface" =>request('surface'),
        "type_bien" =>request('type_bien'),
        "piece" =>request('piece'),
        "commune" => request('commune'),
        "descriptions" =>request('descriptions'),
        ]);

        $data->save();
        return redirect("clients");
        //$variable = maison::all();
        //foreach ($variable as $value) {
        //    $new = "images".$value->images;
        //    $value->update([
        //        "images" => $new,
        //    ]);
        //}
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(maison $id)
    {
        //
        $client = $id;
        return view("clients.show", compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(maison $id)
    {

        $client = $id;
        return view("clients.edit", compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maison $id)
    {
        //
        request()->validate([
            "nom" => ["Required", "String"],
            "critere"=>["Required", "String"],
            "prix" => ["Required", "Integer"],
            "logement" => ["Required", "String"],
            "ma_photo" => ["image", "max:5000"],
            "surface" => ["Required", "Integer"],
            "type_bien" => ["Required", "String"],
            "piece" => ["Required", "Integer"],
            "commune" =>["Required", "String"],
            "descriptions" => ["Required", "String"]

        ]);
        if(request("ma_photo") == null){
            $image = $id->images;
            $id->update([
                "nom" => request('nom'),
                "critere"=>request('critere'),
                "prix" =>request("prix"),
                "images" => $image,
                "logement" =>request('logement'),
                "surface" =>request('surface'),
                "type_bien" =>request('type_bien'),
                "piece" =>request('piece'),
                "commune" => request('commune'),
                "descriptions" =>request('descriptions'),
                ]);

        }else{
            $id->update([
                "nom" => request('nom'),
                "critere"=>request('critere'),
                "prix" =>request("prix"),
                "images" => request('ma_photo')->store("images", "public"),
                "logement" =>request('logement'),
                "surface" =>request('surface'),
                "type_bien" =>request('type_bien'),
                "piece" =>request('piece'),
                "commune" => request('commune'),
                "descriptions" =>request('descriptions'),
                ]);

        }

        return redirect("/clients");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(maison $id)
    {
        $client = $id;
        $client->delete();
        return redirect("clients");
    }

}

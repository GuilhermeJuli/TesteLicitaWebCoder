<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    
    private City $city;
    public function __construct(City $city)
    {
        $this->city = $city;    
    }
    public function index()
    {
        $city = $this->city->all();
        return view("city", ['city'=> $city]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('city_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_cidade' =>'required|string|max:255',
        ]);

        City::create($validated);
        return redirect()->route('city.index')->with('message','Cidade Criada com Sucesso!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($cod_cidade)
{
    $city = City::where('cod_cidade', $cod_cidade)->firstOrFail();
    return view('show_city', ['city' => $city]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cod_cidade)
    {
        $city = City::where('cod_cidade', $cod_cidade)-> firstOrFail();
        return view('edit_city',['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cod_cidade)
    {
        $update = $this->city->where('cod_cidade', $cod_cidade)->update($request->except('_token','_method'));
        if($update){
            return redirect()->back()->with('message','Cidade Atualizada com Sucesso!!!');
        }else{
            return redirect()->back()->with('message',"Erro ao Atualizar o Fornecedor!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cod_cidade)
    {
        DB::table('products')->where('cidade_id', $cod_cidade)->delete();
        
        $deleted = DB::table('cities')->where('cod_cidade', $cod_cidade)->delete();
        
        return redirect()->route('city.index')->with('message', 'Cidade excluída com sucesso!');
    }
    

}

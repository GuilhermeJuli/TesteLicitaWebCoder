<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private Brand $brand;
    public function __construct(Brand $brand){
        $this->brand = $brand;
    }

    public function index()
    {
        $brands = $this-> brand->all();
        return view("brand", ['brand'=>$brands]);
    }

    public function create()
    {
        return view('brand_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_marca' => 'required|string|max:255',
            'fabricante' => 'required|string|max:255',
        ]);

        Brand::create($validated);

        return redirect()->route('brand.index')->with('message','Fornecedor criado com sucesso!');
    }

    public function show($cod_marca)
    {
        $brand = Brand::where('cod_marca', $cod_marca)->firstOrFail();
        return view('show_brand',['brand' => $brand]);
    }

    public function edit($cod_marca)
    {
        $brand = Brand::where('cod_marca', $cod_marca)-> firstOrFail();
        return view('edit_brand',['brand' => $brand]);
    }

    public function update(Request $request, $cod_marca)
    {
        $update = $this->brand->where('cod_marca', $cod_marca)->update($request->except(['_token','_method']));
        if ($update){
            return redirect()->back()->with('message','Fornecedor Atulizado com Sucesso!!');
        }else{
            return redirect()->back()->with('message','Erro ao Atualizar o Fornecedor!!');
        }
    }

    public function destroy($cod_marca)
    {
        $brand = Brand::where('cod_marca',$cod_marca)->firstOrFail();
        $brand->delete();

        return redirect()->route('brand.index');
    }
}

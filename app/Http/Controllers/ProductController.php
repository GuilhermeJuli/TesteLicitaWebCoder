<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->all();
        return view('products', ['products' => $products]);
    }

    public function show($cod_product)
    {
        $product = Product::where('cod_produto', $cod_product)->firstOrFail();
        return view('show_product', ['product' => $product]);
    }

    public function create()
    {
        return view('create_product');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_produto' => 'required|max:250',
            'valor_produto' => 'required|numeric',
            'estoque' => 'required|numeric',
            'marca_produto' => 'required|integer',
            'cidade_id' => 'required|integer',
        ]);
    
        Product::create($validated);
    
        return redirect()->route('product.index')->with('message', 'Produto criado com sucesso!');
    }
    

    public function edit($cod_produto)
{
    $product = Product::where('cod_produto', $cod_produto)->firstOrFail();
    return view('edit_product', ['product' => $product]);
}

    public function update(Request $request, $cod_product)
    {
        $update = $this->product->where('cod_produto', $cod_product)->update($request->except(['_token', '_method']));

        if ($update) {
            return redirect()->back()->with('message', 'Produto Atualizado com Sucesso!!');
        } else {
            return redirect()->back()->with('message', 'Erro ao Atualizar o Produto!!');
        }
    }
    public function destroy($cod_produto)
    {
        $product = DB::table('products')->where('cod_produto', $cod_produto)->first();
    
        if ($product && $product->estoque == 0) {
            $deleted = DB::table('products')->where('cod_produto', $cod_produto)->delete();
    
            if ($deleted) {
                return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
            } else {
                return redirect()->back()->with('message', 'Erro ao excluir o Produto!!');
            }
        } else {
            return redirect()->back()->with('message', 'Produto não pode ser excluído ou estoque diferente de zero!');
        }
    }
    
    
    
    

}

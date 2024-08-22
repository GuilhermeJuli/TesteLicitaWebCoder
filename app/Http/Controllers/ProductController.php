<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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

    public function destroy(Request $request)
{   
        $cod_produto = Product::findOrFail($request->cod_produto);

        DB::transaction(function () use ($cod_produto) {
            $cod_produto->produtos()->update(['cod_produto' => 0]);
            $cod_produto->delete();
        });


    if ($cod_produto) {
        if ($cod_produto->estoque > 0) {
            return redirect()->route('product.index')->with('message', 'Não é possível excluir um produto com estoque!');
        }

        $cod_produto->delete();
        return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
    } else {
        return redirect()->route('product.index')->with('message', 'Produto não encontrado!');
    }
}

}

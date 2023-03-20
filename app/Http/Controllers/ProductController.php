<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Http\Controllers\Session;
use App\Http\Middleware\CartCounterMiddleware;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offset = $request->input('offset', 0);
        $products = Product::with('images')->skip($offset)->take(12)->get();
        $totalProducts = Product::count();
        return view('productos.index', compact('products', 'totalProducts', 'offset'));
    }

    public function getProducts(Request $request)
    {
        $offset = $request->input('offset', 0);
        $products = Product::with('images')->skip($offset)->take(12)->get();
        $totalProducts = Product::count();
        return response()->json([
            'products' => $products,
            'totalProducts' => $totalProducts,
            'offset' => $offset
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')->get();
        return view('productos.search', ['products' => $products]);
    }

    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_name = $product->name;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;


            $cart->save();
            $count = Cart::where('email', $user->email)->sum('quantity');
            $request->session()->put('cart_count', $count);
            $count = session('cart_count', 0);

            return redirect()->back()->with(['message' => 'Producto añadido correctamente', 'count' => $count]);
        } else {
            return redirect('login');
        }
    }

    public function showCart()
    {
        $user = auth()->user();
        $cart = Cart::where('email', $user->email)->get();

        $count = Cart::where('email', $user->email)->sum('quantity');


        return view('cart.showCart', compact('count', 'cart'));
    }

    public function deleteCart($id)
    {
        $user = auth()->user();
        $data = Cart::find($id);

        $data->delete();
        // Actualiza el contador del carrito después de eliminar el producto del carrito
        $user = Auth::user();
        $count = Cart::where('email', $user->email)->sum('quantity');
        session()->put('cart_count', $count);

        return redirect()->back()->with(['message' => 'Producto eliminado correctamente', 'count' => $count]);
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

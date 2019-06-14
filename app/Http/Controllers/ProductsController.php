<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Product;
use App\Category;
use App\Condition;
use App\Report;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'filter', 'search', 'report', 'userPostedAds']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products =  Product::orderBy('created_at', 'desc')->paginate(9)->onEachSide(2);
        $products->min("price");
        return view('products.index',[
            'products'=>$products,
            "min"=>$products->min("price"),
            "max"=>$products->max("price"),
        ]);
    }

    // Filter and Search for Items
    public function filter(Request $request)
    {
        // return $request;
        $search = $request->input("search");
        $category = $request->input('category');
        $min = $request->input("min");
        $max = $request->input("max");

        $products = Product::latest();

        if(isset($search)){
            $products->where(function ($query) use($search) {
                $query->where('name', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%');
            });
        }
        if(isset($min)){
            $products->where('price', '>=' ,$min);
        }
        if(isset($max)){
            $products->where('price', '<=' ,$max);
        }
        if ($category != 'All') {
            $products->where('category', $category);
        }
        $products= $products->paginate(9);

        return view('products.index',[
            "products"=>$products,
            "min"=> $min ?? $products->min("price"),
            "max"=> $max ?? $products->max("price"),
            "search"=> $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'cover_image' => 'required|image|max:1999|mimes:jpeg,png,jpg,gif,svg',
            'product_image' => 'required',
            'product_image.*' => 'image|max:1999|mimes:jpeg,png,jpg,gif,svg',

        ]);

                //Create Post(post product)
                $product = new Product;
                $product->name = $request->input('name');
                $product->description = $request->input('description');
                $product->price = $request->input('price');
                $product->condition = $request->input('condition');
                $product->category = $request->input('category');
                $product->user_id = auth()->user()->id;



        //Handel file upload
        if($request->hasFile('cover_image')){
            // Get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('cover_image')->storeAs('Public/cover_images', $fileNameToStore);

            $product->cover_image = $fileNameToStore;


        } else {
            // $fileNameToStore = 'noimage.jpg';
        }

        $data = [];

        if ($request->hasFile('product_image')) {

            foreach ($request->file('product_image') as $image) {
                $name = $image->getClientOriginalName();
                // $image->move('Public/product_images', $name);
                $image->storePubliclyAs('public/product_images/',$name);
                // $path2 = $request->file('product_image')->storeAs('Public/product_images', $name);

                $data[] = $name;
            }

            $product->product_image=json_encode($data);
        }

        $product->save();

        return redirect('/')->with('success', 'Product Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        views($product)->record();
        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        // check for correct user
        if(auth()->user()->id == $product->user_id | auth()->user()->isAdmin == 1){
            return view('products.edit')->with('product', $product);

        }else {
            return redirect('/products')->with('error', 'Unauthorized page');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->file('cover_image');

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'condition' => 'required',
            'price' => 'required',
            // 'cover_image' => 'required|image|max:1999|mimes:jpeg,png,jpg,gif,svg',
            // 'product_image' => 'required',
            // 'product_image.*' => 'image|max:1999|mimes:jpeg,png,jpg,gif,svg',
        ]);



        //Create Post(post product)
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->condition = $request->input('condition');
        $product->category = $request->input('category');


        //Handel file upload
        if ($request->hasFile('cover_image')) {

            // Get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('cover_image')->storeAs('Public/cover_images', $fileNameToStore);

            if($request->hasFile('cover_image')){
                Storage::delete('public/cover_images/' . $product->cover_image);
                $product->cover_image = $fileNameToStore;
            }

        }

        $data = [];

        if ($request->hasFile('product_image')) {

            foreach ($request->file('product_image') as $image) {
                $name = $image->getClientOriginalName();
                // $image->move('Public/product_images', $name);
                $image->storePubliclyAs('public/product_images/',$name);
                // $path2 = $request->file('product_image')->storeAs('Public/product_images', $name);

                $data[] = $name;
            }

            $product->product_image=json_encode($data);
        }
        $product->save();

        return redirect('/products')->with('success', 'Product Updated');
        // return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);

        // check for correct user
        if(auth()->user()->id !== $product->user_id){
            return redirect('/products')->with('error', 'Unauthorized page');

        }

        if($product->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$product->cover_image);
        }

        $product->delete();
        return redirect('/')->with('success', 'Product Removed');

    }

    // Report Product
    public function report(Request $request, Product $product)
    {
        $request->validate([
            'reason' => 'required',
        ]);

        $report = new Report;
        $report->reason = $request->input('reason');
        $report->info = $request->input('info');
        $report->product_id = $product->id;

        $report->save();

        return redirect()->back()->with('success', 'Report Sent Successfully');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductSubcategory;
use App\Models\StoreRegistration;
use App\Models\StoreCategory;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function addCategory()
    {
    	$row = ProductCategory::orderBy('id','DESC')->get();
        return view('add_product_category',compact('row'));
    }
    public function addSubcategory()
    {
    	$category = ProductCategory::orderBy('id','DESC')->get();
    	$row = ProductSubcategory::with(['category_name'])->get();
        return view('add_product_sub-category',compact('row','category'));
    }
     public function addProducts()
    {
        $category = ProductCategory::orderBy('id','DESC')->get();
        $subcategory = ProductSubcategory::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $row = ProductSubcategory::with(['category_name'])->get();
        return view('add-products',compact('row','category','subcategory','product'));
    }

 public function viewStock()
    {
        $category = ProductCategory::orderBy('id','DESC')->get();
        $subcategory = ProductSubcategory::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $row = ProductSubcategory::with(['category_name'])->get();
        $cases = Product::with(['category_name','subcategory_name'])->orderBy('id','DESC')->get();
        return view('view-stock',compact('row','category','subcategory','product','cases'));
    } 
     public function addStore()
    {
        $category = ProductCategory::orderBy('id','DESC')->get();
        $subcategory = ProductSubcategory::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $row = ProductSubcategory::with(['category_name'])->get();
        $cases = Product::with(['category_name','subcategory_name'])->orderBy('id','DESC')->get();
        return view('add-store-category',compact('row','category','subcategory','product','cases'));
    }  
      public function storeRegistration()
    {
        $category = ProductCategory::orderBy('id','DESC')->get();
        $subcategory = ProductSubcategory::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $row = ProductSubcategory::with(['category_name'])->get();
        $cases = Product::with(['category_name','subcategory_name'])->orderBy('id','DESC')->get();
        return view('add-store-registration',compact('row','category','subcategory','product','cases'));
    } 
     public function listRegistration()
    {
        $category = ProductCategory::orderBy('id','DESC')->get();
        $subcategory = ProductSubcategory::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $row = ProductSubcategory::with(['category_name'])->get();
        $cases = StoreRegistration::orderBy('id','DESC')->get();
        return view('list-store-registration',compact('row','category','subcategory','product','cases'));
    } 
     public function invoice()
    {
        $category = ProductCategory::orderBy('id','DESC')->get();
        $subcategory = ProductSubcategory::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $row = ProductSubcategory::with(['category_name'])->get();
        $cases = StoreRegistration::orderBy('id','DESC')->get();
        return view('invoice',compact('row','category','subcategory','product','cases'));
    }  
      public function createCategory(Request $req)
    {
    	request()->validate([
            'name' => 'required',
         ]);
    	 ProductCategory::create([
                 'name' => $req['name']
                
            ]);
    	return redirect()->back()->with('success','Data Added Successfully');
    }
     public function addProduct(Request $req)
    {
        request()->validate([
            'category' => 'required',
            'subcategory' => 'required',
            'product' => 'required',
            'price' => 'required',
            'hsn' => 'required',
            'sgst' => 'required',
            'igst' => 'required',
            'cgst' => 'required',
         ]);

         Product::create([
                 'category' => $req['category'],
                 'subcategory' => $req['subcategory'],
                 'name' => $req['product'],
                 'price' => $req['price'],
                 'hsn' => $req['hsn'],
                 'sgst' => $req['sgst'],
                 'igst' => $req['igst'],
                 'cgst' => $req['cgst'],

                
            ]);
        return redirect()->back()->with('success','Data Added Successfully');
    }
     public function createSubcategory(Request $req)
    {
    	  request()->validate([
            'category' => 'required',
            'name' => 'required',
         ]);
       
              foreach ($req['name'] as $nm => $value) {
                $data = new ProductSubcategory();
                $data->category = $req['category'];
                $data->name  = $value;
                $data->save();
         }
    	return redirect()->back()->with('success','Data Added Successfully');
    }
      public function addStorecategory(Request $req)
    {
          request()->validate([
            'name' => 'required',
         ]);
       
                $data = new StoreCategory();
                $data->name = $req['name'];
                $data->save();
         
        return redirect()->back()->with('success','Data Added Successfully');
    }
     public function storeReg(Request $req)
    {
          request()->validate([
            'store_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pin_code' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'whatsapp_no' => 'required',
            'store_type' => 'required',
            'password' => 'required',
         ]);
       
                $data = new StoreRegistration();
                $data->store_name = $req['store_name'];
                $data->first_name = $req['first_name'];
                $data->middle_name = $req['middle_name'];
                $data->last_name = $req['last_name'];
                $data->address = $req['address'];
                $data->city = $req['city'];
                $data->state = $req['state'];
                $data->pin_code = $req['pin_code'];
                $data->email = $req['email'];
                $data->mobile_no = $req['mobile_no'];
                $data->whatsapp_no = $req['whatsapp_no'];
                $data->store_type = $req['store_type'];
                $data->password = Hash::make($req['password']);

                $data->save();
         
        return redirect()->back()->with('success','Data Added Successfully');
    }

}

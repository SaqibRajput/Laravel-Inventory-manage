<?php
namespace laravelInventory\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use laravelInventory\Products;

class InventoryController extends Controller
{
    //
	public function index()
    {
		$pages = ['pageTitle' => 'Inventory Page'];
		
		return view('inventory.index', compact('pages'));
    }
	
	public function getProducts()
    {
		
		$productsData = DB::table('products')->select('id','sku','name','description','price','mrp','stock','image','packing','status')->get();
		
		//$productsData = DB::select('select  id,sku,name,description,price,mrp,stock,image,packing,status from products');
		$pages = ['status' => 'success', 'message' => "Data selected from database",'data' => $productsData];
		$pageData = json_encode($pages,JSON_NUMERIC_CHECK);
		return $pageData;
    }

	public function productEdit(Request $request)
    {
		
		 $this->validate(request(), [
           // 'sku' => 'required',
            'name' => 'required',
            'description' => 'required',
			'price' => 'required',
			//'mrp' => 'required',
			'stock' => 'required',
			'packing' => 'required',
			'status' => 'required'
        ]);
		
		
		if(isset($request['id']) && $request['id']!=""){
			DB::table('products')
				->where('id', $request['id'])
				->update(['sku' => $request['name'], 'name' => $request['name'], 'description' => $request['description'], 'price' => $request['price'], 'stock' => $request['stock'], 'packing' => $request['packing'], 'status' => $request['status'], 'mrp' => $request['price']]);
		
		}else{
		//DB::statement('ALTER TABLE `products` MODIFY `image` string UNSIGNED NULL;');
/*		echo 'insert query';
		$productAdd = DB::insert('insert into products (sku, name, description, price, stock, packing, status, mrp) values (?, ?,?, ?,?, ?,?, ?)', [$request['name'],  $request['name'], $request['description'], $request['price'], $request['stock'], $request['packing'], $request['status'], $request['price']]);*/
		$productAdd = Products::create(array('sku' => $request['name'], 'name' => $request['name'], 'description' => $request['description'], 'price' => $request['price'], 'stock' => $request['stock'], 'packing' => $request['packing'], 'status' => $request['status'], 'mrp' => $request['price'],'category' => '270'));
		}
		
		//request(['name', 'description', 'price', 'mrp', 'stock', 'packing', 'category', 'status']));
		//print_r($_REQUEST);
		//$pages = ['status' => 'success', 'message' => "Data selected from database",'data' => $productAdd];
		//$pageData = json_encode($pages,JSON_NUMERIC_CHECK);
		//return $pageData;
    }


	public function deleteProduct($id)
	{
		DB::table('products')->where('id',$id)->delete();
	}
	
	
	public function statusChange(Request $request)
	{
		DB::table('products')
				->where('id', $request['id'])
				->update(['status' => $request['status']]);
	}



}

<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
 public function index(){
//   // Tạo một phiên bản mới của mô hình Categories
//   $Category_id = new Categories();
        
//   // Lấy danh sách sản phẩm từ cơ sở dữ liệu với điều kiện Category_id phù hợp với biến $Category_id
//   // Đồng thời eager load mô hình "Categories" liên quan
//   $products = Products::where('Category_id', $Category_id)->with('Categories')->get();
  
//   // Truyền danh sách sản phẩm đã lấy cho view "index" và trả về view
//   return view("index", ['Category_id' => $Category_id]);
 $products = Products::all();
 return view ('index',['products'=> $products]);
 }
}

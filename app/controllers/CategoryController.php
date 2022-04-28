<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController{
    public function index(){
        if(isset($_POST['keyword'])){
            $keyword = $_POST['keyword'];
            $categories = Category::where('cate_name', 'like', "%$keyword%")->get();
            $this->view('admin.categories.index', compact('categories'));
        }else{
            $categories = Category::all();
            $this->view('admin.categories.index', compact('categories'));
        }
    }
    public function create(){
        $this->view('admin.categories.add');
    }

    public function store(){
        $categories = Category::all();
        foreach ($categories as $key => $category) {
            if($category->cate_name == $_POST['cate_name']){
                $_SESSION['error_category_name'] = 'Đã tồn tại thể loại';
                header('location: '.BASE_URL.'add-cate');
                die();
            }
        }
        $data = $_POST;
        $model = new Category();
        $model->fill($data);

        $model->save();
        header('location: '.BASE_URL.'category');
    }

    public function edit(){
        $id = $_GET['id'];
        $model = Category::find($id);
        if(!isset($model)){
            header('location: '.BASE_URL.'category');
            die();
        }

        $this->view('admin.categories.edit', compact('model'));
    }

    public function update(){
        $id = $_POST['id'];
        $model = Category::find($id);
        if($model){
            $model->fill($_POST);
            $model->save();
        }
        header('location: '.BASE_URL.'category');
    }

    public function destroy(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        
        if($model){
            Product::where('cate_id', $id)->delete();
            $model->delete();
        }
        header('location: '.BASE_URL.'category');
    }

}
?>
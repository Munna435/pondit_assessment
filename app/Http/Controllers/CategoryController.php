<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Students;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function cat_select()
    {

        $categories= category::all();

//        return view('admin.category_add',[
//            'data'=>$category,
//        ]);


        //        or
            return view('admin.category_add',compact('categories'));
    }

    public function show($id)
    {
        $categories= category::find($id);
//        dd($category);
        return view('admin.Show',compact('categories'));

    }

    public function destroy($id)
    {
        $categories= category::find($id);


        $categories->delete();

//        return view('admin.show',compact('category'));

        return redirect()


            ->route('admin.category_list')
            ->withMessage('Deleted Successfully');

    }
    public function create(){

        return view('admin.Create');


    }

    public function store(Request $request){
        $result=[
            'name' => $request -> name

        ];

        category::create($result);

        return redirect()


            ->route('admin.category_list')
            ->withMessage('added Successfully');

    }

    public function edit($id){
        $categories= category::find($id);


        return view('admin.category_edit',compact('categories'));

    }

    public function update(Request $request,$id){

        $categories= category:: find($id);



        $result=[
            'name' => $request -> name
        ];


        $categories->update ($result);


        return redirect()


            ->route('admin.category_list')
            ->withMessage('added Successfully');

    }



}

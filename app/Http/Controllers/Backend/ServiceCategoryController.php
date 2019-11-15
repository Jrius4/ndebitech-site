<?php

namespace App\Http\Controllers\Backend;

use App\Service;
use App\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategoryStoreRequest;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Requests\ServiceCategoryUpdateRequest;

class ServiceCategoryController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ServiceCategory::with('services')->orderBy('title')->paginate($this->limit);
        $categoriesCount = ServiceCategory::count();
        return view("backend.service-categories.index", compact('categories', 'categoriesCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ServiceCategory $category)
    {
        return view("backend.service-categories.create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCategoryStoreRequest $request)
    {
        ServiceCategory::create($request->all());
        return redirect("/backend/service-categories")->with("message", "New service category was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=ServiceCategory::findOrFail($id);
        return view("backend.service-categories.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceCategoryUpdateRequest $request, $id)
    {
        ServiceCategory::findOrFail($id)->update($request->all());

        return redirect("/backend/service-categories")->with("message", "Service Category was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::withTrashed()->where('service_category_id', $id)->update(['service_category_id' => config('cms.default_category_id')]);

        $category = ServiceCategory::findOrFail($id);
        $category->delete();

        return redirect("/backend/service-categories")->with("message", "Service Category was deleted successfully!");
    }
}

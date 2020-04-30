<?php

namespace App\Repositories;

use App\Models\ {
    Product

};

class AdminRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_product;

    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Product $product)
    {
        $this->model_product = $product;
    }

    /**
     * Create a query for Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelect($request, $parameters)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image', 'top9')
            //->orderBy('price', 'asc');
            ->orderBy($parameters['order'], $parameters['direction']);

        //if(isset($request->search)) $query->where('name', 'like', '%' . $request->search . '%');

        return $query->get();
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */      
    public function store($request)
    {
        Product::create($request->all());
    }  

    /**
     * Update selected product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */      
    public function update($request, $product)
    {
        $product->update($request->all());
    }      

}

<?php

namespace BITM\SEIP12;

use BITM\SEIP12\Config;

class Product
{
    public $id = null;
    public $uuid = null;
    public $src = null;
    public $price = null;
    public $title = null;
    public $caption = null;
    public $description  = null;


    private $data = null;

    public function __construct()
    {

        $dataProucts = file_get_contents(Config::datasource() . 'productitems.json');
        $this->data = json_decode($dataProucts);
    }
    public function index()
    {
        return $this->data;
    }

    public function create() { }                 //Create

    public function store($product)
    {

        $product = $this->prepare($product);
        $this->data[] = (object) (array) $product; 
        return $this->insert();
    }

    public function show($id)                   //Reading
    {

        return $this->find($id);
    }

    public function edit($id = null)            //Update-Edit
    {
        return $this->find($id);
    }

    public function update($product)
    {

        $product = $this->prepare($product);

        foreach ($this->data as $key => $aproduct) {
            if ($aproduct->id == $product->id)
                break;
        }

        $this->data[$key] =  $product;
        return $this->insert();
    }

    public function destroy($id = null)         //Delete-destroy
    { //completely removed
        if (empty($id)) {
            return;
        }
        foreach ($this->data as $key => $product) {
            if ($product->id == $id) {
                break;
            }
        }
        // dd($key); to be deleted
        unset($this->data[$key]);
        //reindexing the array
        $this->data = array_values($this->data);

        return $this->insert();
    }

    public function last_highest_id()
    {

        $curentUniqueId = null;

        if (count($this->data) > 0) {
            // finding unique ids
            $ids = [];
            foreach ($this->data as $aslide) {
                $ids[] = $aslide->id;
            }
            sort($ids);
            $lastIndex = count($ids) - 1;
            $highestId = $ids[$lastIndex];

            $curentUniqueId = $highestId + 1;
        } else {
            $curentUniqueId = 1;
        }

        return $curentUniqueId;
    }

    private function prepare($product)
    {

        if (is_null($product->id) || empty($product->id)) {
            $product->id = $this->last_highest_id();
        }

        if (is_null($product->uuid) || empty($product->uuid)) {
            $product->uuid = uniqid();
        }

        return $product;
    }


    private function insert()
    {

        $datafile = Config::datasource() . "productitems.json"; 
        if (file_exists($datafile)) {
            file_put_contents($datafile, json_encode($this->data));
            return true;
        } else {
            echo "File not found";
            return false;
        }
    }

    public function find($id = null)
    {
        if (is_null($id) || empty($id)) {
            return true;
        }
        $products = null;
        foreach ($this->data as $aproduct) {
            if ($aproduct->id == $id) {
               $products=$aproduct;
                break;
            }
        }
        return $products;
        
    }

}


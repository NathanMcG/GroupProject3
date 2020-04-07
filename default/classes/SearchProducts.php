<?php
class SearchProducts {

    private $outList = array();
    private $inList;

    public function __construct($inList) {

        $this->inList = $inList;
        
	}

    public function is_in_list($id){
        
        $flag = false;

        foreach($this->outList as $list_item){
            if($list_item == $id){
                $flag = true;
            }
        }

        return $flag;

    }

    public function field_is($field,$search){

        foreach($this->inList as $list_item){
            if($list_item[$field] == $search){
                if(!$this->is_in_list($list_item['product_id'])){
                    $this->outList[] = $list_item['product_id'];
                }
            }
         }
    }

    public function field_contains($field,$search){

        foreach($this->inList as $list_item){
            if(stripos($list_item[$field],$search) !== false){
                if(!$this->is_in_list($list_item['product_id'])){
                    $this->outList[] = $list_item['product_id'];
                }
            }
         }
    }

    public function contains_field($field,$search){

        foreach($this->inList as $list_item){
            if(stripos($search,$list_item[$field]) !== false){
                if(!$this->is_in_list($list_item['product_id'])){
                    $this->outList[] = $list_item['product_id'];
                }
            }
         }
    }

    public function translate(){
        $productsTable = new DatabaseTable('products',null);
        $finalOut = array();
        foreach($this->outList as $list_item){
            $finalOut[] = $productsTable->find('product_id',$list_item)[0];
        }
        return $finalOut;
    }

    public function search($search){
        $this->field_is('product_name',$search);
        $this->field_contains('product_name',$search);
        $this->contains_field('product_name',$search);
        $this->field_contains('product_description',$search);
        $this->contains_field('product_description',$search);
        $this->field_is('brand',$search);
        $this->field_contains('brand',$search);
        $this->contains_field('brand',$search);
        $this->field_is('type_name',$search);
        $this->field_contains('type_name',$search);
        $this->contains_field('type_name',$search);
        return $this->translate();
    }
}
<?php
class SearchProducts {

    private $outList = array();
    private $inList;

    public function __construct($inList) {

        $this->inList = $inList;
        
	}

    private function is_in_list($id){
        
        $flag = false;

        foreach($this->outList as $list_item){
            if($list_item == $id){
                $flag = true;
            }
        }

        return $flag;

    }

    private function field_is($field,$search){

        foreach($this->inList as $list_item){
            if($list_item[$field] == $search){
                if(!$this->is_in_list($list_item['product_id'])){
                    $this->outList[] = $list_item['product_id'];
                }
            }
         }
    }

    private function field_contains($field,$search){

        foreach($this->inList as $list_item){
            if(stripos($list_item[$field],$search) !== false){
                if(!$this->is_in_list($list_item['product_id'])){
                    $this->outList[] = $list_item['product_id'];
                }
            }
         }
    }

    private function contains_field($field,$search){

        foreach($this->inList as $list_item){
            if(stripos($search,$list_item[$field]) !== false){
                if(!$this->is_in_list($list_item['product_id'])){
                    $this->outList[] = $list_item['product_id'];
                }
            }
         }
    }

    private function translate(){
        $productsTable = new DatabaseTable('products',null);
        $finalOut = array();
        foreach($this->outList as $list_item){
            $finalOut[] = $productsTable->find('product_id',$list_item)[0];
        }
        return $finalOut;
    }

    public function searchTerm($search){
        $this->field_is('product_name',$search);
        $this->field_contains('product_name',$search);
        $this->contains_field('product_name',$search);

        $this->field_contains('product_description',$search);
        $this->contains_field('product_description',$search);

        $this->field_is('product_brand',$search);
        $this->field_contains('product_brand',$search);
        $this->contains_field('product_brand',$search);

        $typesTable = new DatabaseTable('types','type_id');
        $classificationsTable = new DatabaseTable('classifications','classification_id');
        foreach($this->inList as $key => $list_item){
            $type = $typesTable->find('type_id',$list_item['type_id'])[0];
            $this->inList[$key]['type'] = $type['type_name'];

            $classification = $classificationsTable->find('classification_id',$type['classification_id'])[0];
            $this->inList[$key]['classification'] = $classification['classification_name']; 
        }

        $this->field_is('type',$search);
        $this->field_contains('type',$search);
        $this->contains_field('type',$search);
        $this->field_is('classification',$search);
        $this->field_contains('classification',$search);
        $this->contains_field('classification',$search);

        return $this->translate();
    }

    public function searchClassification($search){
        $typesTable = new DatabaseTable('types','type_id');
        $types = $typesTable->find('classification_id',$search);
        foreach($types as $type){
            $this->field_is('type_id',$type['type_id']);
        }

        return $this->translate();
    }
}
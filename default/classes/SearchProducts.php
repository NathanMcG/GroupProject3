<?php
class SearchProducts {

    private $outList = array();
    private $inList;

    public function is_in_list($id){
        
        $flag = false;

        foreach($outList as $list_item){
            if($list_item == $id){
                $flag = true;
            }
        }

        return $flag;

    }

    public function field_is($field,$search){

        foreach($this->inList as $list_item){
            if($list_item['field'] == $search){
                if(!(is_in_list($list_item['product_id'])){
                    $outList[] = $list_item['product_id']
                }
            }
         }
    }

    public function field_contains($field,$search){

        foreach($this->inList as $list_item){
            if(stripos($list_item['field'],$search) !== false){
                if(!(is_in_list($list_item['product_id'])){
                    $outList[] = $list_item['product_id']
                }
            }
         }
    }

    public function contains_field($field,$search){

        foreach($this->inList as $list_item){
            if(stripos($search,$list_item['field']) !== false){
                if(!(is_in_list($list_item['product_id'])){
                    $outList[] = $list_item['product_id']
                }
            }
         }
    }
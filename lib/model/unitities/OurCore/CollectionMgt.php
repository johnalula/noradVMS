<?php 
class CollectionMgt{
  public static function toArray($stors) {
    $choices=array();
    if($stors){
	foreach($stors as $key=>$value) {
	  $choices[$value['id']]=$value['name'];
    }
	}
    return $choices;
  }
  public static function collectionToArray($stors) {
    $choices=array();
    if($stors){
	foreach($stors as $key) {
	 // $choices[]='Select One';
	  $choices[$key->getId()]=$key->getName();
    }
	}
    return $choices;
  }
}

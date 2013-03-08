<?php
class Model extends Prefab{
  
  
  function __construct(){
    F3::set('dB',new DB\SQL('mysql:host='.F3::get('db_host').';port=3306;dbname='.F3::get('db_server'),F3::get('db_user'),F3::get('db_password')));  
  }
  
  
  
  function getCategories(){
    $category=new DB\SQL\Mapper(F3::get('dB'),'categories');
    return $category->find();
  }
  
  function getCategory($id){
    $category=new DB\SQL\Mapper(F3::get('dB'),'location');
    return $category->load(array('id=?',$id));
  }
  function getPictures($category_id){
    $pictures=new DB\SQL\Mapper(F3::get('dB'),'pictures');
    return $pictures->find(array('category_id=?',$category_id));
  }
  
  function create(){
    $image=Web::instance()->receive();
	$pictures=new DB\SQL\Mapper(F3::get('dB'),'pictures');
    if($image){
      $this->_resize($image[0]);
	  //$this->_overlay($image[0]);
      $pictures->src=$image[0];
    }
    $pictures->copyFrom('POST');
    $pictures->save();
  }
  
    
  

  protected function _resize($image){
    $img=new Image(F3::get('UPLOADS').$image,true);
    $img->resize(180,180);
    file_put_contents(F3::get('UPLOADS').$image,$img->dump('jpeg'));
  }
  
  //protected function _overlay('./ui/img/watermark.png'){
   // $img=new Image(F3::get('UPLOADS').$image,true);
	//$img->overlay;
	//file_put_contents(F3::get('UPLOADS').$image,$img->dump('jpeg'));
  //}	
	
  
 
  
  
}
?>
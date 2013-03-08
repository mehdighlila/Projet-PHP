<?php

class MainController {
    

    public function __construct()
    {
  
    }
	
	public function home()
	{
		echo View::instance()->render('index.html');
	}
	
    public function category()
	{
	    function categoryPictures($idLocation){
        //F3::get('dB')->exec('select * from pictures where idLocation='.$idLocation);
		$pictures=new DB\SQL\Mapper(F3::get('dB'),'pictures');
		return $pictures->find(array('category_id',$category_id));
		}
	    echo View::instance()->render('category.html');
	}
	
	public function create()
	{
		switch(F3::get('VERB')){
		  case 'GET':
			echo View::instance()->render('add.php');
		  break;
		  case 'POST':

			Model::instance()->create();

			break;
			echo View::instance()->render('index.html');
		}
	}
	
	public function shop()
	{
		echo View::instance()->render('shop.html');
	}
	
}



?>

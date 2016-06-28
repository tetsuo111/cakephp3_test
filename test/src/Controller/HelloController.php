<?php


namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{
		public function index()
		{
				$str = $this->request->data('text1');
				if($str != null){
						$str = $this->request->data['text1'];
						$this->set('message' , 'you typed:'.$str);
				}else{
						$this->set('message' , 'please type...');
				}
		}
		
		public function err()
		{
				$this->autoRender = false;
				echo "<html><head></head><body>"; 
				echo "<h1>Hello</h1>"; 
				echo "<p>パラメータがありませんでした。</p>";
				echo "</body></html>";

		}
}

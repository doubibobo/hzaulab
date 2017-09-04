<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\TzModel;
class IndexController extends Controller {
    public function index(){
    	$mode = new TzModel();
        $this -> assign("theTz", $mode -> selectAll());
        $this -> display();
    }
}
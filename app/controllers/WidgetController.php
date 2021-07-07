<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WidgetController extends BaseController
{
    public function index()
    {
        return View::make('widgets.index');
    }

    public function store()
    {
    	$input = Input::all();

    	$rules = [
		'name' => 'required|max:255',
		'color' => 'required|max:255'
		];
    	$validator = Validator::make($input,$rules);

    	if (!$validator->fails())
		{
			$name = Input::get('name');
		    $color = Input::get('color');
		    $description = Input::get('description');
		   	$name_check = Widget::where('name', $name)->get();
		   	if($name_check->isEmpty()){
			    $widget = new Widget;
    			$widget->name = $name;
                $widget->color = $color;
				$widget->description = $description;
				$widget->save();
			   return View::make('widgets.index')->with("success", "Widget <i>".$name."</i> has been saved successfully");
		   	}else{
		   		return View::make('widgets.index')->with("error", "Name record ".$name." already exist!");
		   	}
		}else{
			return View::make('widgets.index')->withErrors($validator);
		}

    }

    public function view(){
    	return Widget::all();
    }

    public function delete($id){
    		$checkid = Widget::where('id', $id)->get();
    		if(!$checkid->isEmpty()){
    				Widget::where('id', $id)->delete(); 
    		}else{
    			$exception = new HttpException(500);
    			return $exception;
    		}

    }
}

?>
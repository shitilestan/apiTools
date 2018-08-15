
# #introduction  
**Special API developers**  
  
You can use this class freely instead of switch in php programming language using this class easily.  
  
# #how use it  
first call class in php file

    require_once "apiTools.php";
    $api = new \apexteam\apiTools\apiTools();
and next, put the current action in a variable

    $action = '1';
after put action to variable make actions like it 

    $actions = [
	   "1" => function($action){
			//The operation that this action is doing
				$response["ok"] = true;
	   		    return $response;
			//The operation that this action is doing
	   },
	   "2" => function($action){
			//The operation that this action is doing
				$response["ok"] = true;
				$response["action"] = $action;
	   		    return $response;
			//The operation that this action is doing
	   }
    ];

After designing the action, call those methods in the method

    $api->actions($action, $actions);
After that you have to display the output
` $api->showResponse();`

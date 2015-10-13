<?php

/*
|--------------------------------------------------------------------------
PPp
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('index');
});

Route::post('/', function () {
	$name=Input::get('email_value');
	$password=Input::get('password_value');
	// invoke API to check user information;
	// if matched then  go to main
	return view('main');
});

Route::get('/add', function () {

	return view('add');
});

Route::post('/add', function () {
	$name=Input::get('studentID_value');
	$token=Input::get('token_value');
	$classID=Input::get('classID_value');
	$yearterm=Input::get('yearterm_value');
	$fee=Input::get('fee_value');
	$ch = curl_init();
	$url ="http://connect.svuca.edu/services/registration/classes/add_class.php";

	$postData = '';

	$params=array(
		"studentID" => $name,
		"token" => $token,
		"classID" =>$classID,
		"yearterm" => $yearterm,
		"fee" => $fee

	);
	foreach($params as $k => $v)
	{
		$postData .= $k . '='.$v.'&';
	}
	$postData='studentID=A0229&token=2074188&classID=2914&yearterm=201503&fee=425';
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, count($postData));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
	$output = curl_exec($ch);
	curl_close($ch);

	$selectedCoursesInfo= json_decode($output,true,512);
	dd($selectedCoursesInfo);

});




Route::get('/drop', function () {

	return view('drop');
});

Route::post('/drop', function () {
	$name=Input::get('studentID_value');
	$token=Input::get('token_value');
	$classID=Input::get('classID_value');
	$yearterm=Input::get('yearterm_value');
	$ch = curl_init();
	$url ="http://connect.svuca.edu/services/registration/classes/drop_class.php";

	$postData = '';

	$params=array(
		"studentID" => $name,
		"token" => $token,
		"classID" =>$classID,
		"yearterm" => $yearterm

	);
	
	
	foreach($params as $k => $v)
	{
		$postData .= $k . '='.$v.'&';
	}

	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, count($postData));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
	$output = curl_exec($ch);
	curl_close($ch);

	$selectedCoursesInfo= json_decode($output,true,512);
	dd($selectedCoursesInfo);

});







route::get('/studentRecord',function(){
	$ch = curl_init();
	$postData='studentID=A0229&token=2074188&classID=2914&yearterm=201503';
	curl_setopt($ch, CURLOPT_URL, "http://connect.svuca.edu/services/registration/classes/studentRecord.php");
	curl_setopt($ch, CURLOPT_POST, count($postData));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
	$output = curl_exec($ch);
	curl_close($ch);
	$selectedCoursesInfo= json_decode($output,true,512);
	dd($selectedCoursesInfo);

});

Route::get('/reg', function () {

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://connect.svuca.edu/services/registration/student_class.php?studentID=A0229&token=2074188");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$output = curl_exec($ch);
	curl_close($ch);
//	$coursesInfo= json_decode($output,true,512);
//	//var_dump($coursesInfo);
//	//dd($coursesInfo);
//	$StudentId=  $coursesInfo['StudentID'];
//	//var_dump($StudentId);
//	$courses=$coursesInfo['Data']['CLASS_DATA'];
//
//	$data = array("wang"=>'aa' , "li"=>20, "zhang"=>25);
//	Session::put('courses',$courses);
//	return view('registration')->with('data',$data);

	$coursesInfo= json_decode($output,true,512);
	dd($coursesInfo);
	Session::put('courses',$coursesInfo);
	return view('registration');

});







Route::get('/main', function () {

	return view('main');
});




Route::get('/about/{name?}', function ($name='XXXX') {
	$hello="test";
	$welcome=$name;
	$data=array('hi'=>$hello,'w'=>$welcome);
    return view('about',$data);
})->where('name','[A-Za-z]+');

Route::get('/getInfo', function () {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://apistore.baidu.com/microservice/cityinfo?cityname=%E5%8C%97%E4%BA%AC");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$output = curl_exec($ch);
	curl_close($ch);
	var_dump(json_decode($output, true));

});
Route::get('/db', function () {
    $result=DB::select('select * from user');
	dd($result);
});

Route::get('/welcome', function () {
	return view('welcome');
});


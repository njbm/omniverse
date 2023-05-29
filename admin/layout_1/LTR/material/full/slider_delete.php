<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php
/** collect the intended ID */
   //dd($_POST['id']);
   //$id = $_GET['id'];
  $id = $_POST['id'];
/** communicate with datasource and get data for that id */
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
    $slides = json_decode($dataSlides);

	foreach ($slides as $key=>$slide){
		if ($slide->id == $id){
			break;
		}
	}
// dd($key); to be deleted

	/**
	 * option 1
	 * unset($slides[$key]);
	 *  
	 * */ 
	 unset($slides[$key]);

	//reindexing the array
    $slides = array_values($slides);
	$data_slides = json_encode($slides);
	/**
	 * option 2
	 * array_splice($slides, $key, 1)
	 *  
	 * */ 
	//array_splice($slides, $key, 1); // it reindexes
	//$data_slides = json_encode($slides);
    if(file_exists($datasource."slideritems.json")){
		$result = file_put_contents($datasource."slideritems.json",$data_slides);
	if($result){ // edge case is not handled. if it writes nothing. length = 0

		redirect('slider_index.php');
	}
}
    else{
	echo "File not found";
}

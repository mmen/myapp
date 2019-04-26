<?php

class DerecksSite{

	protected $title = "<title>Welcome to Derek's Hardware Store</title>";
	protected $description = "<meta name=\"description\" content=\"Welcome to B\" />" ;
	protected $keywords = "<meta name=\"keywords\" content=\"Flowers, Seeds\" />" ;
	protected $author = "<meta name=\"author\" content=\"Derek\" />" ;
	
	public function get_title(){
		echo $this->title;
	}
	
	public function get_description(){
		echo $this->description;
	}
	
	public function get_keywords(){
		echo $this->keywords;
	}
	
	public function get_author(){
		echo $this->author;
	}
	
public function get_start_of_site(){

$start = <<<EOD
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8559-1" />
EOD;

	echo $start;

}
	
public function get_close_header(){

$close_header = <<<EOD
</head>
<body>
EOD;
	
	echo $close_header;
	
}

public function get_content(){
$content = <<<EOD
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc faucibus a pellentesque 
sit amet porttitor eget dolor. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Mi eget mauris pharetra et ultrices neque ornare aenean euismod. 
Tincidunt tortor aliquam nulla facilisi cras fermentum odio. Risus nullam eget felis eget. Posuere ac ut consequat semper. Sit amet volutpat consequat mauris nunc. 
Nunc sed id semper risus in. Mauris commodo quis imperdiet massa tincidunt. At elementum eu facilisis sed odio morbi. 
Dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo. In dictum non consectetur a erat nam at lectus urna. 
Metus aliquam eleifend mi in nulla posuere sollicitudin.
EOD;

	echo $content;
}	

public function get_close_page(){

$close_page = <<<EOD
</body>
</html>
EOD;

	echo $close_page;
}

}

?>
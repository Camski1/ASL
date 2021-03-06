<?php
	$this->load->helper("form");
	echo "<div id='writeField'>";
	echo validation_errors();

	$stid = $_GET['storyID'];

	foreach ($results as $rows) {
		$title = $rows->Title;
		$img = $rows->img;
		$subTitle = $rows->subTitle;
		$story = $rows->story;
		$link = $rows->link;
	}
	
	echo form_open_multipart("aysi_news/updateUserStoryRun");


		$data = array(
	        "name" => "storyID",
	        "id" => "storyID",
	        "value" => "{$stid}",
	        "type" => "hidden"
 	    );
	    echo form_input($data);

		echo form_label("Story Type", "type");
	    echo "<br/>";
	    $data = array(
	        "Politics" => "Politics",
	        "Sports" => "Sports",
	        "US" => "US",
	        "World" => "World",
	        "Sci/Tech" => "Sci/Tech",
	        "Travel" => "Travel"
	    );
	    echo form_dropdown('type',$data);

	    echo "<br/>";

	    echo form_label("Title 'Max Length (250)'", "Title");
	    echo "<br/>";
	    $data = array(
	        "name" => "Title",
	        "id" => "Title",
	        "value" => "{$title}"
	    );
	    echo form_input($data);

	    echo "<br/>";

	    echo form_label("Sub-Title 'Max Length (250)'", "subTitle");
	    echo "<br/>";
	    $data = array(
	        "name" => "subTitle",
	        "id" => "subTitle",
	        "value" => "{$subTitle}"
	    );
	    echo form_input($data);

	    echo "<br/>";

	    echo form_label("Story:", "story");
	    echo "<br/>";
	    $data = array(
	        "name" => "story",
	        "id" => "story",
	        "value" => "{$story}",
	        'rows' => '30',
      		'cols' => '122'
	    );
	    echo form_textarea($data);

	    echo "<br/>";

	    echo form_label("Source (URL)", "link");
	    echo "<br/>";
	    $data = array(
	        "name" => "link",
	        "id" => "link",
	        "value" => "{$link}",
	    );
	    echo form_input($data);

	    echo "<br/>";

	    echo form_label("Story Picture JPEG/PNG:", "userfile");
	    echo "<br/>";
	    $data = array(
	        "name" => "userfile",
	        "id" => "userfile",
	        "value" => ""
	    );
	    echo form_upload($data);
	    echo "<br/>";

	    echo form_submit('mysubmit', 'Submit!');

	echo form_close();
	echo "</div>";
?>
<?php
	$this->load->helper("form");
	echo "<div id='writeField'>";
	echo validation_errors();
	echo form_open_multipart("aysi_news/updateProfile");

	foreach ($results as $rows) {
	$about = $rows->about;
	$img = $rows->img;
    }

	echo form_label("About You:", "about");
	    echo "<br/>";
	    $data = array(
	        "name" => "about",
	        "id" => "about",
	        "value" => "{$about}",
	        'rows' => '20',
      		'cols' => '122'
	    );
	    echo form_textarea($data);

	    echo "<br/>";

	    echo form_label("Profile Picture JPEG/PNG:", "userfile");
	    echo "<br/>";
	    $data = array(
	        "name" => "userfile",
	        "id" => "userfile",
	        "value" => "{$img}"
	    );
	    echo form_upload($data);
	    echo "<br/>";

	    echo form_submit('mysubmit', 'Submit!');



	echo form_close();
	echo "</div>";
?> 
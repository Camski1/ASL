     
<div id="formDiv">
    

    <?php 
    $this->load->helper("form");
    echo $message;

    echo form_open("aysi_news/find_user");

    echo form_label("Email:", "email");
    echo "<br/>";
    $data = array(
        "name" => "email",
        "id" => "email",
        "value" => ""
    );
    echo form_input($data);
    echo "<br/>";
    echo form_label("Password:", "password");
    echo "<br/>";
    $data = array(
        "name" => "password",
        "id" => "password",
        "value" => ""
    );
    echo form_input($data);

    echo form_submit('mysubmit', 'Submit!');

    echo form_close();
    echo "<hr>";
/////////////////////////////////////////////////
    echo "<h2>Sign Up for AYSI News</h2>";
    echo validation_errors();
    echo form_open("aysi_news/set_user");
    echo form_label("First Name:", "fName");
    echo "<br/>";
    $data = array(
        "name" => "fName",
        "id" => "fName",
        "value" => ""
    );
    echo form_input($data);

    echo "<br/>";

    echo form_label("Last Name:", "lName");
    echo "<br/>";
    $data = array(
        "name" => "lName",
        "id" => "lName",
        "value" => ""
    );
    echo form_input($data);

    echo "<br/>";

    echo form_label("User Name:", "userName");
    echo "<br/>";
    $data = array(
        "name" => "userName",
        "id" => "userName",
        "value" => ""
    );
    echo form_input($data);

    echo "<br/>";

    echo form_label("Email:", "email");
    echo "<br/>";
    $data = array(
        "name" => "email",
        "id" => "email",
        "value" => ""
    );
    echo form_input($data);

    echo "<br/>";

    echo form_label("Password:", "pass");
    echo "<br/>";
    $data = array(
        "name" => "pass",
        "id" => "pass",
        "value" => ""
    );
    echo form_password($data);

    echo "<br/>";

    echo form_label("Profile Picture JPEG/PNG:", "userfile");
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
    ?>	
</div>
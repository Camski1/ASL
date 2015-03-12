	

	<div id="formDiv">
        <h1>Sign Up for SkiMail</h1>
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <label for="fName">First Name:</label><br/>
            <input type="text" id="fName" name="fName" required/><br/>

            <label for="lName">Last Name:</label><br/>
            <input type="text" id="lName" name="lName" required/><br/>

            <label for="uName">User Name:</label><br/>
            <input type="text" id="uName" name="uName" required/><br/>

            <label for="email">Email:</label><br/>
            <input type="email" id="emailemail" name="email" required/><br/>

            <label for="pass">Password:</label><br/>
            <input type="password" id="passpass" name="pass" required/><br/>

            <label for="userfile">Profile Picture JPEG/PNG:</label><br/>
            <input name="userfile" id="userfile" type="file" required/><br/>

            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
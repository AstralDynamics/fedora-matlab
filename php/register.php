<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.3.4/css/semantic.min.css"></link>
        <link rel="stylesheet" href="../css/global.css"></link>
    </head>
    <body>

    	<br />
    	<br />

        <div id="login_form">

            <h1> Registration!</h1>

        	<div class="ui small form segment piled">
                <h2> Please enter your details below. </h2>
        		<div class="field">
        			<label>Username</label>
        			<input type="text">
        		</div>

        		<div class="field">
        			<label>Password</label>
        			<input type="text">
        		</div>

                <div class="field">
                    <label>Email</label>
                    <input type="text">
                </div>

                <div class="inline ui buttons">
                    <div class="ui button">Cancel</div>
                    <div class="or"></div>
                    <div class="ui positive button" onClick="register_user()">Submit</div>
                </div>


        	</div>

        </div>

        <!--Load scripts-->
        <script type="text/javascript" src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script> 
        <script type="text/javascript" src="../js/register.js"></script>     
    </body>
</html>
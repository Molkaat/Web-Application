<?php
			if (isset($_POST['add_FinalProject'])) {
				// Get the form data
				$TITLE = $_POST['Title'];
				$NAME = $_POST['Name'];
				$YEAR = $_POST['Year'];
				$PASSWD = $_POST['Password'];


				// Load the existing XML file
				$xml = simplexml_load_file('FinalProject.xml');

				// Create a new data element and add the form data as child elements
				$data = $xml->addChild('book');
				$data->addChild('title', $TITLE);
				$data->addChild('name', $NAME);
				$data->addChild('year', $YEAR);
				$data->addChild('password', $PASSWD);


				// Save the updated XML file
				$xml->asXML('FinalProject.xml');
			}
		?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8"> 
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Add Final Project </title>


    <style>
        body {
            background-image: url("https://wallpaperaccess.com/full/5487841.jpg");
            background-size: cover;
            background-position: center top;

        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            text-align: right;
        }

        li {
            display: inline-block;
        }

        li a {
            display: block;
            color: rgb(205, 172, 172);
            text-align: center;
            padding: 1px 8px;
            text-decoration: none;
        }

        body {
            font-family: "Georgia", sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(224, 189, 151);
        }

        h1 {
            font-family: "Georgia", sans-serif;
            font-size: 40px;
            margin-top: 40px;
            margin-bottom: 30px;
            text-align: center;
            color: rgb(224, 189, 151);
        }

        form {
            width: 20%;
            margin: 0 auto;
            padding: 30px;
            background-color: rgba(173, 125, 104, 0.895);
            border-radius: 5px;
            box-shadow: 1 2px 5px rgba(250, 181, 42, 0.3);
        }

        label {
            font-family: "Georgia", sans-serif;
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
            color: rgba(59, 39, 31, 0.895);
        }



        input[type="text"],
        input[type="date"] {
            font-family: "Georgia", sans-serif;
            display: block;
            width: 100%;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }


        .buttonStyle {
            font-family: "Georgia", sans-serif;
            display: block;
            width: 46%;
            padding: 5px;
            font-size: 15px;
            color: #fff;
            background-color: #432a28;

            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
        }

        .buttonStyle:hover {

            background-color: #432a28;
            ;
        }

        .buttonStyle:focus {

            outline: none;
        }


        .cancelButton {
            font-family: "Georgia", sans-serif;
            width: 50%;
            padding: 5px;
            font-size: 15px;
            color: #fff;
            background-color: #432a28;

            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 20px;

        }

        .cancelButton:hover {
            background-color: #432a28;
        }

        .cancelButton:focus {
            outline: none;
        }

        #error-msg {
            font-family: "Georgia", sans-serif;
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #f44336;
            color: #fff;
            font-size: 16px;
            border-radius: 3px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li><a href="Acceuil.html">Home</a></li>
            <li><a href="searchpfe.html">Search final projects</a></li>
        </ul>
        <h1>Add Final Project</h1>

    </header>

    <form id="'add-final-project" method="POST" action="addpfe.php">
        <label>Title </label>
        <input type="text" id="Title" name="Title">

        <label>Name</label>
        <input type="text" id="Name" name="Name" >

        <label>Year</label>
        <input type="number" id="Year" name="Year">

        <label>Password</label>
        <input type="text" id="Password" name="Password">

      
        <div class="button-container">
			<input type="submit" value="Add" name="add_FinalProject" id="add_FinalProject" class="buttonStyle">
			<input type="reset" value="Cancel" class="cancelButton">
		</div>
    </form>
</body>

</html>
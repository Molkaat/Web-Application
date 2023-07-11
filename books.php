<?php
			if (isset($_POST['add_book'])) {
				// Get the form data
				$TITRE = $_POST['Title'];
				$AUTEUR = $_POST['Author'];
				$KEYW = $_POST['Genre'];
				$ISBN = $_POST['Isbn'];
				$ANNEE = $_POST['Publication_date'];


				// Load the existing XML file
				$xml = simplexml_load_file('books.xml');

				// Create a new data element and add the form data as child elements
				$data = $xml->addChild('book');
				$data->addChild('title', $TITRE);
				$data->addChild('author', $AUTEUR);
				$data->addChild('genre', $KEYW);
				$data->addChild('isbn', $ISBN);
				$data->addChild('publication_date', $ANNEE);


				// Save the updated XML file
				$xml->asXML('books.xml');
			}
		?>
<!DOCTYPE html>
<html lang="en">

<head>	
    <meta charset="UTF-8"> 
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Book</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	
	<header>
		<ul>
			<li><a href="Acceuil.html">Home</a></li>
			<li><a href="Sbooks.html">Search Books</a></li>
		</ul>
		<h1>Add book</h1>
	</header>
	<form id="add-book-form" method="POST" action="books.php">
		<label>Title </label>
		<input type="text" id="Title" name="Title" >

		<label>Author </label>
		<input type="text" id="Author" name="Author" >

		<label>Genre </label>
		<select id="Genre" name="Genre" >
			<option value="">-- Select Genre --</option>
			<option value="Horror">Horror</option>
			<option value="Fairy Tale">Fairy Tale</option>
			<option value="Romance">Romance</option>
			<option value="Fantasy">Fantasy</option>
			<option value="Thriller">Thriller</option>
			<option value="Detective & Mystery">Detective & Mystery</option>
			<option value="Science Fiction">Science Fiction</option>
		</select> 

		<label>ISBN </label>
		<input type="text" id="Isbn" name="Isbn" >

		<label>Publication Date </label>
		<input type="number" id="Publication_date" name="Publication_date" >

		<div class="button-container">
			<input type="submit" value="Add" name="add_book" id="add_book" class="buttonStyle">
			<input type="reset" value="Cancel" class="cancelButton">
		</div>
	</form>
	
</body>

</html>
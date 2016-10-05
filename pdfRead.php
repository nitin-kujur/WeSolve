<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>
		<head>
			<title></title>
			<style type="text/css">
				span{
					padding:0 5px;
					background-color: yellow;
				}
				div{
					padding: 5px;
					background-color: green;
					color:white;
				}
			</style>
		</head>
		<body>
		<?php

			if(isset($_POST['submit'])){ 

				$target_dir = "uploads/";
				$target_path = $target_dir . basename($_FILES["pdf_file"]["name"]);
				$search_term = isset($_POST['search_term']) ? $_POST['search_term'] : '';

				if(move_uploaded_file($_FILES['pdf_file']['tmp_name'], $target_path)) {
				    echo "<div>The file [".  basename( $_FILES['pdf_file']['name']). "] has been uploaded</div><br><br>";
				} else{
				    echo "There was an error uploading the file, please try again!";
				}

				include('pdf2text.php');
				$result = pdf2text ($target_path);
				preg_match_all ("/".$search_term."/i", $result, $pat_array);
				$term_count = count($pat_array, COUNT_RECURSIVE) - 1;
				if ($term_count != 0) {
					// $term_count = ($term_count > 1) ? ($term_count - 1) : $term_count;
					$copy_result = preg_replace("/".$search_term."/i", "<span>".$search_term."</span>", $result);
					echo "<div>File contents:</div><br><br><pre>" . $copy_result . "</pre>";
					echo '<br><br><div>found ' . $term_count . ' occurance.</div>';
				}
				else
					echo '<br><br><div>No occurance found.</div>';
			}

			else {

		?>

				<form role='form' method='POST' action='pdfRead.php' enctype="multipart/form-data">
					<div class="form-group">
						<p>
							Upload a pdf file: 
							<input type="file" name="pdf_file" placeholder="" required />
							<input type="text" name="search_term" placeholder="Enter search text" required />
							<input type="submit" value="GET TEXT" name="submit" />
						</p>
					</div>
				</form>

		<?php } ?>

	</body>
</html> 
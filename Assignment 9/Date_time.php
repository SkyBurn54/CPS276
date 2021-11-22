<?php
require_once 'Pdo_methods.php';

class Date_time extends PdoMethods {
	
	public function checkSubmit($post){
		if(isset($post['addNote'])){
			return $this->addNote($post);
		}
		else if(isset($post['getNotes'])){
			return $this->displayNotes($post);
		}
		else{
			return "";
		}
		
	}

	private function addNote($post){

		$timestamp = strtotime($_POST['dateTime']);

		$pdo = new PdoMethods();

		$sql = "INSERT INTO note (date_time, note) VALUES (:ts, :note)";

		$bindings = $bindings = [
			[':ts', $timestamp, 'int'],
			[':note', $_POST['note'], 'str']
		];

		$records = $pdo->otherBinded($sql, $bindings);

		if($records === 'error'){
			return 'There was an error adding the note';
		}
		else {
			return 'Note has been added';
		}

	}


	private function displayNotes($post){
			
		$pdo = new PdoMethods();

		$begDate = strtotime($_POST['begDate']);

		$endDate = strtotime($_POST['endDate']);

		$sql = "SELECT date_time, note FROM note WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time";

		$bindings = $bindings = [
			[':begDate', $begDate, 'int'],
			[':endDate', $endDate, 'int']
		];

		$records = $pdo->selectBinded($sql, $bindings);

		if($records === 'error'){
			return "There was a problem getting the notes";
		}

		if(count($records) == 0){
			return "No notes found for the date range selected";
		}
		else {
			$table ='<table class="table table-striped table-bordered"><thead><th>Date and Time</th><th>Note</th></td></thead><tbody>';

			foreach($records as $row){
				$d = date("n/d/Y h:i a", $row['date_time']);
				$table .= "<tr><td>{$d}</td><td>{$row['note']}</td></tr>";
			}

			$table .= "</tbody></table>";

			return $table;
		}		
	}
}

?>

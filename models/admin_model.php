<?php 

	require_once "model_form.php";
	class AdminForm extends Form {//sets the table name, and the corresponding field names in the database
		function __construct(){
			$this->table_name="administrator";
			$this->id_name="admin_id";

			$this->fields['first_name'] = new TextField();
			$this->fields['last_name'] = new TextField();
			$this->fields['email'] = new TextField();
			$this->fields['password'] = new PasswordField();
		}


	}

?>
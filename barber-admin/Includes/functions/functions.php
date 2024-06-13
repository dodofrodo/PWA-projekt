
<?php
    
    /*
    	=========================================================================================================================
		Title Function That Echo The Page Title In Case The Page Has The Variable $pageTitle And Echo Default Title For Other Pages
		=========================================================================================================================
	*/

	function getTitle()
	{
		global $pageTitle;
		if(isset($pageTitle))
			echo $pageTitle.' | Barbershop Salon';
		else
			echo "Barbershop | Barbershop Salon";
	}

	

	/*
		=============================================================
		** Count Items Function
		** This function counts and return the number of elements in a given table
		==============================================================

	*/


    function countItems($item,$table)
	{
		global $con;
		$stat_ = $con->prepare("SELECT COUNT($item) FROM $table");
		$stat_->execute();
		
		return $stat_->fetchColumn();
	}

    /*
		=============================================================
		** Check Items Function
		** Function to Check Item In Database [Function with Parameters]
		** $select = the item to select [Example : user, item, category]
		** $from = the table to select from [Example : users, items, categories]
		** $value = The value of select [Example: Ossama, Box, Electronics]
		==============================================================

	*/

	function checkItem($select, $from, $value)
	{
		global $con;
		$statment = $con->prepare("SELECT $select FROM $from WHERE $select = ? ");
		$statment->execute(array($value));
		$count = $statment->rowCount();
		
		return $count;
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	/*
		==============================================
		TEST INPUT FUNCTION, IS USED FOR SANITIZING USER INPUTS
		AND REMOVE SUSPICIOUS CHARS and Remove Extra Spaces
		==============================================

	*/

	function generateEmployeeFilterScript() {
		?>
		<script>
			function filterAppointmentsByEmployee(employeeId) {
				var rows = document.querySelectorAll('.employee-appointment-row');
	
				rows.forEach(function(row) {
					var display = row.getAttribute('data-employee-id') == employeeId || employeeId === '' ? 'table-row' : 'none';
					row.style.display = display;
				});
			}
		</script>
		<?php
	}
	
	?>




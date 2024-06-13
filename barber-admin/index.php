<?php 
	session_start();

	//Check If user is already logged in
	if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
	{
        //Page Title
        $pageTitle = 'Dashboard';

        //Includes
        include 'connect.php';
        include 'Includes/functions/functions.php'; 
        include 'Includes/templates/header.php';

?>
	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Naslovna</h1>
			
		</div>

		<!-- Content Row -->
		<div class="row">

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  				Broj klijenata
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("client_id","clients")?></div>
							</div>
							<div class="col-auto">
					  			<i class="bs bs-boy fa-2x text-gray-300"></i>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
					  				Broj šišanja
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("service_id","services")?></div>
							</div>
							<div class="col-auto">
					  			<i class="bs bs-scissors-1 fa-2x text-gray-300"></i>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-info shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
					  				Radnici
					  			</div>
					  			<div class="row no-gutters align-items-center">
									<div class="col-auto">
						  				<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo countItems("employee_id","employees")?></div>
									</div>
					  			</div>
							</div>
							<div class="col-auto">
					  			<i class="bs bs-man fa-2x text-gray-300"></i>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
					  				Rezervacije
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("appointment_id","appointments")?></div>
							</div>
							<div class="col-auto">
					  			<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
				 		</div>
					</div>
			  	</div>
			</div>
		</div>
        <label for="employeeFilter">Odaberi radnika:</label>
<select id="employeeFilter" class="form-control">
    <option value="all">Svi radnici</option>
    <?php
    // Retrieve the list of employees from your database
    $stmtEmployeesList = $con->prepare("SELECT DISTINCT first_name, last_name FROM employees");
    $stmtEmployeesList->execute();
    $rowsEmployeesList = $stmtEmployeesList->fetchAll();
    foreach ($rowsEmployeesList as $employee) {
        echo "<option value=\"" . $employee['first_name'] . " " . $employee['last_name'] . "\">" . $employee['first_name'] . " " . $employee['last_name'] . "</option>";
    }
    ?>
</select>

		<!-- Appointment Tables -->
        <div class="card shadow mb-4">
            <div class="card-header tab" style="padding: 0px !important;background: gray!important">
            	<button class="tablinks active" onclick="openTab(event, 'Upcoming')">
            		Nadolazeće rezervacije
            	</button>
                <button class="tablinks" onclick="openTab(event, 'All')">
                	Sve rezervacije
                </button>
                <button class="tablinks" onclick="openTab(event, 'Canceled')">
                	Otkazane rezervacije
                </button>
            </div>
            <div class="card-body">
            	<div class="table-responsive">
                <table class="table table-bordered tabcontent" id="Upcoming" style="display:table" width="100%" cellspacing="0">
                
                  		<thead>
                                <tr>
                                    <th>
                                        Početno vrijeme
                                    </th>
                                    <th>
                                        Usluga
                                    </th>
                                    <th>
                                        Završetak
                                    </th>
                                    <th>
                                        Klijent
                                    </th>
                                    <th>
                                       Radnik
                                    </th>
                                    <th>
                                        Upravljaj
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $stmt = $con->prepare("SELECT a.*, c.first_name, c.last_name, c.phone_number
                                    FROM appointments a
                                    JOIN clients c ON a.client_id = c.client_id
                                    WHERE start_time >= ?
                                    AND a.canceled = 0
                                    ORDER BY start_time");
                $stmt->execute(array(date('Y-m-d H:i:s')));
                $rows = $stmt->fetchAll();
                $count = $stmt->rowCount();
                                    
                                    

                                    if($count == 0)
                                    {

                                        echo "<tr>";
                                            echo "<td colspan='5' style='text-align:center;'>";
                                                echo "List of your upcoming bookings will be presented here";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    else
                                    {

                                        foreach ($rows as $row) {
                                            echo "<tr>";
                                            echo "<td>" . $row['start_time'] . "</td>";
                                            echo "<td>";
                                            $stmtServices = $con->prepare("SELECT service_name
                                                                FROM services s, services_booked sb
                                                                WHERE s.service_id = sb.service_id
                                                                AND appointment_id = ?");
                                            $stmtServices->execute(array($row['appointment_id']));
                                            $rowsServices = $stmtServices->fetchAll();
                                            foreach ($rowsServices as $rowsService) {
                                                echo "- " . $rowsService['service_name'];
                                                if (next($rowsServices) == true) echo " <br> ";
                                            }
                                            echo "</td>";
                                            echo "<td>" . $row['end_time_expected'] . "</td>";
                                            echo "<td>";
                                            echo $row['first_name'] . " " . $row['last_name'] . "<br>" . $row['phone_number'];
                                            echo "</td>";
                                            echo "<td>";
                                            $stmtEmployees = $con->prepare("SELECT first_name, last_name
                                                                FROM employees e, appointments a
                                                                WHERE e.employee_id = a.employee_id
                                                                AND a.appointment_id = ?");
                                            $stmtEmployees->execute(array($row['appointment_id']));
                                            $rowsEmployees = $stmtEmployees->fetchAll();
                                            foreach ($rowsEmployees as $rowsEmployee) {
                                                echo $rowsEmployee['first_name'] . " " . $rowsEmployee['last_name'];
                                            }
                                            echo "</td>";
                                                   
                                                echo "</td>";
                                                
                                                echo "<td>";
                                                	$cancel_data = "cancel_appointment_".$row["appointment_id"];
                                               		?>
                                               		<ul class="list-inline m-0">

                                                        <!-- CANCEL BUTTON -->

                                                        <li class="list-inline-item" data-toggle="tooltip" title="Cancel Appointment">
                                                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $cancel_data; ?>" data-placement="top">
                                                                <i class="fas fa-calendar-times"></i>
                                                            </button>

                                                            <!-- CANCEL MODAL -->
                                                            <div class="modal fade" id="<?php echo $cancel_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $cancel_data; ?>" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Cancel Appointment</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure you want to cancel this appointment?</p>
                                                                            <div class="form-group">
                                                                                <label>Tell Us Why?</label>
                                                                                <textarea class="form-control" id=<?php echo "appointment_cancellation_reason_".$row['appointment_id'] ?>></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                            <button type="button" data-id = "<?php echo $row['appointment_id']; ?>" class="btn btn-danger cancel_appointment_button">Yes, Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </li>
                                                    </ul>

                                               		<?php
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                    }

                                ?>

                            </tbody>
                	</table>
                	<table class="table table-bordered tabcontent" id="All" width="100%" cellspacing="0">
                  		<thead>
                            <tr>
                                <th>
                                    Start Time
                                </th>
                                <th>
                                    Booked Services
                                </th>
                                <th>
                                    End Time Expected
                                </th>
                                <th>
                                    Client
                                </th>
                                <th>
                                    Employee
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $stmt = $con->prepare("SELECT * 
                                                FROM appointments a , clients c
                                                where a.client_id = c.client_id
                                                order by start_time;
                                                ");
                                $stmt->execute(array());
                                $rows = $stmt->fetchAll();
                                $count = $stmt->rowCount();

                                if($count == 0)
                                {

                                    echo "<tr>";
                                        echo "<td colspan='5' style='text-align:center;'>";
                                            echo "List of your all bookings will be presented here";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                else
                                {

                                    foreach($rows as $row)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $row['start_time'];
                                            echo "</td>";
                                            echo "<td>";
                                                $stmtServices = $con->prepare("SELECT service_name
                                                        from services s, services_booked sb
                                                        where s.service_id = sb.service_id
                                                        and appointment_id = ?");
                                                $stmtServices->execute(array($row['appointment_id']));
                                                $rowsServices = $stmtServices->fetchAll();
                                                foreach($rowsServices as $rowsService)
                                                {
                                                    echo $rowsService['service_name'];
                                                    if (next($rowsServices)==true)  echo " + ";
                                                }
                                            echo "</td>";
                                            echo "<td>";
                                                echo $row['end_time_expected'];
                                        
                                            echo "</td>";
                                            echo "<td>";
                                                echo $row['last_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                $stmtEmployees = $con->prepare("SELECT first_name,last_name
                                                        from employees e, appointments a
                                                        where e.employee_id = a.employee_id
                                                        and a.appointment_id = ?");
                                                $stmtEmployees->execute(array($row['appointment_id']));
                                                $rowsEmployees = $stmtEmployees->fetchAll();
                                                foreach($rowsEmployees as $rowsEmployee)
                                                {
                                                    echo $rowsEmployee['first_name']." ".$rowsEmployee['last_name'];
                                                    
                                                }
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                	</table>
                	<table class="table table-bordered tabcontent" id="Canceled" width="100%" cellspacing="0">
                  		<thead>
                            <tr>
                                <th>
                                    Start Time
                                </th>
                                <th>
                                    Client
                                </th>
                                <th>
                                    Cancellation Reason
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $stmt = $con->prepare("SELECT * 
                                                FROM appointments a , clients c
                                                where canceled = 1
                                                and a.client_id = c.client_id
                                                ");
                                $stmt->execute(array());
                                $rows = $stmt->fetchAll();
                                $count = $stmt->rowCount();

                                if($count == 0)
                                {

                                    echo "<tr>";
                                        echo "<td colspan='5' style='text-align:center;'>";
                                            echo "List of your canceled bookings will be presented here";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                else
                                {

                                    foreach($rows as $row)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $row['start_time'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $row['last_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                
                                                echo $row['cancellation_reason'];
                                                    
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                }

                            ?>

                        </tbody>
                	</table>
              	</div>
            </div>
        </div>
	</div>


<?php
        
		//Include Footer
		include 'Includes/templates/footer.php';
	}
	else
    {
    	header('Location: login.php');
        exit();
    }

?>

<script>
    document.getElementById('employeeFilter').addEventListener('change', function () {
        var selectedEmployee = this.value;
        var rows = document.querySelectorAll('#Upcoming tbody tr');

        for (var i = 0; i < rows.length; i++) {
            var employeeColumn = rows[i].querySelector('td:nth-child(5)'); // Assuming the employee column is the 5th column

            if (selectedEmployee === 'all' || employeeColumn.textContent.trim() === selectedEmployee) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    });
</script>

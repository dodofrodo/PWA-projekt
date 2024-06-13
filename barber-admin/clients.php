<?php
    session_start();

     //Page Title
    $pageTitle = 'Clients';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Check If user is already logged in
    if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
    {
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Klijenti</h1>
                
            </div>

            <!-- Clients Table -->
            <?php
                $stmt = $con->prepare("SELECT * FROM clients");
                $stmt->execute();
                $rows_clients = $stmt->fetchAll(); 
            ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Klijenti</h6>
                </div>
                <div class="card-body">
                    
                    <!-- Clients Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID#</th>
                                    <th scope="col">Ime</th>
                                    <th scope="col">Prezime</th>
                                    <th scope="col">Broj mobitela</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($rows_clients as $client)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $client['client_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['first_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['last_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['phone_number'];
                                            echo "</td>";
                                        echo "</tr>";
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
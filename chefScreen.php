<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Account Screen</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>

<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/clogo.png" width="50" height="50" alt="Logo" class="navbar-logo">
                Hooman Coffee
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="accountScreen.php">Account Screen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="chefScreen.php">Chef Screen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>




    <section>
        <br>
        <br>
        <h1 align=center>Chef Screen</h1>
        <?php
        $retrieveConnection = new mysqli("localhost", "root", "", "coffee");

        // Retrieve data from each table

        $retrieveData3 = "SELECT * FROM tablenumber";
        $retrieveData4 = "SELECT * FROM menuitem";
        $retrieveData6 = "SELECT * FROM itemqty";


        $db3 = $retrieveConnection->query($retrieveData3);
        $db4 = $retrieveConnection->query($retrieveData4);
        $db6 = $retrieveConnection->query($retrieveData6);


        // Fetch rows from each table

        $rows3 = $db3->fetch_all(MYSQLI_ASSOC);
        $rows4 = $db4->fetch_all(MYSQLI_ASSOC);

        $rows6 = $db6->fetch_all(MYSQLI_ASSOC);


        echo '<div class="container my-4" align=center>';
        echo '  <div>';
        echo '    <h4>Customer Details</h4>';
        echo '    <div align=center>';
        echo "      <h4>Table Number: " . $rows3[0]['tableNumber'] . "</h4>";
        echo '    </div>';
        echo '  </div>';
        echo '</div>';



        echo "<div class=\"table-container\">";
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Menu Item</th>";
        echo "<th>Quantity</th>";
        echo "</tr>";
        $totalAmount = 0;
        // Iterate over the rows and display the values
        for ($i = 0; $i < count($rows4); $i++) {
            echo "<tr>";
            echo "<td>" . $rows4[$i]['itemName'] . "</td>";
            echo "<td>" . $rows6[$i]['itemQuantity'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        echo "</div>";
        $retrieveConnection->close();
        ?>
    </section>


    <section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>&copy; 2023 Hooman Coffee. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

    </section>





    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
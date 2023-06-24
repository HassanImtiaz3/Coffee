<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
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

        <form action="addToCart.php" method="POST">
            <div class="container my-4">
                <div class="row g-3 my-4 ">
                    <div class="col">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">First Name</label>
                        <input required type="text" name="fName" class="form-control" placeholder="First name" />
                    </div>
                    <div class="col">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Last Name</label>
                        <input required type="text" name="lName" class="form-control" placeholder="Last name" />
                    </div>
                </div>
                <div class="row g-3 my-4">
                    <div class="col">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Table Number</label>
                        <input required type="text" name="tableNumber" class="form-control" placeholder="Enter your Table Number" />
                    </div>
                </div>
            </div>
            <h2 align=center>Our Menu</h2>
            <div class="table-container">
                <table class='table'>
                    <tr>
                        <th>Menu Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                    <tr>
                        <td>Coffee</td>
                        <td>550</td>
                        <td>
                            <input type="number" name="quantity_coffee" min="0" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Tea</td>
                        <td>250</td>
                        <td>
                            <input type="number" name="quantity_tea" min="0" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Organic Tea</td>
                        <td>450</td>
                        <td>
                            <input type="number" name="quantity_organic" min="0" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Mocca Latte</td>
                        <td>850</td>
                        <td>
                            <input type="number" name="quantity_mocca" min="0" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Espresso</td>
                        <td>1250</td>
                        <td>
                            <input type="number" name="quantity_espresso" min="0" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Americano</td>
                        <td>1350</td>
                        <td>
                            <input type="number" name="quantity_americano" min="0" value="0">
                        </td>
                    </tr>
                </table>



            </div>
            <center>
                <p>Total Amount: <span id="totalAmount">PKR 0.00</span></p>
                <input type="submit" class="btn btn-primary" value="Add to Cart">

            </center>

        </form>



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
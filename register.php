<?php include('includes/header.php'); ?>
<br>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="py-5">
        <div class="small-container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Registration Form</h4>
                        </div>
                        <div class="card-body">

                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your Name ">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="number" class="form-control" placeholder="Enter your Phone number ">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email address ">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password ">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password ">
                                </div>
                                <button type="submit" class="btn btn-outline-dark">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php include('includes/footer.php'); ?>
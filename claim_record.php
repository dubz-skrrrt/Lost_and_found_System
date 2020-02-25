<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>LOFS</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="admin_page.php"><img src="ARRC.png" alt="logo" width=200 height=75 ></a></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Admin</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dashboard</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="tables.php">Tables</a>
                        </li>
                        <li>
                            <a href="#">Overview</a>
                        </li>
                        <li>
                            <a href="#">Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="search.php">Search</a>
                </li>   
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Transactions</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="item_record.php">Record Lost Item</a>
                        </li>
                        <li>
                            <a href="claim_record.php">Record Claim</a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                
                <!-- <li>
                    <a href="#">Contact</a>
                </li> -->
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span><img src="ARRC-A.png" alt="logo" width=24 height=24></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>

            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputID">Student ID Number</label>
                <input type="type" class="form-control" id="inputID" placeholder="e.g. 2018123456" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputClaimant">Name of Claimant</label>
                <input type="text" class="form-control" id="inputClaimant" required>
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="inputDesc">Description</label>
                <input type="text" class="form-control" id="inputDesc" required>
            </div>
            <div class="form-group">
                <label for="inputDate">Date Found</label>
                <input type="date" class="form-control" id="inputDate" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSG">Security Guard</label>
                <input type="text" class="form-control" id="inputSG" placeholder="lastname" required>
                </div>
                <div class="form-group col-md-4 ">
                <label for="inputState">Semester</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02" required>
                        <option selected>Choose...</option>
                        <option value="1">1st SEM</option>
                        <option value="2">2nd SEM</option>
                        <option value="3">3rd SEM</option>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                    </div>

                </div>
                </div>
                
            </div> -->
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
    
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
    
    <?php
        if(isset($_POST['submit'])){

        }

    ?>
</body>

</html>
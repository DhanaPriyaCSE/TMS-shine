<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="../Sidebar/style.css">

        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <title>Sidebar menu</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="assets/icons/logo.svg" alt="" class="nav__logo-icon">
                        <span class="nav__logo-text">Shine</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>

                    <ul class="nav__list">
                        <a href="#" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Home</span>
                        </a>
                        <a href="admission.php" class="nav__link">
                            <i class='bx bx-edit nav__icon' ></i>
                            <span class="nav__text">Admission</span>
                        </a>
                        <a href="add_staff.php" class="nav__link">
                            <i class='bx bx-user-plus nav__icon' ></i>
                            <span class="nav__text">Add Staff</span>
                        </a>
                        <a href="add_fees.php" class="nav__link">
                            <i class='bx bx-money nav__icon' ></i>
                            <span class="nav__text">Fees</span>
                        </a>
                        <a href="add_fees_type.php" class="nav__link">
                            <i class='bx bx-calendar-check nav__icon'></i>
                            <span class="nav__text">Fees Type</span>
                        </a>                    
                        <a href="attendance.php" class="nav__link">
                            <i class='bx bx-calendar-check nav__icon'></i>
                              <span class="nav__text">Attendance</span>
                        </a>
                        <a href="view_student.php" class="nav__link">
                            <i class='bx bx-street-view nav__icon' ></i>
                            <span class="nav__text">View Student</span>
                        </a>                 
                    </ul>
                </div>
                <a href="#" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Close</span>
                </a>
            </nav>
        </div>
       
      
    </body>
    <!-- MAIN JS -->

</html>   
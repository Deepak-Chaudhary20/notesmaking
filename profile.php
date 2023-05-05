session_start();
<!--if(!isset($_SESSION['user_id'])){-->
<!--    header("location: index.php");-->
<!--}-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Diary Making Platform</title>
    <i class="fa fa-navicon" aria-hidden="true"></i>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        #profile {
            background-color: white;
            color: black;
        }
        #usersection {
            height: 100vh;
            color: white;
        }
        table tr:hover {
            background-color: white;
            color: black;
            border: 4px solid grey;
        }
        tr {
            height: 60px;
            font-weight: 600;
            font-family: monospace;
        }
        .rightsectionoftable {
            width: 30%;
        }
        #logout{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- navigation section of the body  -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)"><img src="logo1.jpg" alt="" height="45px" width="45px"
                        style="margin-right: 5px" style="font-family: cursive;" style="border: 1px solid white;"><span
                        id="online" style="font-size: 25px;">Online
                        Notes</span></a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"
                    aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto text-center" style="font-size: 24px;">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" id="profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">ContactUs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mainpageloggedin.php" class="active" active>MyNotes</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary btn-lg text-white"><a href="index.php?logout=1" id="logout" class="text-white" >Log Out</a></button>
                </div>
            </div>
        </nav>
    </header>
    <!-- navigation section ends  -->
    <!-- main section of the body  -->
    <section id="usersection" class="mb-5 mt-5">
        <div class="mt-5 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <h1>General Account Settings</h1> <br>
                    <table class="table table-bordered text-white">
                        <tr data-bs-target="#updateusername" data-bs-toggle="modal" data-bs-toggle="tooltip"
                            title="Update Your Username!">
                            <td class="rightsectionoftable">Username</td>
                            <td>value</td>
                        </tr>
                        <tr data-bs-target="#updateemail" data-bs-toggle="modal">
                            <td class="rightsectionoftable">Email:</td>
                            <td>Value</td>
                        </tr>
                        <tr data-bs-target="#updatepassword" data-bs-toggle="modal" data-bs-toggle="tooltip" title="Update Your Password!">
                            <td class="rightsectionoftable">Password</td>
                            <td>hidden</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- main section of the body ends  -->
    <!-- footer section starts from there  -->
    <div id="footersection">
        <div class="container mt-5 text-white mb-5" style="font-family: monospace;">
            <div class="row" id="footer-row">
                <div class="col-sm-4 mb-3">
                    <h3><strong>About Me</strong></h3>
                    <p>Deepak Chaudhary: A Full-Stack Web Developer</p>
                    <p>Address: Village-Nagla Shekhu, khurja, Bulandshahr</p>
                    <a href="http://deepak.host20.uk/DeepakChaudhary" id="deepak" style="font-size: 20px"
                        style="padding: 5px">More About Me</a>
                </div>
                <div class="col-sm-4">
                    <h4> <strong>My Project Portfolio</strong></h4>
                    <ol>
                        <li>StopWatch Website</li>
                        <li>Personal Portfolio Website</li>
                        <li>Notes Making Application</li>
                        <li>Education Tutor Website</li>
                        <li>Landing Page</li>
                        <li>Calculator</li>
                    </ol>
                </div>
                <div class="col-sm-4 socialicons">
                    <h3> <strong>Follow Us:</strong></h3>

                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section ends there  -->
    <!-- update username -->
    <form method="post" id="updateusernameform">
        <div class="modal fade" id="updateusername" style="font-family: monospace;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Username:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- an error messages came from php file written there  -->
                        <div id="updateusernamemessage">
                            <!-- show error messages from php file  -->
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="username" class="form-label sr-only">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username"
                                name="username">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="button" class="btn btn-success" value="submit" name="updateusername">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <!-- update usernameform ends  -->
    <!-- update email  -->
    <form method="post" id="updateemailform">
        <div class="modal fade" id="updateemail" style="font-family: monospace;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Change Your Email Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- an error messages came from php file written there  -->
                        <div id="updateemailmessages">
                            <!-- show error messages from php file  -->
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label sr-only"></label>
                            <input type="text" class="form-control" id="email" placeholder="Email"
                                name="email">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="button" class="btn btn-success" value="submit" name="updateuseremail">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <!-- update emailsectionform ends  -->
    <!-- update password  -->
    <form method="post" id="updatepasswordform">
        <div class="modal fade" id="updatepassword" style="font-family: monospace;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Username:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- an error messages came from php file written there  -->
                        <div id="updatepasswordmessage">
                            <!-- show error messages from php file  -->
                        </div>
                        <div class="form-group mb-3">
                            <label for="currentpassword" class="sr-only" >Your Current Password:</label>
                            <input class="form-control" type="password" name="currentpassword" id="currentpassword" maxlength="30" placeholder="Your Current Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="sr-only" >Choose a password:</label>
                            <input class="form-control" type="password" name="password" id="password" maxlength="30" placeholder="Choose a password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password2" class="sr-only" >Confirm password:</label>
                            <input class="form-control" type="password" name="password2" id="password2" maxlength="30" placeholder="Confirm password">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="button" class="btn btn-success" value="submit" name="updatepassword">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <!-- update emailPassword ends  -->



    <script src="javascript.js"></script>
</body>

</html>
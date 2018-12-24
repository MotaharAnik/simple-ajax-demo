<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="image/20170114_143809.jpg" type="image/x-icon">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
             @import "font-awesome.min.css";
            @import "font-awesome-ie7.min.css";
            /* Space out content a bit */
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            /* Everything but the jumbotron gets side spacing for mobile first views */
            .header,
            .marketing,
            .footer {
              padding-right: 15px;
              padding-left: 15px;
            }

            /* Custom page header */
            .header {
              border-bottom: 1px solid #e5e5e5;
            }
            /* Make the masthead heading the same height as the navigation */
            .header h3 {
              padding-bottom: 19px;
              margin-top: 0;
              margin-bottom: 0;
              line-height: 40px;
            }

            /* Custom page footer */
            .footer {
              padding-top: 19px;
              color: #777;
              border-top: 1px solid #e5e5e5;
            }

            /* Customize container */
            @media (min-width: 768px) {
              .container {
                max-width: 730px;
              }
            }
            .container-narrow > hr {
              margin: 30px 0;
            }

            /* Main marketing message and sign up button */
            .jumbotron {
              text-align: center;
              border-bottom: 1px solid #e5e5e5;
            }
            .jumbotron .btn {
              padding: 14px 24px;
              font-size: 21px;
            }

            /* Supporting marketing content */
            .marketing {
              margin: 40px 0;
            }
            .marketing p + h4 {
              margin-top: 28px;
            }

            /* Responsive: Portrait tablets and up */
            @media screen and (min-width: 768px) {
              /* Remove the padding we set earlier */
              .header,
              .marketing,
              .footer {
                padding-right: 0;
                padding-left: 0;
              }
              /* Space out the masthead */
              .header {
                margin-bottom: 30px;
              }
              /* Remove the bottom border on the jumbotron for visual effect */
              .jumbotron {
                border-bottom: 0;
              }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="well">Registration Form</h1>
            <div class="col-lg-12 well">
                <div class="row">
                    <form action="" method="post">
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter Name Here.." value="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" value=" " placeholder="Enter Email Address Here.." class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" value="" placeholder="Enter Phone Number Here.." class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="birthday" placeholder="Enter birthday Here.." value="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>NID</label>
                                    <input type="text" name="nid" value=" " placeholder="Enter NID Here.." class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>District</label>
                                    <input type="text" name="district" value="" placeholder="Enter District Here.." class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Thana</label>
                                <input type="text" name="thana" placeholder="Enter Thana Name Here.." value="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Post</label>
                                    <input type="text" name="post" value=" " placeholder="Enter Post Here.." class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="" placeholder="Enter Address Here.." class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Proffession</label>
                                <input type="text" name="ocupation" placeholder="Enter Proffession Here.." value="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Blood Group</label>
                                    <input type="text" name="blood" value=" " placeholder="Enter Blood Group Here.." class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Your Fevourite</label>
                                    <input type="text" name="like" value="" placeholder="Enter like Here.." class="form-control">
                                </div>
                            </div>
                            <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">      
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>

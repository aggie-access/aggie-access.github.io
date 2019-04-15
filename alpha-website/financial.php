<?php
include 'config.php';
?>

<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Financial Aid</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/favicon.png" type="image/png" sizes="16x16">
        <link href='https://fonts.googleapis.com/css?family=Proxima+Nova:400,700' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/stylesheets/stylesheet.css">
		<script type="text/javascript">
            $(document).ready(function(){
                $('#choice').on('change', function() {
                    if ( this.value == '1')
                    {
                        $("#financial-aid-results-1").show();
                        $("#financial-aid-results-2").hide();
                    }
                    else
                    {
                        $("#financial-aid-results-1").hide();
                        $("#financial-aid-results-2").show();
                    }
                });
            });
		</script>

    </head>
    
    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container" style="height:80px;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/dashboard.php"><img src="/images/Logo.png" style="width:325px;"></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
            <div class="container-fluid" style="background:#004684;">
                <div class="container">
                    <div class="navbar-header welcome-message">
                        Welcome, <?=$_SESSION['name']?>!
                    </div>
                <ul class="nav navbar-nav">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">Student Profile</a></li>
                    <li><a href="search.php">Course Search</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li class="active"><a href="financial.php">Financial Aid</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
                        
            <h1>Financial Aid</h1>
            <p style="margin-bottom:35px;">Select an award year below to view your financial aid information. This will include any grants, loans, and scholarships that you may have received. Additionally, you can also view your eligibility status for financial aid, which is based on your academic progress.</p>
            
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Award Year</label>
                            <select id="choice" class="form-control">
                              <option disabled selected value>Select Award Year</option>
                              <option value="1">2018 - 2019 Award Year</option>
                              <option value="2">2019 - 2020 Award Year</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
                        
            <div id="financial-aid-results-1" style="display:none;">
                
                <h2>Award</h2>
                <p style="margin-bottom:35px;">Your financial aid award for the selected school year is displayed below. This information includes the types of awards you received, the status of those awards, the amount each award will apply towards the fall semester, the amount each award will apply towards the spring semester, and the total award package you received for the school year from each fund.</p>
                
                <table class="table table-striped" style="margin-bottom:35px;">
                    <thead>
                        <tr>
                            <th>Fund</th>
                            <th>Status</th>
                            <th>Fall Award Package</th>
                            <th>Spring Award Package</th>
                            <th>Total Award Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Federal Pell Grant</td>
                            <td>Accepted</td>
                            <td>$500.00</td>
                            <td>$500.00</td>
                            <td>$1,000.00</td>
                        </tr>
                        <tr>
                            <td>Campus Based Tuition Grant</td>
                            <td>Accepted</td>
                            <td>$1,000.00</td>
                            <td>$1,000.00</td>
                            <td>$2,000.00</td>
                        </tr>
                        <tr>
                            <td>UNC Need Based Grant</td>
                            <td>Accepted</td>
                            <td>$2,000.00</td>
                            <td>$2,000.00</td>
                            <td>$4,000.00</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Eligibility Status</h2>
                <p style="margin-bottom:35px;">Below are the details of your financial aid eligibility status. In order to be eligible for financial aid, you must have no financial aid holds on your record and you must be meeting satisifactory academic progress standards.</p>

                <h3>Holds</h3>
                <p style="margin-bottom:35px;">You have no financial aid holds placed on your record for the selected award year.</p>

                <h3>Satisfactory Academic Progess Standards</h3>
                <p style="margin-bottom:35px;">Based on your academic transcript, you are <strong>meeting satisifactory academic progress standards</strong>. Your eligibility will be assessed at the end of each semester based on you academic performance, so check back after each semester to determine your current standing.</p>

                <h3>Student Eligibility Progress</h3>
                <p style="margin-bottom:35px;">There are several factors that are involved in calculating your federally required Satisfactory Academic Progress Standards, including your cumulative GPA, degree program completion rate, and the total amount of credit hours you have attempted.</p>

                <h4>Cumulative GPA</h4>
                <p>To remain eligible for financial aid, your cumulative GPA must remain at least a 2.0 if you are an undergraduate and a 3.0 if you are a graduate.</p>
                <p style="margin-bottom:35px;">Congratulations, your current cumulative GPA is <strong>3.33</strong>. Keep up the good work!</p>

                <h4>Degree Program Completion Rate</h4>
                <p>You must be progressing toward completion of your degree program at a satisfactory rate as demonstrated by passing at least 67% of all attempted hours.</p>
                <p style="margin-bottom:35px;">Congratulations, your percentage completion rate is <strong>97.52%</strong>. Keep up the good work!</p>

                <h4>Total Attempted Credit Hours</h4>
                <p>Your total attempted hours must not exceed 150% of your degree program's length. Undergraduates must complete their programs within 186 hours attempted and graduate students must complete their program within 54 attempted hours.</p>
                <p style="margin-bottom:35px;">You have attempted <strong>121</strong> hours in your current degree program, and you have earned <strong>118</strong>.</p>
            
            </div>
            
            <div id="financial-aid-results-2" style="display:none;">
                
                <h2>Award</h2>
                <p style="margin-bottom:35px;">Your financial aid award for the selected school year is displayed below. This information includes the types of awards you received, the status of those awards, the amount each award will apply towards the fall semester, the amount each award will apply towards the spring semester, and the total award package you received for the school year from each fund.</p>
                
                <table class="table table-striped" style="margin-bottom:35px;">
                    <thead>
                        <tr>
                            <th>Fund</th>
                            <th>Status</th>
                            <th>Fall Award Package</th>
                            <th>Spring Award Package</th>
                            <th>Total Award Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Federal Pell Grant</td>
                            <td>Accepted</td>
                            <td>$250.00</td>
                            <td>$250.00</td>
                            <td>$500.00</td>
                        </tr>
                        <tr>
                            <td>Campus Based Tuition Grant</td>
                            <td>Accepted</td>
                            <td>$1,000.00</td>
                            <td>$1,000.00</td>
                            <td>$2,000.00</td>
                        </tr>
                        <tr>
                            <td>UNC Need Based Grant</td>
                            <td>Accepted</td>
                            <td>$1,000.00</td>
                            <td>$1,000.00</td>
                            <td>$2,000.00</td>
                        </tr>
                        <tr>
                            <td>National Alumni Scholarship</td>
                            <td>Accepted</td>
                            <td>$2,500.00</td>
                            <td>$2,500.00</td>
                            <td>$5,000.00</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Eligibility Status</h2>
                <p style="margin-bottom:35px;">Below are the details of your financial aid eligibility status. In order to be eligible for financial aid, you must have no financial aid holds on your record and you must be meeting satisifactory academic progress standards.</p>

                <h3>Holds</h3>
                <p style="margin-bottom:35px;">You have no financial aid holds placed on your record for the selected award year.</p>

                <h3>Satisfactory Academic Progess Standards</h3>
                <p style="margin-bottom:35px;">Based on your academic transcript, you are <strong>meeting satisifactory academic progress standards</strong>. Your eligibility will be assessed at the end of each semester based on you academic performance, so check back after each semester to determine your current standing.</p>

                <h3>Student Eligibility Progress</h3>
                <p style="margin-bottom:35px;">There are several factors that are involved in calculating your federally required Satisfactory Academic Progress Standards, including your cumulative GPA, degree program completion rate, and the total amount of credit hours you have attempted.</p>

                <h4>Cumulative GPA</h4>
                <p>To remain eligible for financial aid, your cumulative GPA must remain at least a 2.0 if you are an undergraduate and a 3.0 if you are a graduate.</p>
                <p style="margin-bottom:35px;">Congratulations, your current cumulative GPA is <strong>3.45</strong>. Keep up the good work!</p>

                <h4>Degree Program Completion Rate</h4>
                <p>You must be progressing toward completion of your degree program at a satisfactory rate as demonstrated by passing at least 67% of all attempted hours.</p>
                <p style="margin-bottom:35px;">Congratulations, your percentage completion rate is <strong>98.52%</strong>. Keep up the good work!</p>

                <h4>Total Attempted Credit Hours</h4>
                <p>Your total attempted hours must not exceed 150% of your degree program's length. Undergraduates must complete their programs within 186 hours attempted and graduate students must complete their program within 54 attempted hours.</p>
                <p style="margin-bottom:35px;">You have attempted <strong>133</strong> hours in your current degree program, and you have earned <strong>130</strong>.</p>
            
            </div>
            
        </div>
           
    </body>
    
</html>
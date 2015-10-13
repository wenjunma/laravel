<!DOCTYPE html>
<html>
<head>
    <title>SVU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>



<script src="https://code.jquery.com/jquery.js"></script>




<div class="container">
    <div class="row">
        <div class="span4">
        </div>
        <div class="span4">
            <h2 class="text-error">
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   &nbsp;
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   &nbsp;
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   &nbsp;Welcome Wenjun Ma
            </h2>
        </div>
        <div class="span4">
        </div>
    </div>
    <div class="row">
        <div class="span4">
        </div>
        <div class="span4">
            <ul class="nav nav-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="/main">Account</a></li>
                    <li><a href="#">Grade</a></li>
                    <li class="active"><a href="#">Registration</a></li>

                </ul>

            </ul>

            <?php
            $isHas  = Session::has('courses');
            $response= Session::get('courses');
            $courses=$response['Data']['CLASS_DATA'];

            ?>



            <table style="width:100%" border="1">
                <tr>
                    <th>COURSE_NO</th>
                    <th>COURSE_TITLE</th>
                    <th>INSTR_NAME</th>
                    <th>AVAILABLE</th>
                    <th>DAY</th>
                    <th>TIME</th>
                    <th>FEE</th>
                </tr>
                <?php
                for($i=0;$i<count($courses);$i++){
                    echo '<tr><td>'.($courses[$i]['COURSE_NO']).'</td>';
                    echo '<td>'.($courses[$i]['COURSE_TITLE']).'</td>';
                    echo '<td>'.($courses[$i]['COURSE_INSTR']).'</td>';
                    echo '<td>'.($courses[$i]['COURSE_AVAILABLE']).'</td>';
                    echo '<td>'.($courses[$i]['COURSE_DAY']).'</td>';
                    echo '<td>'.($courses[$i]['COURSE_TIME']).'</td>';
                    echo '<td>'.($courses[$i]['COURSE_FEE']).'</td></tr>';
                }


                ?>
            </table>









        </div>
        <div class="span4">
        </div>
    </div>
</div>


</body>
</html>
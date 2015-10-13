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

<script src="js/bootstrap.min.js"></script>


<div class="container">
    <div class="row">
        <div class="span4">
        </div>
        <div class="span4">
            <h3 class="text-info">
               login SVU
            </h3>
        </div>
        <div class="span4">
        </div>
    </div>
    <div class="row">
        <div class="span4">
        </div>
        <div class="span4">
            {!! Form::open(array('url' => '/')) !!}
            <?php
            echo Form::label('email', 'E-Mail Address: ');
            echo Form::text('email_value');
            echo Form::label('password', 'Password: ');
            echo Form::password('password_value');
            echo Form::submit('Login!');
            ?>
            {!! Form::close() !!}
        </div>
        <div class="span4">
        </div>
    </div>
</div>


</body>
</html>


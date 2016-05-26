<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <input type="hidden" id="mobile-element" value="09123456788">
    <div class="content" id="content">
        <div class="title">Whoops!</div>
        <form method="post" id="form" action="/test">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label>Telephone</label>
                <input type="tel" class="form-control" placeholder="Telephone">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="test@example.com">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </label>
            </div>
            <button type="submit" name="save" id="save" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<!-- Latest compiled and HTML2Canvas -->
<script type="text/javascript" src="http://52.50.217.124/js/snapshot.min.js"></script>

<!-- Sample Script -->
<script type="text/javascript">
    <!--
    $(document).ready(function () {
        $('#save').EagleEye({
            container: $('#content'),
            mobile: $('#mobile-element'),
            extra: {
                'one': 'uno',
                'two': 'dos',
                'three': 'tres'
            },
            complete: function () {
                console.log('ahay!');
//                $(document).find('form#form').submit();
            }
        });
    });
    -->
</script>

</body>
</html>

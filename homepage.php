<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Guestbook</title>
</head>
<body>

<!--<form method="post">
    <input type="hidden" name="submitted">
    <button type="submit" class="btn btn-danger">Refresh</button>
</form>-->

<div class="container">
    <h1>This is our Guestbook</h1>


    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Author:</label>
                <input type="text" id="email" name="authorName" class="form-control"
                       value="<?php if (isset($_POST['authorName']))
                       {
                           echo ($_POST['authorName']);
                       }
                       else {
                           echo('Please enter your name');
                       }
                       ?>"/>
<!--                <div name="errorEmail" class="form-control alert alert-danger">Temp placeholder error</div>-->
            </div>

        </div>

        <fieldset>
            <legend>Thanks for your stay</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Title:</label>
                    <input type="text" name="title" id="title" class="form-control"
                           value="<?php if (isset($_POST['title'])){
                               echo ($_POST['title']);
                           }
                           else {
                               echo('Please enter your title');
                           }
                           ?>"/>
<!--                    <div name="errorStreet" class="form-control alert alert-danger">Temp placeholder error</div>-->
                </div>
            </div>

        </fieldset>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="street">Your message:</label>
                <input type="text" name="message" id="message" class="form-control"
                       value="<?php if (isset($_POST['message'])){
                           echo ($_POST['message']
                           );
                       }
                       else {
                           echo('Please enter your message');
                       }
                       ?>"/>
<!--                <div name="errorStreet" class="form-control alert alert-danger">Temp placeholder error</div>-->
            </div>
        </div>

        <div class="form-group d-flex justify-content-center">
            <input type="submit" value="Submit">
        </div>

    </form>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
?>
<html>
    <head>
        <title>Sami</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
        <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
    </head>
    <body>
        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">
              <!-- We're going to place the form here in the next step -->
<form id="contact-form" method="post" action="sendmailer.php"  role="form">

    <div class="messages"></div>

    <div class="controls">

<div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name" style="float:right">إلى</label>
                    <input id="to" type="text" name="to" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
</div>
<div class="row" dir="rtl" lang="ar">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name" style="float:right">عنوان الرسالة</label>
                    <input id="to" type="text" name="sbj" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
</div>

<div class="row" dir="rtl" lang="ar">
            <div class="col-md-12">
                <div class="form-group">
                    
                    <textarea id="msg" name="msg" class="form-control" placeholder="" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="ارسل">
            </div>
</div>
</div>
</form>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
<script src="contact.js"></script>
<script>
                  CKEDITOR.replace( 'msg' );
</script>
    </body>
</html>

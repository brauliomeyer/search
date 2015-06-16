<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax - Demo</title>
    
<!-- JQuery connection -->
<script src="https://code.jquery.com/jquery-1.11.2.js" type="text/javascript"></script>
    
<!-- Latest compiled and minified CSS -->
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Search</span>
            <span class="icon-bar">Ajax Search</span>
          </button>
          <a class="navbar-brand" href="#">Ajax Search</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
   
    <script>
        $(document).ready(function() {
            $('#search').keyup(function() {
                var search = $('#search').val();
                
                $.ajax({
                    url:'search.php',
                    data:{search:search},
                    type:'POST',
                    success:function(data) {
                        if( ! data.error ) {
                            $('#result').html(data);
                        }
                    }
                });
                
          });  
        });
    </script>  
    <div id="container" class="col-xs-6 col-xs-offset-3">
        <h2>Search Database</h2>
        <input class="form-control" type="text" name="search" id="search" placeholder="Search our inventory!" required>
    <br><br>
    
    <h2 class="bg-succes alert alert-info" role="alert" id="result"></h2>
        
    </div>
    
    
</body>
</html>
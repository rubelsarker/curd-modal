<!DOCTYPE html>
<html lang="en">
<head>
    <!-- requir meta tags-->
    <meta charset="utf-8">
    <meta name="description" content="Building modernresponsive website with html5, css3, JQuery & BootStrap Framwork">
    <meta name="keywords" content="HTML5, CSS3, Jquery, Bootstrap, Web Design, Web Development, Responsive Website, Modern Website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--title-->
    <title>Curd Modal</title>
    <!--favicon-->
    <link rel="shortcut icon" href="{{url('')}}/frontend/img/favicon.ico">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--bootstrap css file-->
    <link rel="stylesheet" href="{{url('')}}/frontend/css/bootstrap/bootstrap.min.css">
    <!--css file-->
    <link rel="stylesheet" href="{{url('')}}/frontend/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('category')}}">Category</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
@yield('content')

<!--jquery-->
<script src="{{url('')}}/frontend/js/jquery-3.3.1.min.js"></script>
<!--jquery-->
<script src="{{url('')}}/frontend/js/bootstrap/bootstrap.min.js"></script>
<!--jquery-->
<!--custom jquery-->
<script src="{{url('')}}/frontend/js/custom.js"></script>
<script>

    $('#edit').on('show.bs.modal', function (event) {

        var button =$(event.relatedTarget)
         var title = button.data('mytitle')
         var desc = button.data('mydes')
         var cat_id = button.data('catid')
        var modal = $(this)
        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #description').val(desc);
        modal.find('.modal-body #cat_id').val(cat_id);
    });

    $('#delete').on('show.bs.modal', function (event) {

        var button =$(event.relatedTarget)
        var cat_id = button.data('catid')
        var modal = $(this)
        modal.find('.modal-body #cat_id').val(cat_id);
    });

</script>
</body>
</html>
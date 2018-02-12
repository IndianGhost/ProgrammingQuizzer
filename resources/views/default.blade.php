<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Achraf bellaali"/>

    <!-- CDN bootstrap 4 -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- CDN bootstrap material design -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<section class="row-section">
    <div class="container">
        <div class="row">
            <h2 class="text-center">
			    	<span>
			    		<a href="index.html" class="link--nodecoration">Programming Quizz</a>
			    	</span>Developed by <i class="fa fa-github"></i> <a href="https://www.github.com/IndianGhost" target="_blank" title="Visit my profile on Github !">ACHRAF BELLAALI</a>
            </h2>
        </div>
        @yield('before start')
        <div class="col-md-10 offset-md-1 row-block">
            @yield('content')

            <div class="card card--item bg-dark text-white">
                <img class="card-img" src="img/author.jpg" alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title">About Author</h5>
                    <p class="card-text">
                        Full-stack web developer &amp; future software engineer (will be graduated by 2018), You can also see my work at <a href="https://www.github.com/IndianGhost" class="card-text-link" title="Visit my profile on Github !">Github</a>
                    </p>
                    <footer class="blockquote-footer">
                        <small class="text-muted text-muted--white">Achraf BELLAALI</small>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <center class="footer">
        <h6 class="lead">Copyright Achraf BELLAALI 2018 &copy;</h6>
    </center>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

<!-- SnackbarJS plugin -->
<script src="https://cdn.rawgit.com/FezVrasta/snackbarjs/1.1.0/dist/snackbar.min.js"></script>

<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<!-- CDN jquery 1.11.1 -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script	  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>


<script type="text/javascript">
@yield('javascript')
</script>
</body>
</html>
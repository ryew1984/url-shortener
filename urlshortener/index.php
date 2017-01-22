<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Raymond's URL Shortener</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body ng-app="myApp" ng-controller="tasksController">


    <!-- Start your project here-->

    <!--Mask-->
    <div class="animated fadeIn view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row">
                    <div class="flex-center">
                        <h1 class="description">Raymond's URL Shorterner</h1>

                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-md-6">
                        <div class="row">
                            <form name="unshortenedForm" autocomplete="off" ng-submit="submitForm(unshortenedForm)" novalidate>
                                <!-- Unshortened URL Input-->
                                <div class="md-form input-group">

                                    <input name="unshortenedInput" type="url" ng-model="unshortened.text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter URL to shorten..." required>
                                    <div class="error-message">
                                        <p ng-show="unshortenedForm.unshortenedInput.$dirty && unshortenedForm.unshortenedInput.$invalid">Please enter a proper URL</p>
                                         <p ng-show="unshortenedForm.unshortenedInput.$dirty && unshortenedForm.unshortenedInput.$required">Please enter a URL</p>
                                    </div>
                                   
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn-lg" type="submit">Shorten!</button>
                                    </span>
                                </div>
                                <!-- /Unshortened URL Input-->
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="md-form input-group">
                            <input name="shortenedUrl" type="url" ng-model="shortenedUrl.text" class="form-control" id="shortenedUrl" aria-describedby="basic-addon3" placeholder="Shortened URL will appear here..." required>

                            <span class="input-group-btn">
                                <button class="btn btn-success btn-lg" ngclipboard data-clipboard-target="#shortenedUrl" type="button">Copy!</button>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Full Overlay Loading -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Angularjs -->
    <script type="text/javascript" src="js/angular.min.js"></script>
    <!-- App-js -->
    <script type="text/javascript" src="js/app.js"></script>
    <!-- Clipboard Directive -->
    <script type="text/javascript" src="https://cdn.rawgit.com/zenorocha/clipboard.js/master/dist/clipboard.min.js"></script>
    <script type="text/javascript" src="js/ngclipboard.min.js"></script>




</body>

</html>
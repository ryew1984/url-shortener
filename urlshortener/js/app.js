var app = angular.module('myApp', ['ngclipboard']);


app.controller('tasksController', function ($scope, $http) {
    $scope.unshortened = {
        text: ''
    };
    
    $scope.shortenedUrl = {
        text: ''
    };
    

    $scope.formNotSubmitted = true;

    function processUrl(unshortened_url) {
        $http({
            method: 'POST',
            url: 'phps/process-url.php?url='+unshortened_url
        }).then(function successCallback(response) {
            $scope.shortenedUrl.text = 'http://new-server-144960.bitnamiapp.com/'+response.data;
            $.LoadingOverlay("hide");
            // this callback will be called asynchronously
            // when the response is available
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
    };

    $scope.submitForm = function (form) {
        
        // check to make sure the form is completely valid
        if (form.$valid) {
            $scope.formNotSubmitted = false;
            $.LoadingOverlay("show");
            processUrl($scope.unshortened.text);
            $scope.unshortened.text = "";
            form.$setPristine();
        }





    };

});
app.controller('rootController', ['$scope', '$interval','userServices',
    function ($scope, $interval, userServices) {

        var isGetUserDataFromInterval = true;

        $scope.userData = {};

        $interval(function() {
            if(isGetUserDataFromInterval) {
                isGetUserDataFromInterval = false;
                userServices.getCurrentUserData()
                    .success(function(data) {
                        if(data.status && data.result) {
                            $scope.userData = data.result;
                            isGetUserDataFromInterval = true;
                        }
                    });
            }
        }, 500);

        $scope.logout = function() {
            userServices.logout().success(function(data){
                if(data.status) {
                    window.location.href = '/';
                }
            });
        };

    }
]);
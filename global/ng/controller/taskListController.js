app.controller('taskListController', ['$scope', '$location',
function ($scope, $location) {
    $scope.$location = $location;

    $scope.$watch('$location.$$path', function(){
        $scope.tab = '/all';
        $scope.tab = $location.$$path;
    });
}]);


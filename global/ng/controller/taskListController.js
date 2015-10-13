app.controller('taskListController', ['$scope', '$location', 'taskService',
function ($scope, $location, taskService) {
    'use strict';

    $scope.$location = $location;
    $scope.tab = '/all';
    $scope.currentTaskList = [];

    var tasksData = {};
    var tasksListLimit = 15;

    $scope.$watch('$location.$$path', function() {
        $scope.tab = $location.$$path;
        if(['/likes', '/messages', '/friends', '/share', '/polls', '/comments', '/videos'].indexOf($scope.tab) == -1) {
            $scope.tab = '/all';
        }
        $scope.checkTasksData();
    });

    $scope.checkTasksData = function() {
        var count = 0, type = $scope.tab.replace('/', '');
        if(!tasksData.hasOwnProperty($scope.tab)) {
            tasksData[type] = [];
        }
        count = tasksListLimit - tasksData[type].length;

        taskService.getTasks(type, count)
            .success(function(data) {
                if(data.status && data.result) {
                    tasksData[type] = tasksData[type].concat(data.result);
                    $scope.currentTaskList = tasksData[type];
                }
            });
    };

    $scope.refreshCurrentTaskList = function() {
        var type = $scope.tab.replace('/', '');
        tasksData[type] = [];
        $scope.checkTasksData();
    };







}]);



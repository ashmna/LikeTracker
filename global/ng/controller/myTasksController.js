app.controller('myTasksController', ['$scope', '$location', 'taskService',
function ($scope, $location, taskService) {
    'use strict';

    $scope.$location = $location;
    $scope.tab = 'all';
    $scope.type = '';
    $scope.currentTaskList = [];

    var tasksData = {};
    var tasksListLimit = 15;

    $scope.$watch('$location.$$path', function() {
        var arr = $location.$$path.split('/'), i = 0, tabFonded = false;
        $scope.type = '';
        for(; i<arr.length; ++i) {
            if(!arr[i].length) continue;
            if(tabFonded) {
                $scope.type = arr[i];
            } else {
                $scope.type = arr[i];
                $scope.tab  = arr[i];
                tabFonded   = true;
            }
        }
        if(['like','group','friend','share','poll','comment','video','new'].indexOf($scope.tab) == -1) {
            $scope.tab = 'all';
        }
        if(['like','group','friend','share','poll','comment','video'].indexOf($scope.type) == -1) {
            $scope.type = '';
        }
        $scope.checkTasksData();
    });

    $scope.checkTasksData = function() {
        var count, type = $scope.type;
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
        var type = $scope.type;
        tasksData[type] = [];
        $scope.checkTasksData();
    };







}]);



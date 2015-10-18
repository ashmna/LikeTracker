app.controller('taskListController', ['$scope', '$location', 'taskService',
function ($scope, $location, taskService) {
    'use strict';

    $scope.$location = $location;
    $scope.tab = 'all';
    $scope.currentTaskList = [];

    var tasksData = {};
    var tasksListLimit = 15;

    $scope.$watch('$location.$$path', function() {
        $scope.tab = $location.$$path.replace('/', '');
        if(['like','group','friend','share','poll','comment','video'].indexOf($scope.tab) == -1) {
            $scope.tab = 'all';
        }
        $scope.currentTaskList = [];
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
                    //tasksData[type] = tasksData[type].concat(data.result);
                    tasksData[type] = data.result;
                    $scope.currentTaskList = tasksData[type];
                }
            });
    };

    $scope.refreshCurrentTaskList = function() {
        var type = $scope.tab.replace('/', '');
        tasksData[type] = [];
        $scope.checkTasksData();
    };
    $scope.ignoreTask = function(task) {
        task.btn = task.btn || {};
        task.btn.title = '...';
        task.btn.hideIgnore = true;
        taskService.ignoreTask(task.taskId)
            .success(function(data){
                if(data.status && data.result) {
                    $scope.currentTaskList.splice($scope.currentTaskList.indexOf(task), 1);
                }
            });
    };
    $scope.checkTask = function(task) {
        task.btn = task.btn || {};
        task.btn.title = '...';
        taskService.checkTask(task.taskId)
            .success(function(data){
                if(data.status && data.result) {
                    task.btn.title = 'Выполнено';
                    task.btn.class = 'button_3';
                } else {
                    task.btn.title = 'Ошибка';
                    task.btn.class = 'button_4';
                }
            });
    };
    $scope.doTask = function(task) {
        task.win = window.open('http://vk.com/' + task.url, '', 'width=900, height=600, top=' + ((screen.height - 600) / 2) + ',left=' + ((screen.width - 900) / 2) + ', resizable=yes, scrollbars=yes, status=yes');
        $(task.win).click(function(e){
            console.log(e);
        });
        task.timer = setInterval(function () {
            if (task.win.closed) {
                clearInterval(task.timer);
                $scope.checkTask(task);
            } else {
                console.log(task.win.apps_delete_admin_title);
            }
        }, 100);
    };







}]);



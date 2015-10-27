app.controller('taskListController', ['$scope', '$location', 'taskService',
function ($scope, $location, taskService) {
    'use strict';

    $scope.$location = $location;
    $scope.tab = 'all';
    $scope.currentTaskList = [];

    var tasksData = {};
    var tasksListLimit = 15;
    var isExistExtension = false;

    $scope.$watch('$location.$$path', function() {
        $scope.tab = $location.$$path.replace('/', '');
        if(['like','group','friend','share','poll','comment','video'].indexOf($scope.tab) == -1) {
            $scope.tab = 'all';
        }
        $scope.currentTaskList = [];
        $scope.checkTasksData();
    });

    $scope.init = function() {
        setTimeout(function(){
            var ev = new CustomEvent('ltIsExist');
            document.dispatchEvent(ev);
        },100);
    };

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
        taskService.checkTask(task.taskId, task.watchDuration)
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
        var open = function(callBack){
            task.win = window.open('http://vk.com/' + task.url, '', 'width=900, height=600, top=' + ((screen.height - 600) / 2) + ',left=' + ((screen.width - 900) / 2) + ', resizable=yes, scrollbars=yes, status=yes');
            task.timer = setInterval(function () {
                if (task.win.closed) {
                    clearInterval(task.timer);
                    if(callBack)  {
                        callBack(task);
                    } else {
                        $scope.checkTask(task);
                    }
                }
            }, 100);
        };

        if(isExistExtension) {
            var ev1 = new CustomEvent('ltTaskAdd', {detail:task});
            $scope.ltTaskAdd = function(res) {
                open(function (task) {
                    $scope.ltTaskRemove = function(res) {
                        if(res && res.type == 'video') {
                            res.watchEnd = (new Date()).getTime();
                            task.watchDuration = Math.ceil((res.watchEnd - res.watchStart)/1000);
                        }
                        $scope.checkTask(task);
                    };
                    var ev2 = new CustomEvent('ltTaskRemove', {detail:task});
                    document.dispatchEvent(ev2);
                });
            };
            document.dispatchEvent(ev1);
        } else {
            open();
        }
    };

    document.addEventListener("ltIsExistCallBack", function(event){
        isExistExtension = event.detail;
        //console.log('isExistExtension', isExistExtension);
    }, false);

    document.addEventListener("ltTaskAddCallBack", function(event){
        $scope.ltTaskAdd(event.detail);
        //console.log('ltTaskAddCallBack', event);
    }, false);


    document.addEventListener("ltTaskRemoveCallBack", function(event){
        $scope.ltTaskRemove(event.detail);
        //console.log('ltTaskRemoveCallBack', event);
    }, false);







}]);



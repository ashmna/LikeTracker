app.controller('myTasksController', ['$scope', '$location', 'taskService',
function ($scope, $location, taskService) {
    'use strict';

    $scope.$location = $location;
    $scope.tab = 'all';
    $scope.type = '';
    $scope.typeTitle = '';
    $scope.currentTaskList = [];
    $scope.currentTask = {};

    var tasksData = {};
    var commissionPercent = 30;
    var typeToTitle = {
        'like'   : 'Мне нравится',
        'group'  : 'Сообщество',
        'friend' : 'Друзей',
        'share'  : 'Рассказать друзьям',
        'poll'   : 'Опрос',
        'comment': 'Комментарии',
        'video'  : 'Видео'
    };
    var newTask = function() {
        $scope.currentTask = {
            price: 13,
            count: 10,
            info : "Прежде чем вводить ссылку, проверьте, не защищена ли она настройками приватности.",
            infoClass : 'info'
        }
    };
    var convertUrl = function (url) {
        var res = '';
        var pos = url.indexOf('vk.com/');

        if(pos != -1) {
            url = url.substr(pos+7);
            pos = url.indexOf('?');
            if(pos != -1) {
                url = url.substr(pos+1);
                var pair, obj  = {}, vars = url.split('&');
                for (var i = 0; i < vars.length; i++) {
                    pair = vars[i].split('=');
                    obj[pair[0]] = pair[1];
                }
                if(obj['z']) {
                    res = url = obj['z'];
                } else if(obj['w']) {
                    res = url = obj['w'];
                }
                pos = url.indexOf('%2F');
                if(pos != -1) {
                    res = url.substr(0, pos);
                } else {
                    pos = url.indexOf('/');
                    if(pos != -1) {
                        res = url.substr(0, pos);
                    }
                }
            } else {
                res = url;
            }
        }
        return res;
    };
    var checkTask = function(callBake) {
        var res = true;
        if(!$scope.currentTask.price || !$scope.currentTask.count || !$scope.currentTask.originalUrl) {
            $scope.currentTask.info = 'Пожалуйста, заполните все поля.';
            res = false;
        }
        else if($scope.currentTask.price < 2) {
            $scope.currentTask.info = 'Минимальная цена задания - 2 балла.';
            res = false;
        }
        else if($scope.currentTask.count < 10) {
            $scope.currentTask.info = 'Заказ должен быть хотя бы на 10 лайков, как минимум.';
            res = false;
        }
        else if(!$scope.currentTask.url) {
            $scope.currentTask.info = 'Вы ввели ссылку не правильно. Ссылка должна иметь такой вид, как на следующих примерах:<br>https://vk.com/wall345678_12345<br>https://vk.com/photo345678_12345<br>https://vk.com/video345678_12345';
            res = false;
        }
        if(!res) {
            $scope.currentTask.infoClass = 'info2';
        } else {
            $scope.currentTask.infoClass = 'info';
            $scope.currentTask.info = 'Пожалуйста, ждите...';
        }
        if(callBake) {
            callBake(res);
        }
        //
        //'Запись не найдена или защищена настройками приватности. Проверьте существует ли запись или откройте к ней доступ для всех пользователей.'
        //'Фотография не найдена или защищена настройками приватности. Проверьте существует ли фотография или откройте к ней доступ для всех пользователей.'
        //'Видеозапись не найдена или защищена настройками приватности. Проверьте существует ли видеозапись или откройте к ней доступ для всех пользователей.'
        //'У Вас нет на балансе столько баллов, чтобы сделать такой заказ.'
        //'Это задание заблокировано.'
        //'Такое задание у Вас уже существует. Сначала удалите его в категории <a href="my_tasks.php"><b>Мои задания</b></a>'
        //'Пожалуйста, сначала откройте полный доступ к фотографии. <br> Зайдите "Вконтакте" : Мои настройки->Приватность <br> На поле "Кто видит комментарии к записям" установите <b>Все пользователи</b> '
    };


    $scope.$watch('currentTask.price', function(newValue, oldValue) {
        $scope.currentTask.price = Math.abs(parseInt(newValue));
        if(isNaN($scope.currentTask.price)) $scope.currentTask.price = 0;
        if($scope.currentTask.price < 2) {
            $scope.currentTask.price = 2;
        }
        $scope.currentTask.commission = Math.ceil($scope.currentTask.price*commissionPercent/100);
    });
    $scope.$watch('currentTask.count', function(newValue, oldValue) {
        $scope.currentTask.count = Math.abs(parseInt(newValue));
        if(isNaN($scope.currentTask.count)) $scope.currentTask.count = 0;
        if($scope.currentTask.count < 10) {
            $scope.currentTask.count = 10;
        }
    });
    $scope.$watch('$location.$$path', function() {
        var arr = $location.$$path.split('/'), i = 0, tabFonded = false;
        $scope.type = '';
        $scope.typeTitle = '';
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
            $scope.type = 'all';
        }
        if(typeToTitle[$scope.type]) {
            $scope.typeTitle = typeToTitle[$scope.type];
            if($scope.tab == 'new') {
                newTask();
            }
        }

        $scope.checkTasksData();
    });

    $scope.saveCurrentTask = function() {
        $scope.currentTask.type = $scope.type;
        $scope.currentTask.url = convertUrl($scope.currentTask.originalUrl);
        checkTask(function(res){
            if(res) {
                taskService.createTask($scope.currentTask)
                    .success(function (data) {
                        if (data.status && data.result) {
                            newTask();
                            $scope.currentTask.infoClass = 'okey';
                            $scope.currentTask.info = '<font color = "green"><b>Заказ успешно добавлен в <a href="#' + $scope.type + '">список Ваших заданий</a>!</b></font>';
                        }
                    });
            }
        });
    };

    $scope.checkTasksData = function() {
        if($scope.tab == 'new') return;

        var count, type = $scope.type;
        if(!tasksData.hasOwnProperty(type)) {
            tasksData[type] = [];
        }

        $scope.currentTaskList = tasksData[type];
        taskService.getMyTasks(type)
            .success(function(data) {
                if(data.status && data.result) {
                    tasksData[type] = data.result;
                    $scope.currentTaskList = tasksData[type];
                }
            });
    };

    $scope.refreshCurrentTaskList = function() {
        $scope.currentTaskList = [];
        $scope.checkTasksData();
    };







}]);



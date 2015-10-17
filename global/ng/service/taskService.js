app.service('taskService', ['serverConnector', function (serverConnector) {
    'use strict';

    function url(url) {
        return '/global/api/task/' + url + '/';
    }

    this.createTask = function (task) {
        return serverConnector.send({
            url : url('create-task'),
            data: {task:task}
        });
    };

    this.getTasks = function (type, count) {
        return serverConnector.send({
            url : url('get-tasks'),
            data: {type:type, count:count}
        });
    };

    this.getMyTasks = function (type) {
        return serverConnector.send({
            url : url('get-my-tasks'),
            data: {type:type}
        });
    };

    this.ignoreTask = function (taskId) {
        return serverConnector.send({
            url : url('ignore-task'),
            data: {taskId:taskId}
        });
    };

    this.checkTask = function (taskId) {
        return serverConnector.send({
            url : url('check-task'),
            data: {taskId:taskId}
        });
    };




}]);


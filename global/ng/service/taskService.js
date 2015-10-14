app.service('taskService', ['serverConnector', function (serverConnector) {
    'use strict';

    function url(url) {
        return '/global/api/task/' + url + '/';
    }

    this.getTasks = function (type, count) {
        return serverConnector.send({
            url : url('getTasks'),
            data: {type:type, count:count}
        });
    };


}]);


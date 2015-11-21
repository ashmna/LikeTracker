app.service('userServices', ['serverConnector', function (serverConnector) {
    'use strict';

    function url(url) {
        return '/global/api/user/' + url + '/';
    }


    this.login = function (vkId) {
        return serverConnector.send({
            url : url('login'),
            data: {vkId:vkId}
        });
    };

    this.logout = function () {
        return serverConnector.send({
            method: 'GET',
            url   : url('logout')
        });
    };

    this.getCurrentUserData = function () {
        return serverConnector.send({
            method: 'GET',
            url   : url('get-user-data')
        });
    };


}]);


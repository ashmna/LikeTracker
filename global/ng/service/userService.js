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

    this.logout = function (data) {
        return serverConnector.send({
            method: 'GET',
            url   : url('logout')
        });
    };

}]);


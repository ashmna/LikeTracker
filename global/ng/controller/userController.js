app.controller('userController', ['$scope', 'userServices',
function ($scope, userServices) {
    'use strict';

    function authInfo(response) {
        if (response.session) {
            userServices.login(response.session.mid)
            .success(function(data){
                if(data.result) {
                    window.location.reload();
                } else if(data.notification.length) {
                    alert(data.notification[0].content);
                }
            });
        } else {
            alert('not auth');
        }
    }

    $scope.init = function(apiId) {
        VK.init({
            apiId: apiId
        });
        VK.Auth.getLoginStatus(authInfo);
        VK.UI.button('login_button');
    };

    $scope.authInfo = authInfo;

}]);



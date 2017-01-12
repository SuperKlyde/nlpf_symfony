/**
 * Created by Simon on 11/01/2017.
 */

'use strict';

/**
 * IndexController
 * @constructor
 */
var ParticipateController = function($scope, $http, $location, $sce, $routeParams, requireAuth) {

    var userData = JSON.parse(window.localStorage.getItem("user"));
    var projectData = JSON.parse(window.localStorage.getItem("project"));

    /**
     * Check if the user is connected. If the user is not connected, it will redirect him to the login page
     */
    if (requireAuth && window.localStorage.getItem("user") == undefined) {
        // User isn’t authenticated
        $location.path("/login");
    }

    /**
     * Get the counterpart list and send it to the front
     * @param id
     */
    var getCounterpartInfo = function (id) {
        $http.get('http://127.0.0.1:8000/api/conterpart/' + id).success(function(conterpart) {
            $scope.item = conterpart.message;
        });
    };

    /**
     * Function the will associate a user to the participation. Redirect the user if success, otherwise send an error
     * in the page
     * @param id
     */
    $scope.participateTo = function (id) {
        var req = {
            method: 'POST',
            url: 'http://127.0.0.1:8000/api/investonproject',
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: {
                investorId: userData.id,
                projectId: projectData.id,
                conterpartId: id
            },
            transformRequest: function (obj) {
                var str = [];
                for (var p in obj)
                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(JSON.stringify(obj[p])));
                return str.join("&");
            }
        };
        $http(req).success(function(value) {
            if (value.present) {
                $scope.participateError = true;
                $scope.participateErrorMessage = "Vous avez deja choisi la contrepartie !";
            }
            else
                $location.path('/');
        });
    };

    getCounterpartInfo($routeParams.counterpartId);
};
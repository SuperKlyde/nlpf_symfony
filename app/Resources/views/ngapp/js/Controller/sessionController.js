/**
 * Created by nea on 25/10/16.
 */
'use strict';

App.controller("SessionController", function($scope, $http, $location, $route) {

    $scope.loginError = false;
    $scope.userConnected = { connected : window.localStorage.getItem("user") !== null ? true : false};
    $scope.notConnected = { connected : !$scope.userConnected.connected};
    $scope.userData = JSON.parse(window.localStorage.getItem("user"));

    /**
     * Check if the user is connected or not. If the user is connected it will redirect him to the home page
     */
    if (window.localStorage.getItem("user") == null) {
        // User isn’t authenticated
    }
    else {
        $location.path("/");
    }

    /**
     * Function that will send userdata to the server for user login. If the creation succeed, user is redirected
     * to the home page. Otherwise, an error message will pop on the login page. The logged user information are stored
     * into a localStorage
     * @param user containing all data to a user account (email + password)
     */
    $scope.userConnect = function (user) {
        if (user.email != "" && user.password != "") {
            $http.post('http://127.0.0.1:8000/api/user/login', user).success(function(account){
                $scope.loginSucessMessage = "Logged";
                if (account !== undefined && user.password == account.password) {
                    window.localStorage.setItem("user", JSON.stringify(account));
                    $scope.userConnected = {connected: window.localStorage.getItem("user") !== null ? true : false};
                    $scope.notConnected = {connected: !$scope.userConnected.connected};
                    window.location.href = "#/";
                    window.location.reload();
                }
                else {
                    $scope.loginErrorMessage = "Le compte n'existe pas ou le mot de passe est incorrect !";
                    $scope.loginError = true;
                }
            });
        }
        else {
            $scope.loginErrorMessage = "Le compte n'existe pas ou le mot de passe est incorrect !";
            $scope.loginError = true;
        }
    };

    /**
     * Function that will send userdata to the server for the user creation. If the creation succeed, user is redirected
     * to the home page. Otherwise, an error message will pop on the login page
     * @param user containing all data to a user account
     */
    $scope.submitUser = function (user) {
        $http.post('/signup/', user).success(function(account){
            if (account !== undefined) {
                window.localStorage.setItem("user", JSON.stringify(account));
                $scope.userConnected = {connected: window.localStorage.getItem("user") !== null ? true : false};
                $scope.notConnected = {connected: !$scope.userConnected.connected};
                window.location.href = "#/";
                window.location.reload();
            }
            else {
                $scope.createUserErrorMessage = "L'adresse mail est deja utilisee !"
                $scope.createUserError = true;
            }

        });
    };

    /**
     * Funtion that will remove the localStorage and permit the logout of the user. The user will be redirected to the
     * home page
     */
    $scope.logout = function () {
        window.localStorage.removeItem("user");
        $scope.userConnected = { connected : window.localStorage.getItem("user") !== null ? true : false};
        $scope.notConnected = { connected : !$scope.userConnected.connected};
        window.location.href = "#/";
        window.location.reload();
    };
});
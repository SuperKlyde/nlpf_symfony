/**
 * Created by Simon on 10/01/2017.
 */

'use strict';

var MyApp = {};

var App = angular.module('MyApp', ['ngRoute']);

App.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/', {
        controller: homeController,
        templateUrl : "/views/accueil.html"
    });

    $routeProvider.when('/login', {
        controller: "SessionController",
        templateUrl : "/views/signin.html"
    });

    $routeProvider.when('/signup', {
        controller: "SessionController",
        templateUrl : "/views/signup.html"
    });

    $routeProvider.when('/best', {
        controller: bestProjectsController,
        templateUrl : "/views/best.html"
    });

    $routeProvider.when('/createproject', {
        controller: createProjectController,
        templateUrl : "/views/createproject.html",
        resolve : {
            requireAuth: function(){ return true;}
        }
    });

    $routeProvider.otherwise({redirectTo: '/'});
}]);
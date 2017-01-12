/**
 * Created by Simon on 11/01/2017.
 */

'use strict';

/**
 * IndexController
 * @constructor
 */
var ProjectController = function($scope, $http, $location, $sce, $routeParams) {

    var userData = JSON.parse(window.localStorage.getItem("user"));

    /**
     * Function that will set the project description into the description div in the front
     * @param projectId
     */
    var getProject = function (projectId) {
        $http.get('http://localhost:8000/api/projects/' + projectId).success(function(project) {
            console.log(project.message);
            $scope.proj = project.message;
            $scope.titre = project.message.name;
            window.localStorage.setItem("project", JSON.stringify(project.message));
            $("div#projectDescription").html(project.message.description);
        });
    };

    /**
     * Function that will get the counterparts list of the projet with de given id and send the result to the front view
     * @param projectId
     */
    var getCounterparts = function (projectId) {
        $http.get('http://localhost:8000/api/projectconterparts/' + projectId).success(function(conterpartsList) {
            $scope.conterpartsList = conterpartsList.message;
        });
    };

    /**
     * Function that will get the contributors list and send it to the front
     * @param projectId of the project
     */
    var getContributors = function (projectId) {
        $http.get('http://localhost:8000/api/projectcontributors/' + projectId).success(function(contributorsList) {
            $scope.contributorList = contributorsList.message;
        });
    };

    /**
     * Function that with trust given code to html for ng-bind-html
     * @param htmlCode
     * @return {*}
     */
    $scope.renderHtml = function (htmlCode) {
        return $sce.trustAsHtml(htmlCode);
    };


    getProject($routeParams.projectId);
    getCounterparts($routeParams.projectId);
    getContributors($routeParams.projectId);
    $scope.isConnectedUser = window.localStorage.getItem("user") !== null;
};
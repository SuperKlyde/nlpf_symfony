/**
 * Created by Simon on 11/01/2017.
 */

'use strict';

/**
 * IndexController
 * @constructor
 */
var bestProjectsController = function($scope, $http, $sce) {
    $scope.myFilter = '-current';
    $scope.titre = "Best Projects";

    /**
     * Function that will fetch all the project list and send it to the view
     */
    $scope.fetchprojectsList = function() {
        $http.get('http://127.0.0.1:8000/api/projects').success(function(projectList){
            console.log(projectList);
            $scope.projects = projectList;
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

    $scope.fetchprojectsList();
};
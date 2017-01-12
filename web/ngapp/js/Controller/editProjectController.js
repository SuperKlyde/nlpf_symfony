/**
 * Created by Simon on 11/01/2017.
 */

'use strict';

/**
 * IndexController
 * @constructor
 */
var EditProjectController = function($scope, $http, $location, $sce, $routeParams, requireAuth) {
    var userData = JSON.parse(window.localStorage.getItem("user"));
    var counterpartList = [];

    /**
     * Check if the user id logged. Redirect to the login page
     */
    if (requireAuth && window.localStorage.getItem("user") == null) {
        $http.get("http://localhost:8000/api/project/" + $routeParams.projectId + "/owner/" + userData.id).success(function(project) {
            // User isn’t authenticated
            if (project.message !== undefined) {
            }
            else {
                $location.path("/login");
            }
        })
    }

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

    $scope.AddConterpart = function (project) {
        counterpartList.forEach(function (counterpart) {
            console.log(counterpart);
            var req2 = {
                method: 'POST',
                url: 'http://127.0.0.1:8000/api/conterpart/create',
                headers: {
                    'Content-Type': "application/x-www-form-urlencoded"
                },
                data: {
                    name: counterpart.name,
                    description: counterpart.description,
                    value: counterpart.value,
                    projectId: $routeParams.projectId
                },
                transformRequest: function (obj) {
                    var str = [];
                    for (var p in obj)
                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(JSON.stringify(obj[p])));
                    return str.join("&");
                }
            };
            $http(req2).success(function (result) {
                console.log(result.message);
                var req3 = {
                    method: 'POST',
                    url: 'http://127.0.0.1:8000/api/project/addconterpart',
                    headers: {
                        'Content-Type': "application/x-www-form-urlencoded"
                    },
                    data: {
                        projectId: $routeParams.projectId,
                        conterpartId: result.message.id
                    },
                    transformRequest: function (obj) {
                        var str = [];
                        for (var p in obj)
                            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(JSON.stringify(obj[p])));
                        return str.join("&");
                    }
                };
                $http(req3).success(function (result) {
                });
            });
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

    $scope.renderHtml = function (htmlCode) {
        return $sce.trustAsHtml(htmlCode);
    };



    getProject($routeParams.projectId);
    getCounterparts($routeParams.projectId);
    getContributors($routeParams.projectId);
    $scope.isConnectedUser = window.localStorage.getItem("user") !== null;

};
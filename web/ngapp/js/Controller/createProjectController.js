/**
 * Created by Simon on 11/01/2017.
 */

'use strict';

var createProjectController = function($scope, $location, $http, requireAuth) {
    $scope.title = "Mon project";
    var userData = JSON.parse(window.localStorage.getItem("user"));
    var counterpartList = [];

    initTextEditor($scope);

    /**
     * Check if the user id logged. Redirect to the login page
     */
    if (requireAuth && window.localStorage.getItem("user") == null) {
        // User isn’t authenticated
        $location.path("/login");
    }

    /**
     * Initialize the field author of the view
     * @return {string}
     */
    $scope.initAuthor = function () {
        return userData.first_name === undefined ? "" : userData.first_name + " " + userData.last_name;
    };

    /**
     * Initialize the field contact of the view
     * @return {Document.form.email|*}
     */
    $scope.initContact = function () {
        return userData.email;
    };

    /**
     * Function that create the project and redirect to home page
     * @param project
     */
    $scope.createProject = function (project) {
        console.log(userData);
        if (project.description.length < 140) {
            $scope.projectError=true;
            $scope.projectErrorMessage = "La description doit avoir au minimum 140 caracteres";
        }
        else {
            if (counterpartList.length > 0){
                var req = {
                    method: 'POST',
                    url: 'http://127.0.0.1:8000/api/project/create',
                    headers: {
                        'Content-Type': "application/x-www-form-urlencoded"
                    },
                    data: {
                        name: project.name,
                        description: project.description,
                        userId: userData.id
                    },
                    transformRequest: function (obj) {
                        var str = [];
                        for (var p in obj)
                            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(JSON.stringify(obj[p])));
                        return str.join("&");
                    }
                };
                $http(req).success(function(projectId){
                    if (projectId.message !== undefined) {
                        counterpartList.forEach(function(counterpart) {
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
                                    projectId : projectId.message.id
                                },
                                transformRequest: function (obj) {
                                    var str = [];
                                    for (var p in obj)
                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(JSON.stringify(obj[p])));
                                    return str.join("&");
                                }
                            };
                            $http(req2).success(function(result) {
                                console.log(projectId.message);
                                console.log(result.message);
                                var req3 = {
                                    method: 'POST',
                                    url: 'http://127.0.0.1:8000/api/project/addconterpart',
                                    headers: {
                                        'Content-Type': "application/x-www-form-urlencoded"
                                    },
                                    data: {
                                        projectId: projectId.message.id,
                                        conterpartId: result.message.id
                                    },
                                    transformRequest: function (obj) {
                                        var str = [];
                                        for (var p in obj)
                                            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(JSON.stringify(obj[p])));
                                        return str.join("&");
                                    }
                                };
                                $http(req3).success(function(result) {
                                });
                            });
                        })
                    }
                });
                $location.path('/');
            }
            else {
                $scope.projectError = true;
                $scope.projectErrorMessage = "Un project a au moins une contrepartie";
            }
        }
    };

    /**
     * Function that add counterpart to the counterpart list
     * @param counterpart
     */
    $scope.addCounterpart = function (counterpart) {
        if (typeof counterpart !== undefined && typeof counterpart.name !== undefined && typeof counterpart.value
            && typeof counterpart.description !== undefined && counterpart.name != "" && counterpart.description != ""
            && counterpart.value != "" && counterpart.value > 0){
            var tmp = {
                name : counterpart.name,
                description : counterpart.description,
                value : counterpart.value
            };
            counterpartList.push(tmp);
            counterpart.name = "";
            counterpart.description = "";
            counterpart.value = "";
        }
        $scope.counterpartsList = counterpartList;
    };
};

/**
 * Function that will initialize the rich text editor
 * @param scope
 */
var initTextEditor = function (scope) {
    var editor = CKEDITOR.replace('projectDescription');

    editor.on('instanceReady', function (e) {
        this.document.on("keyup", function () {
            scope.$apply(function () {
                scope.project.description = (editor.getData());
            });
        });
    });
};
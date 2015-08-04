angular.module('starter.controllers')

    .controller('NewController', function ($scope,$sce, $http ,$stateParams) {


        $scope.init = function () {
            $http({
                url: 'https://medicalsystem.tk/api/news/' + $stateParams.id,
                method: "GET",
            }).success(function (data, status, headers, config) {
                $scope.news = data;
                $scope.news.content = $sce.trustAsHtml($scope.news.content);
            });
        };

        $scope.init();





    });

angular.module('starter.controllers')

    .controller('ShareController', function ($scope,$sce, $http ,$stateParams) {


        $scope.init = function () {
            $http({
                url: 'https://medicalsystem.tk/api/shares/' + $stateParams.id,
                method: "GET",
            }).success(function (data, status, headers, config) {
                $scope.shares = data;
                $scope.shares.content = $sce.trustAsHtml($scope.shares.content);
            });
        };

        $scope.init();



    });

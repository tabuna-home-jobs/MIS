angular.module('starter.controllers')

    .controller('SharesController', function ($scope, $ionicModal, $timeout, $http) {


        $scope.init = function () {
            $scope.lastpage = 1;
            $scope.items = [];
            $http({
                url: 'https://medicalsystem.tk/api/shares',
                method: "GET",
                params: {page: $scope.lastpage}
            }).success(function (data, status, headers, config) {
                $scope.items = data.data;
                $scope.currentpage = data.current_page;
            });
        };

        $scope.init();


        $scope.loadMore = function () {
            $scope.lastpage += 1;
            $http({
                url: 'https://medicalsystem.tk/api/shares',
                method: "GET",
                params: {page: $scope.lastpage}
            }).success(function (data, status, headers, config) {

                $scope.items = $scope.items.concat(data.data);

                if (data.last_page >= $scope.lastpage) {
                    $scope.$broadcast('scroll.infiniteScrollComplete');
                }

            });


        };


    });


(function () {

    var App = angular.module('App', [
        'ngCookies',
        'ui.router'
    ]);

    App.config(config);

    function config ($stateProvider, $urlRouterProvider) {

        $stateProvider.state('home', {
            url: '/',
            templateUrl: 'templates/user/index.html'
        });

        $stateProvider.state('dashboard', {
            url: '/dashboard',
            templateUrl: 'templates/user/dashboard.html'
        });

        $urlRouterProvider.otherwise('/');
    }
})();
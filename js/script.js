var newApp = angular.module("newApp",[]);

newApp.controller("myCtrl" , function($scope){
    $scope.pepole = [
        {name : "Ahmad" , desc : "Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."},
        {name : "Emile" , desc : "Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."},
        {name : "Khaled",  desc : "Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."},
        {name : "Roben",desc : "Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."}
    ];
    
    $scope.listItem = ["Main" , "About us" ,"Contact us" ,"Team"];
});

newApp.directive("ahmadFooter" , function(){
    return {template : "<footer>Testing</footer>"};
});
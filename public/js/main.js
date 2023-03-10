"use strict";

const html = document.getElementById('html5');
const htmlDetails = document.getElementById('html-details');

html.addEventListener("click", function() {

    if (htmlDetails.style.display === "block") {
        htmlDetails.style.display = "none";
    } else {
        htmlDetails.style.display = "block";
    }
});


const css = document.getElementById('css3');
const cssDetails = document.getElementById('css-details');

css.addEventListener('click', function(){

    if(cssDetails.style.display === "block") {
        cssDetails.style.display = "none";
    } else {
        cssDetails.style.display = "block";
    }

});


const php = document.getElementById('php');
const phpDetails = document.getElementById('php-details');

php.addEventListener('click', function(){

    if(phpDetails.style.display === "block") {
        phpDetails.style.display = "none";
    } else {
        phpDetails.style.display = "block";
    }

});

const sql = document.getElementById('sql');
const sqlDetails = document.getElementById('sql-details');

sql.addEventListener('click', function(){

    if(sqlDetails.style.display === "block") {
        sqlDetails.style.display = "none";
    } else {
        sqlDetails.style.display = "block";
    }

});

const js = document.getElementById('js');
const jsDetails = document.getElementById('js-details');

js.addEventListener('click', function(){

    if(jsDetails.style.display === "block") {
        jsDetails.style.display = "none";
    } else {
        jsDetails.style.display = "block";
    }

});


const angular = document.getElementById('angular');
const angularDetails = document.getElementById('angular-details');

angular.addEventListener('click', function(){

    if(angularDetails.style.display === "block") {
        angularDetails.style.display = "none";
    } else {
        angularDetails.style.display = "block";
    }

});

const framework = document.getElementById('frameworkLink');
const frameworkDef = document.getElementById('framework-def');

framework.addEventListener('click', function(){

    if(frameworkDef.style.display === "block") {
        frameworkDef.style.display = "none";
    } else {
        frameworkDef.style.display = "block";
    }

});

const symfony = document.getElementById('symfony');
const symfonyDetails = document.getElementById('symfony-details');

symfony.addEventListener('click', function(){

    if(symfonyDetails.style.display === "block") {
        symfonyDetails.style.display = "none";
    } else {
        symfonyDetails.style.display = "block";
    }

});


// const closeAll = document.getElementById('closeAll');

// closeAll.addEventListener('click', function(){

//     if(htmlDetails.style.display, cssDetails.style.display === "block" + phpDetails.style.display === "block" + sqlDetails.style.display === "block" + jsDetails.style.display === "block" + frameworkDef.style.display === "block" + angularDetails.style.display === "block" + symfonyDetails.style.display === "block")
//     {
//         htmlDetails.style.display ="none", cssDetails.style.display ="none", phpDetails.style.display ="none", sqlDetails.style.display ="none", jsDetails.style.display = "none", frameworkDef.style.display ="none", angularDetails.style.display ="none", symfonyDetails.style.display = "none";
//     } else {
//        exit;
//     }
// });
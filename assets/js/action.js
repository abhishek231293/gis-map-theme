//***********************************************************************************************//
//            Author :  SIMBA
//            Content : Custom Javascript for sidebar
//            Date : 2016.11.24 (Thanksgiving day)
//***********************************************************************************************//

$(document).ready(function(){

  $(".sidebar-landing").show();
  $(".sidebar-network").hide();
  $(".sidebar-incident").hide();
  $(".sidebar-census").hide();
  $(".sidebar-contest").hide();

  $("#nav-network").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").hide();
    $(".sidebar-network").show();
  });

  $(".nav-network").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").hide();
    $(".sidebar-network").show();
  });

  $("#nav-incidents").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-network").hide();
    $(".sidebar-census").hide();
    $(".sidebar-incident").show();
  });

  $(".nav-incidents").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-network").hide();
    $(".sidebar-census").hide();
    $(".sidebar-incident").show();
  });

  $("#nav-census").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-network").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").show();
  });

  $(".nav-census").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-network").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").show();
  });

  $(".sidebar-header-logo").click(function(){
    $(".sidebar-form").show();
    $(".sidebar-contest").hide();
    $(".sidebar-network").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").hide();
    $(".sidebar-landing").show();
  });

  $("#nav-contest").click(function(){
    $(".sidebar-network").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-form").hide();
    $(".sidebar-contest").show();
  });

  $(".nav-contest").click(function(){
    $(".sidebar-network").hide();
    $(".sidebar-incident").hide();
    $(".sidebar-census").hide();
    $(".sidebar-landing").hide();
    $(".sidebar-form").hide();
    $(".sidebar-contest").show();
  });

});

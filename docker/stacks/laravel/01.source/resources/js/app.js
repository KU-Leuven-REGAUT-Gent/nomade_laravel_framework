/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
// Register $ global var for jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;
// Import jQuery Plugins
//import 'jquery-ui/ui/widgets/datepicker.js';


// Anchor script
// $(function () {
//    if ( $( "[name='anchor']" ).length ) {
//        window.location = '#' + $( "[name='anchor']" ).val();
//    }
// });



$(function () {
    console.log("Running anchor script");
    if (window.location.hash) {
        console.log("Anchor: " + window.location.hash);
        if(window.location.hash.match(/^#question_[0-9]+$/gi)){
            console.log("Question anchor");
            var $target = $('body').find(window.location.hash);
            if ($target.hasClass('accordion')) {            
                console.log("Found accordion");
                var $targetAccordion = $target.find('.collapse');
                $targetAccordion.collapse('show');
                $(window.location.hash).on('shown.bs.collapse', function() {
                    console.log("shown");
                    window.location.hash = window.location.hash;
                }).on('show.bs.collapse', function() {
                    console.log("show");
                });
            }      
        }else{
            console.log("Invalid anchor");
        }
   }
});







  // $(document).on('click', '#condtionBtn', function () {
  //   if (document.getElementById("conditionCard").style.display ==="none") {
  //     $('#conditionCard').show();
  //     document.getElementById("condtionBtn").value = "Remove condition";
  //     document.getElementById("condtionBtn").textContent = " Remove condition";
  //     document.getElementById("condtionBtn").className = "btn btn-primary fa fa-minus mt-3";
  //   } else {
  //     $('#conditionCard').hide();
  //     document.getElementById("condtionBtn").value = "Add condition";
  //     document.getElementById("condtionBtn").textContent = " Add condition";
  //     document.getElementById("condtionBtn").className = "btn btn-primary fa fa-plus mt-3";
  //   }
  // });
  // $("#condtionBtn").trigger("click");

import $ from 'jquery';



let id = $('h2.name').attr("data-id");
$("path[data-id='"+id+"']").addClass('active');




let pop = $('span.pop').attr("data-pop");

function makeCircle(pop){

    $('span.pop').css("width", Math.log(pop)*10 + "px");
    $('span.pop').css("height", Math.log(pop)*10 + "px");

}
makeCircle(pop);

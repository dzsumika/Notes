$(document).ready(function(){

    $('.note').hide();
    $('.create_note_form').hide();
    
    $(".create_note").mouseenter(function(){
        $(".create_note").css("background-color", "#4ddde0");
        $(".create_note p").css("color", "#fff");
    });
    
    $(".create_note").mouseleave(function(){
        $(".create_note").css("background-color", "#fff");
        $(".create_note p").css("color", "#4ddde0");
    });
    
    //animate note input
    $(".create_note").click(function(){
        
        $(".create_note_form").show(function(){
            $(".create_note_form").animate({
                opacity: '1',
            });
        });
        $('.note').hide(function() {
            $(".note").animate({
                opacity: '0',
            });
        });
        $('body').append('');
    });
    
    //animate note input
    $(".show_notes").click(function(){
        
        $(".note").show(function(){
            $(".note").animate({
                opacity: '1',
            });
        });
        $('.create_note_form').hide(function() {
            $(".create_note_form").animate({
                opacity: '0',
            });
        });
    });
});
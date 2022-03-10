$(function(){

    $("#main_form").on('submit',function(e){
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){

            },
            success:function(data){

            }
        });
    });
    
});
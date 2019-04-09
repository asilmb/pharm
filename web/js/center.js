function centerUp(){
    var $data = $(this).serialize();
    $.ajax({
        url: '/center/up',
        type: 'get',
        data: $data,
        dataType: "json",
        success: function(result){
            $("input[name=token]").val(result.token);
            console.log(result);
        },
        error: function(){
            alert('Error!');
        }
    });
    return false;
};
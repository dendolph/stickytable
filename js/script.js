$(function(){
    //alert('jquery working');
    $data = $('.data');
    $rand = Math.round(Math.random() * 4);

    if($data.val() == 0){
        $data.val($rand);
    }

    $('#submit').click(function (e) {
        e.preventDefault();
        alert();

        var datas = {};
        datas.data = $data.val();
        $.ajax({
            type: "POST",
            url: "http://localhost/denis/StickyTableHeaders/function.php",
            data: datas,
            cache: false,
            success: function (response) {
                alert('data saved');
            },
            error: function(){
                alert('failed');
            }
        });
        return false;
    });
});
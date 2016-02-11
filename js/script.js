$(function(){
    //alert('jquery working');
    $data = $('.data');

    var get_random = function(){
        $random_num = Math.floor(Math.random() * 5);
        if($random_num == 0){
            alert('true');
            $result = $random_num + 1;
        } else {
            $result = $random_num;
        }
        $data.val($result);
    };
    get_random();


    // save data
    $('#submit').click(function () {
        var datas = {};
        datas.data = $data.val();
        $.ajax({
            type: "POST",
            url: "http://localhost/stickytable/insert.php",
            data: datas,
            cache: false,
            success: function (response) {
                get_random();
            },
            error: function(){
                alert('failed');
            }
        });
        return false;
    });

    // fetch data

    var fetch = function(){
        $.get('http://localhost/stickytable/view.php', { }, function(data){
            $('.test').html(data.result);
        }, 'json')
        .done(function(){
            alert('success');
        })
        .fail(function(){
            alert('fail');
        });
        //$.ajax({
        //    type: 'GET',
        //    url: 'http://localhost/stickytable/view.php',
        //    dataType: 'json',
        //    success: function(data){
        //        alert('fetch working');
        //        $('.test').html(data.result);
        //    },
        //    error: function(){
        //        alert('somethings wrong');
        //    }
        //});
    };
    fetch();
});
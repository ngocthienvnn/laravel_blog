$(function () {
    $('#postCategory').click(function () {
        var title = $('#title').val();
        var discription = $('#discription').val();
        console.log(title,discription)
        $.ajax({
            type :'post',
            url:'admin/category/category',
            data:{title:title,discription:discription, _token: window.laravel_csrf_token},
        }).then( function (res) {
            alert(res);
        }).catch(function (res) {
            console.log(res.responseJSON.message)
        })
    })
        $.ajax({
            type: 'get',
            url: 'admin/category/getCategory',
            data: {_token: window.laravel_csrf_token}
        }).then(function (res) {
            console.log(res)
            for (var i = 0 ;i<res.length ; i++){
                if (res[i].active ==1 ){
                    $('#title').append('<div class="col-lg-12 text b-d-category"><div class="title-category" id="id_title ">'+res[i].title+'</div><div id="id_des">'+res[i].description+'<div></div>');

                }
                   // $('#id_des').append(res[i].description);

            }
        }).catch(function (res) {
            console.log(res.responseJSON.message)
        })
})

$(document).on('click','#icon-sun',function () {
    // console.log(3123123)
    $('body').css('background-color','white');
    $('.text,.text-header-left,.text-title').css('color','black')
    $('.footer-background').css('background-color','#eef1f0')
    $('#icon-sun').addClass('d-none');
    $('#icon-moon').removeClass('d-none');
    $('.b-d-category').css('background-color','#eef1f0')
})
$(document).on('click','#icon-moon',function () {
    // console.log(3123123)
    $('body').css('background-color','#111016');
    $('.text,.text-header-left,.text-title').css('color','#ffffff')
    $('.footer-background').css('background-color','#18181d')
    $('#icon-sun').removeClass('d-none');
    $('#icon-moon').addClass('d-none');
    $('.b-d-category').css('background-color','#18181d')
})




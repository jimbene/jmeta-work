// 탭 ----------------------------------------- /
var menu = $('.menu-tab li');
var content = $('.tabs');

menu.click(function (e) {
    e.preventDefault();
    var targetIdx = $(this).index();
    content.hide();
    content.eq(targetIdx).show();
    menu.find('a').removeClass('active');
    $(this).find('a').addClass('active');
});
content.eq(0).show();

// 메뉴
$('.drow-btn').on('click', function(){
    $('.lnb').show();
})

$('.close-btn').on('click', function(){
    $('.lnb').hide();
})

// 동의하기 체크박스 전체 선택
$(".main__terms-con").on("click", "#agreeAll", function () {
    $(this).parents(".main__terms-con").find('input').prop("checked", $(this).is(":checked"));
});

// 동의하기 체크박스 개별 선택
$(".main__terms-con").on("click", ".agree", function() {
    var is_checked = true;

    $(".agree").each(function(){
        is_checked = is_checked && $(this).is(":checked");
    });

    $("#agreeAll").prop("checked", is_checked);
})
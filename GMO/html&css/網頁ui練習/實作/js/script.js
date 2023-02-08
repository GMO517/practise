//navbar收合事件
$(function () {
  $(".nav-btn").click(function () {
    $(".nav-list").slideToggle(); //後面括弧可以放數字 會影響收合速度
  })
})

//影片區點字改影片播放器 
$(function () {
  $("._video").click(function () {
    let video = $(this).data("video");
    let url = "https://www.youtube.com/embed/" + video;
    $("#video_player").attr('src', url);
  })
})
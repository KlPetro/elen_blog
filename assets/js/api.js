$(".likeBtn").on("click", function (e) {
  let that = $(this);

  $.post("/api.php?p=like", { post_id: that.data("id") }).done(function (data) {
    if (data) {
      //console.dir(data);
      data = JSON.parse(data);
      console.dir(JSON.parse(data));
      if (data.status == "liked") {
        that.addClass("liked");
      } else {
        that.removeClass("liked");
      }
      that.find("b").text(data.count);
    }
  });
});

$(document).ready(function () {
  $(".avatar").click(function () {
    $(".blockcentr").slideToggle("2000");
  });
});

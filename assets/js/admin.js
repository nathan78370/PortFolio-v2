CKEDITOR.replace("editor1");
CKEDITOR.config.height = "400px";

$(".article-block-add-btn").on("click", function () {
  $(this).toggleClass("active");
});
$("#btn-reorder").on("click", function () {
  $(".article-content-drag").toggleClass("active");
});

$(".btn-save").on("click", function () {
  var $this = $(this);
  $this.button("loading");
  $(".article-backdrop").fadeIn(300);
  setTimeout(function () {
    $this.button("complete");
    $(".article-backdrop").fadeOut(100);
    setTimeout(function () {
      $this.button("reset");
    }, 3000);
  }, 6000);
});

$(document).on("click", ".alert", function (e) {
  bootbox.prompt({
    title: "This is a prompt with select!",
    inputType: "select",
    inputOptions: [
      {
        text: "Choose one...",
        value: "",
      },
      {
        text: "Choice One",
        value: "1",
      },
      {
        text: "Choice Two",
        value: "2",
      },
      {
        text: "Choice Three",
        value: "3",
      },
    ],
    callback: function (result) {
      console.log(result);
    },
  });
});

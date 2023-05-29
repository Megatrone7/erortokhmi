/* Animate On Scroll Library */
AOS.init({
  duration: 1200,
});
/* end Animate On Scroll  */

/* icon go up animation fade */
function MyBtn_GoUp() {
  var Btn_GoUp = document.querySelector(".last-link");
  if (window.pageYOffset > 200) {
    Btn_GoUp.classList.add("show");
  } else {
    Btn_GoUp.classList.remove("show");
  }
}
/*end  icon go up animation fade */

/* click go up transition */
$(document).ready(function () {
  $(".last-link").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        800,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });
});
/* end of click go up transition */

/* Number counter plugin */
new PureCounter();
new PureCounter({
  filesizing: true,
  selector: ".filesizecount",
  pulse: 2,
});
/* end Number counter plugin */

/* Be sure to write JQUERY cdn in Browser*/
$(document).ready(function () {
  /* Below is the function for opening full screen. Up here it will trigger after window is ready. You can change this by using some DOM event handlers to this function below */
  openFullscreen();

  function openFullscreen() {
    if ($("body,html").requestFullscreen) {
      $("body,html").requestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      /* Firefox */
      $("body,html").mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      /* Chrome, Safari & Opera */
      $("body,html").webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
      /* IE/Edge */
      $("body,html").msRequestFullscreen();
    }
  }
  //count_tab_change=0;
  window.addEventListener("blur", () => {
    alert("Tabs switching");
    /* Here You can add additional functions to count how many times tab being switched.*/
    /* This count can be used to redirect to finish window automatically or to disqualify. */

    // count_tab_change++;
    // if(count_tab_change>3){
    // 	window.redirect("disqualify.html");
    // }
  });
});

var video = document.querySelector("#video");

function startvideo() {
  if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices
      .getUserMedia({ video: true })
      .then(function (stream) {
        video.srcObject = stream;
      })
      .catch(function (err0r) {
        console.log("Something went wrong!");
      });
  }
}
Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri(
    "http://localhost/internship_project2_OEMS/models"
  ),
  faceapi.nets.faceLandmark68Net.loadFromUri(
    "http://localhost/internship_project2_OEMS/models"
  ),
  faceapi.nets.faceRecognitionNet.loadFromUri(
    "http://localhost/internship_project2_OEMS/models"
  ),
  faceapi.nets.faceExpressionNet.loadFromUri(
    "http://localhost/internship_project2_OEMS/models"
  ),
]).then(startvideo);

video.addEventListener("play", () => {
  setInterval(async () => {
    const detection = await faceapi
      .detectAllFaces(video, new faceapi.TinyFaceDetectorOptions())
      .withFaceLandmarks()
      .withFaceExpressions();
    //console.log(detection.length);
    if (detection.length >= 2) {
      console.log("Cheating");
      window.open(
        "http://localhost/internship_project2_OEMS/viewstudentscore.php"
      );
    }
  }, 100);
});

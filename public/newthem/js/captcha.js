var code;
function createCaptcha() {
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1);
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 100;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv);
}

createCaptcha()

var message = document.getElementById('show-message');
function validateCaptcha() {
  event.preventDefault();
  debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    message.innerHTML = 'کد رو درست وارد کردی :)';
    message.className = 'font-12 text-success mt-3';
  } else {
    message.innerHTML = 'کد رو غلط وارد کردی لطفا دوباره تلاش کن :(';
    message.className = 'font-12 text-danger mt-3';
    createCaptcha();
  }
}

var privacyarea = document.getElementById('privacy-policy-area');
var privacybody = document.getElementById('privacy-policy-body');
var isprivacyshowing = false;

privacyarea.addEventListener('click', () => {
  var buttonText = document.getElementById('privacy-policy-area-text');
  if (isprivacyshowing) {
    privacybody.style.display = 'none';
    isprivacyshowing = false;
    buttonText.textContent = 'Click to Open';
  } else {
    privacybody.style.display = 'block';
    isprivacyshowing = true;
    buttonText.textContent = 'Click to Close';
  }
});

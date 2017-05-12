(function loadDeferredImages() {
  var imgDefer = document.querySelectorAll('img[data-src]');
  for (var i = 0; i < imgDefer.length; i++) {
    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
  }

  var bgImgDefer = document.querySelectorAll('[data-bg-img]');
  for (var i = 0; i < bgImgDefer.length; i++) {
    bgImgDefer[i].style['background-image'] = bgImgDefer[i].getAttribute('data-bg-img');
  }

  var bgDefer = document.querySelectorAll('[data-bg]');
  for (var i = 0; i < bgDefer.length; i++) {
    bgDefer[i].style['background'] = bgDefer[i].getAttribute('data-bg');
  }

})();
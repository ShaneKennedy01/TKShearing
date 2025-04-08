document.addEventListener('DOMContentLoaded', function () {
  const carouselElement = document.querySelector('#carouselExample');
  const carousel = new bootstrap.Carousel(carouselElement, {
    interval: 5000, 
    touch: false
  });

  const logoImage = document.getElementById('logoImage');
  const staticLogoSrc = 'images/logo.png';
  const animatedLogoSrc = 'images/logo_animation.gif';

  logoImage.addEventListener('mouseenter', function() {
    logoImage.src = animatedLogoSrc;
  });

  logoImage.addEventListener('mouseleave', function() {
    logoImage.src = staticLogoSrc;
  });
});

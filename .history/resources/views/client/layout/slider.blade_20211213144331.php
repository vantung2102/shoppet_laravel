<style>
    @keyframes text-slide {
  0% {
    opacity: 0;
    transform: translateY(0);
    transform: scale(90%);
  }
  90% {
    opacity: 1;
    transform: translateY(-50%);
  }
  100% {
    opacity: 0;
  }
}

@keyframes slide-auto {
  25% {
    background-image: url(../images/banner/6.jpg);
    background-position: center;
  }
  50% {
    background-image: url(../images/banner/1.jpg);
    background-position: top;
  }
  75% {
    background-image: url(../images/banner/3.jpg);
    background-position: center;
  }
  100% {
    background-image: url(../images/banner/4.jpg);
    background-position: center;
  }
}

.slide-banner__img {
    width: 100%;
    height: 100%;
    padding: 30px;
    background-image: url(../images/banner/6.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: brightness(0.9);
    transition-duration: 0.3s;
    animation: slide-auto 28s infinite, zoom-img infinite 7s, fadeIn ease 0.3s;
    -webkit-animation: slide-auto 28s infinite, zoom-img infinite 7s,
        fadeIn ease 0.3s;
    border: none;
}

.slide-banner__text {
    position: relative;
    top: -50%;
    transform: translateY(-50%);
    z-index: 1;
    transition-duration: 0.5s;
    animation: text-slide infinite 10s;
    -webkit-animation: text-slide infinite 10s;
}

</style>

<!-- banner slider-->
<div class="gird slider">
    <div class="gird">
      <div class="slide-warp">
        <div class="slide-banner">
          <div class="slide-banner__img"></div>
          <div class="slide-banner__text">
            <h2 class="slide-banner__title-1">Chào Mừng Đến Với</h2>
            <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
            <p class="slide-banner__description">Chúng tôi nuôi thú cưng vì niềm vui.</p>
          </div>
        </div>

        <div class="next-warp__btn hidden-mobile">
          <div class="slide-banner__next slide-banner__next-left center">
            <i class="fas fa-chevron-left"></i>
          </div>
          <div class="slide-banner__next slide-banner__next-right center">
            <i class="fas fa-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
</div>

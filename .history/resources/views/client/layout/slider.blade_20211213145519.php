<style>
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

</style>



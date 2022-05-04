<!DOCTYPE html>
<?php include('header.php')?>
    <section class="hotel"> 
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img src="img/Star.svg" alt="star">
                <img src="img/Star.svg" alt="star">
                <img src="img/Star.svg" alt="star">
                <img src="img/Star.svg" alt="star">
                <img src="img/Star.svg" alt="star">
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>  
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free</p>
          </div>
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
        </div>
        <div class="hotel-grid">
          <div class="slider">
            <!-- Slider main container -->
            <div class="swiper hotel-slider">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img src="/img/Slide1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="/img/Slide2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="/img/Slide1.jpg" alt="">
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <button type="button" class="swiper-button swiper-button-prev"></button>
              <button type="button" class="swiper-button swiper-button-next"></button>
            </div>
          </div>
          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <div class="booking__room">
                  <div class="booking__text">
                    <img 
                    src="/img/user.svg" 
                    alt="" 
                    class="booking__icon">
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <img 
                    src="/img/home.svg" 
                    alt="" 
                    class="booking__icon">
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                </div>
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100">
                  <img src="/img/phone-call.svg" alt="">
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <button class="button booking__button">View Other Options</button>
            </div>
            <div class="map">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8ffdcc7eadb0008676d22381a15bc2e534d727a92616aa8517b81cff0164023e&amp;source=constructor" width="347" height="213" frameborder="0"></iframe>
            </div>
          </div>
          <!-- /.map -->
        </div>
      </div>
    </section>
    <section class="newsletter" data-parallax="scroll" data-image-src="../img/newsletter-bg.jpeg">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title">subscribe to our
          <span class="newsletter-title__strong">NewsLetter</span>
        </h2>
        <form action="#" class="subscribe newsletter__subscribe">
          <input
            type="text"
            class="subscribe__input"
            placeholder="Your email adress"
          />
          <button class="subscribe__button">Send</button>
        </form>
      </div>
    </section>
    <section class="rewiews">
      <div class="container">
        <h2 class="section-title">What people think about us</h2>
        <div class="slider rewiews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="rewiews-slider__item">
                <div class="rewiews-slider__profile">
                  <img
                    src="/img/rewiews-avatar.jpeg" 
                    alt="Megan Fox"
                    class="rewiews-slider__avatar"
                    />
                  <h3 class="rewiews-slider__username">Megan Fox</h3>
                  <span class="rewiews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="rating">
                    <img src="img/Star.svg" alt="star">
                    <img src="img/Star.svg" alt="star">
                    <img src="img/Star.svg" alt="star">
                    <img src="img/Star.svg" alt="star">
                    <img src="img/Star.svg" alt="star">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>
    <section class="activities">
      <div class="content">
        <h2 class="activities__title">Other activities</h2>
        <div class="activities-wrapper">
          <div class="card">
            <img src="./img/activity-1.jpg" alt="" class="card__image">
            <h3 class="card__title">The curious corner 
              of chamarel</h3>
            <button class="card__button">Book Now</button>
          </div>
          <div class="card">
            <img src="./img/activity-2.jpg" alt="" class="card__image">
            <h3 class="card__title">Gymkhana club golf
              course</h3>
            <button class="card__button">Book Now</button>
          </div>
          <div class="card">
            <img src="./img/activity-3.jpg" alt="" class="card__image">
            <h3 class="card__title">Tamarind falls hiking
              trip - full day</h3>
            <button class="card__button">Book Now</button>
          </div>
          <div class="card">
            <img src="./img/activity-4.jpg" alt="" class="card__image">
            <h3 class="card__title">The blue marine discovery
              quest</h3>
            <button class="card__button">Book Now</button>
          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php')?>
</html>

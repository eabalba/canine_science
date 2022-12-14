gsap.registerPlugin(ScrollTrigger);

/* When Mobile Menu Toggle*/
var burger = document.querySelector("div.burger");
burger.addEventListener("click", function() {
  burger.classList.toggle("is-active");
});

//Form styling - displaying labels as placeholders
document.querySelectorAll('.wpcf7 input, .wpcf7 textarea, .wpcf7 select').forEach(input=> {
  input.addEventListener('focus', (e) => {
      e.target.closest('.form__row').classList.add('active');
  });
  input.addEventListener('focusout', (e) => {
      if(e.target.value == ''){
          e.target.closest('.form__row').classList.remove('active');
      }
  });
});

/* Home hero - background image into computer screen*/
var heroAnimation = document.getElementsByClassName('hero__animation');
var heroPlay = document.getElementsByClassName('hero__play-button');
var heroText = document.getElementsByClassName('hero__text-container');
var heroDog = document.getElementsByClassName('hero__bg');
var heroOverlay = document.getElementsByClassName('hero__overlay');
if (heroAnimation.length > 0) {
  ScrollTrigger.create({
    animation:gsap.fromTo(heroAnimation, 
    {
        scale: 1,
      },
    {
      scale: 0.3,
    }),

    scrub:true,
    trigger: ".home-hero",
    start: "top top",
    end: 'bottom top',
    pin: heroAnimation,
    pinSpacing: true,
    ease: "linear",
    invalidateOnRefresh: true
  });
  ScrollTrigger.create({
    animation:gsap.fromTo(heroPlay, 
      {
          opacity: 0,
        },
      {
        opacity: 1,
      }),

    scrub:true,
    trigger: ".home-hero",
    start: "top top",
    end: 'bottom top',
    pin: heroAnimation,
    pinSpacing: true,
    ease: "linear",
    invalidateOnRefresh: true
  });
   ScrollTrigger.create({
      animation:gsap.fromTo(heroText, 
        {
            opacity: 1,
          },
        {
          opacity: 0,
        }),
    scrub:true,
    trigger: ".home-hero",
    start: "top top",
    end: 'bottom top',
    pin: heroAnimation,
    pinSpacing: true,
    ease: "linear",
    invalidateOnRefresh: true
  });
  ScrollTrigger.create({
    animation:gsap.to(heroDog, 
      {
        height: '100%',
      }),
  scrub:true,
  trigger: ".home-hero",
  start: "top top",
  end: 'bottom top',
  pin: heroAnimation,
  pinSpacing: true,
  ease: "linear",
  invalidateOnRefresh: true
});
ScrollTrigger.create({
  animation:gsap.to(heroOverlay, 
    {
      top: 0,
      height: 0,
    }),
scrub:true,
trigger: ".home-hero",
start: "top top",
end: 'bottom top',
pin: heroAnimation,
pinSpacing: true,
ease: "linear",
invalidateOnRefresh: true
});
}

/*Changing the body background colour on scroll*/
gsap.utils.toArray('.has-silver-background-color').forEach(function (elem) {
  var silver = '#f7f7f7';
  var dgrey = '#343331';
  ScrollTrigger.create({
      trigger: elem,
      start:"25% bottom",
      end:"bottom -5%", 
      invalidateOnRefresh: true,
      onEnter: () => gsap.timeline()
      .to('body', {
          backgroundColor: silver,
          color:  dgrey,
          duration: 0.5,
      })
      .to('svg', {
        fill:  dgrey,
        duration: 0.5,
      }),

      onLeave: () => gsap.timeline()
      .to('body', {
          backgroundColor: dgrey,
          color: silver,
          duration: 0.1,
         
      })
      .to('svg', {
        fill:  silver,
        duration: 0.5,
      }),
      onLeaveBack: () => gsap.timeline()
      .to('body', {
          backgroundColor: dgrey,
          color: silver,
          duration: 0.5,
         
      })
      .to('svg', {
        fill:  silver,
        duration: 0.5,
      }),
      onEnterBack: () => gsap.timeline()
      .to('body', {
          backgroundColor: silver ,
          color:  dgrey,
          duration: 0.1,
      })
      .to('svg', {
        fill:  dgrey,
        duration: 0.1,
      }),
  });
});


//toggle accordion content 
document.querySelectorAll('.accordion:not(:first-child) .accordion__heading').forEach(accordionButton => {
  accordionButton.setAttribute('aria-expanded', 'false'); //if js runs set aria-expanded to false
  accordionButton.nextElementSibling.classList.toggle('open');
});
document.querySelectorAll('.accordion__heading').forEach(accordionButton => {
  accordionButton.addEventListener('click', function(){
      accordionButton.nextElementSibling.classList.toggle('open'); 
      const buttonState = accordionButton.getAttribute('aria-expanded') == 'false' ? 'true' : 'false';
      accordionButton.setAttribute('aria-expanded', buttonState);
  });
});


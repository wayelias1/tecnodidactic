import 'alpine-magic-helpers'; //@Alpine Extensionr: https://www.alpinetoolbox.com/extensions/
import Alpine from 'alpinejs';
import { Transitions } from '../transitions';

import {
  Solar,
} from '../solar';
import {
  Carousel,
  Store,
  Menu,
} from '../util';

const preloader = document.querySelector('.preloader');

export default {
  init() {
    window.Alpine = Alpine;
    Alpine.start();
    Menu.init();
    Store.setup();
    Solar.start();
    Carousel.init();
    preloader.classList.remove('is-loading');
  
  },
  finalize() {
    window.useInertia.before(() => {
      
    })

    window.useInertia.after(() => {
      Carousel.init();
    })
    window.inertia.setup.transitions = Transitions;
    window.inertia.init(window.inertia.setup);

    const slider = document.querySelector('.carrusel');
      let sliderSection = document.querySelectorAll('.carrusel-box');
      if(slider && sliderSection.length > 0){
        let sliderSectionLast = sliderSection[sliderSection.length -1];
  
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        function Next(){
          let sliderSectionFirst = document.querySelectorAll('.carrusel-box')[0];
          slider.style.transform = 'translateX(-37.5%)';
          slider.style.transition = 'all 1s';
          setTimeout(() => {
            slider.style.transition = 'none';
            slider.insertAdjacentElement('beforeend', sliderSectionFirst);
            slider.style.transform = 'translateX(-25%)';
          }, 2000); 
        }
        setInterval(function(){
          Next();
        }, 2200);
      }
    
    const prevbutton = document.querySelector('.prev');
    if(prevbutton){
      prevbutton.innerHTML = '<';
    }
    const nextbutton = document.querySelector('.next');
    if(nextbutton){
      nextbutton.innerHTML = '>';
    }
  },
};
  
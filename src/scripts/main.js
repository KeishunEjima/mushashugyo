import {initiateSwiper} from "./modules/swiper";
import { initiateMenuBtn } from "./modules/initiateMenuBtn";
import { accordion } from "./modules/accordion";

initiateSwiper();
initiateMenuBtn({
    closeBtn: document.querySelector(".js-close-btn"),
    drawerBtn: document.querySelector(".js-menu-btn"),
    targetElem: document.querySelector(".js-target-elem"),
});
accordion({
    titles: document.querySelectorAll('.js-accordion-title')
});

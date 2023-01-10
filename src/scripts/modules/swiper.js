import Swiper, { Autoplay } from "swiper";

export function initiateSwiper() {
	
	Swiper.use([Autoplay]);
	
	new Swiper(".swiper", {
		centeredSlides: true, // アクティブなスライドを中央に配置する
		simulateTouch: false,
		
		loop: true, // 無限ループさせる
		loopAdditionalSlides: 1, // 無限ループさせる場合に複製するスライド数
	
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
	
		speed: 1000, // スライドアニメーションのスピード（ミリ秒）
	
		watchSlidesProgress: true, // スライドの進行状況を監視する
	});
}
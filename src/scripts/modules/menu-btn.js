const drawerBtn = document.querySelector(".js-menu-btn");
const targetElem = document.querySelector(".js-target-elem");
const className = "open";

drawerBtn.addEventListener("click", function () {
	returnDrawerClass();
});

// targetElem.querySelectorAll(".l-drawer-nav a").forEach((target) => {
// 	target.addEventListener("click", function () {
// 		returnDrawerClass();
// 	});
// });

/**
 * 特定の要素に特定のクラスを追加・削除する
 *
 * return @class
 */
function returnDrawerClass() {
	if (targetElem.classList.contains(className)) {
		targetElem.classList.remove(className);
	} else {
		targetElem.classList.add(className);
	}
}
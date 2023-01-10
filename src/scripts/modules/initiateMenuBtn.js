export function initiateMenuBtn ({drawerBtn, closeBtn, targetElem, className = "open"}) {	
	drawerBtn.addEventListener("click", function () {
		returnDrawerClass(targetElem, className);
	});
	closeBtn.addEventListener("click", function () {
		returnDrawerClass(targetElem, className);
	});
}

/**
 * 特定の要素に特定のクラスを追加・削除する
 *
 * @return void 
 */
function returnDrawerClass(targetElem, className) {
	if (targetElem.classList.contains(className)) {
		targetElem.classList.remove(className);
	} else {
		targetElem.classList.add(className);
	}
}
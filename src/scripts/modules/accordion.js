export function accordion({titles}) { //分割代入
  //titleの要素数だけ繰り返し処理
  for (let i = 0; i < titles.length; i++){
    let titleEach = titles[i]; //titleのindexを代入
    titleEach.addEventListener('click', () => {
      titleEach.classList.toggle('is-open');
    });
  }
}


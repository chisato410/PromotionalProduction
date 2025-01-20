// ローディン画面の表示を初回のみ
// セッションストレージからフラグを取得
const isFirstLoad = sessionStorage.getItem('isFirstLoad');

// ページの読み込みが完了したときに実行される関数
window.addEventListener('load', function () {
    // フラグが 'true' でない場合（初回アクセス時またはフラグが削除された場合）
    if (isFirstLoad !== 'true') {
        // ローディング画面を表示
        const loadingElement = document.querySelector('.loading');
        loadingElement.classList.add('active');

        // 2秒後にローディング画面を非表示にする
        setTimeout(function () {
            // ローディング画面を非表示にする
            loadingElement.classList.remove('active');
            // コンテンツ要素を表示
            const contentsElement = document.querySelector('.contents.hidden');
            console.log(contentsElement);
            contentsElement.classList.remove('hidden'); // hiddenクラスを取り除くことでコンテンツを表示
            // セッションストレージにフラグを保存
            sessionStorage.setItem('isFirstLoad', 'true');
        }, 2000);
        setTimeout(function () {
            loadingElement.style.display = 'none'; // 非表示にする
        }, 2500);
    } else {
        // 2回目以降のアクセス時の処理を記述
        // コンテンツ要素を表示
        const contentsElement = document.querySelector('.contents.hidden');
        contentsElement.classList.remove('hidden'); // hiddenクラスを取り除くことでコンテンツを表示
    }
});


// メニュー
const menuBtn = document.querySelector('.header__menu');
const nav = document.querySelector('.nav');
const header = document.querySelector('.header');

// 初期化処理
document.addEventListener('DOMContentLoaded', () => {
    nav.classList.remove('nav--hidden'); // 初期非表示クラスを削除
});

// メニューボタンのクリックイベント
menuBtn.addEventListener('click', function () {
    nav.classList.toggle('openMenu');
    menuBtn.classList.toggle('active');

    if (nav.classList.contains('openMenu')) {
        menuBtn.textContent = '閉じる';
    } else {
        menuBtn.textContent = 'メニュー';
    }
});


// 店舗について（about）のスタッフ紹介をフェードインする際の制御
const aboutStaffs = document.querySelectorAll(".staff__list");

const handleScroll = () => {
    aboutStaffs.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (elementTop < windowHeight - 100) {
            element.classList.add("show");
        }
    });
};

window.addEventListener("scroll", handleScroll);

handleScroll();

// .heroを通過したらheaderを透過
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    const hero = document.querySelector(".hero");

    // `hero` の高さを取得
    const heroBottom = hero.offsetHeight;

    window.addEventListener("scroll", function () {
        // 現在のスクロール位置
        const scrollY = window.scrollY;

        if (scrollY > heroBottom && !header.classList.contains('transparent')) {
            // `hero` を通り過ぎた場合
            header.classList.add("transparent");
        } else if (scrollY <= heroBottom && header.classList.contains('transparent')){
            // `hero` の中にいる場合
            header.classList.remove("transparent");
        }
    });
});

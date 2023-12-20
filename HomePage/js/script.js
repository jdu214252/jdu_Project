const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY > 0);
})

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
};

let docTitle = document.title;
window.addEventListener("blur", () => {
    document.title = "Come back :("
});

window.addEventListener("focus", () => {
    document.title = docTitle;
});



const langArr = {
    "acc" :  {
        "en": "Accesible Online Courses For All",
        "jpn": "誰でもアクセス可能なオンライン コース",
    }, 
    "best": {
       
        "en": "Best online learning platform",
        "jpn": "最高のオンライン学習プラットフォーム",
    }, 
    "own": {
        
        "en": "Own your future learning new skills online",
        "jpn": "オンラインで新しいスキルを身につけ、自分の未来を切り開こう",
    }, 
    "who": {
      
        "en": "Who it is suitable for",
        "jpn": "どんな人に適しているか",
    }, 
    "who_icon1": {
 
        "en": "Who values their time",
        "jpn": "時間を大切にする人",
    }, 
    "who_icon2": {
        
        "en": "Who are just beginning their career",
        "jpn": "キャリアをスタートさせたばかりの人",
    }, 
    "who_icon3": {
        
        "en": "Who wants to learn current skills and programs",
        "jpn": "最新の技術やプログラムを学びたい人",
    }, 
    "curs": {
        
        "en": "COURSES",
        "jpn": "コース",
    }, 
    "pop_curs": {
        
        "en": "Most popular courses in Uzbekistan",
        "jpn": "ウズベキスタンで最も人気のあるコース",
    }, 
    "all_curs_btn": {
        
        "en": "All Courses",
        "jpn": "全コース",
    }, 
    "curs2": {
        
        "en": "COURSES",
        "jpn": "コース",
    },
    "exp_curs": {
        
        "en": "Explore Popular Courses",
        "jpn": "人気のコースを探す",
    },
    "more": {
        
        "en": "More",
        "jpn": "もっと見る",
    },
    "comment": {
        
        "en": "COMMENTS",
        "jpn": "コメント",
    },
    "client_comment": {
        
        "en": "CLIENTS SAYS",
        "jpn": "お客様の声",
    },
    "trusted": {
        
        "en": "TRUSTED BY",
        "jpn": "信頼される",
    },
    "collaborat": {
        
        "en": "We collaborate with leading companies",
        "jpn": "大手企業との提携",
    },
    "join_us": {
        
        "en": "Want to share your knowledge? Join us a Mentor",
        "jpn": "あなたの知識を共有したいですか？メンターとして参加する",
    },
    "join_us_text": {
        
        "en": "Teachers from around the world teach millions of students on JDU|ONLiNE. We give you the tools to teach what you love. We provide many resources for creating your first course. Our instructor dashboard and course syllabus pages will help you organize the process.",
        "jpn": "世界中の教師がJDU|ONLiNEで何百万人もの生徒を教えています。私たちは、あなたが好きなことを教えるためのツールを提供します。最初のコースを作成するための多くのリソースを提供しています。インストラクターダッシュボードとコースシラバスページは、プロセスを整理するのに役立ちます。",
    },
    "best_cours": {
        
        "en": "Best courses",
        "jpn": "ベストコース",
    },
    "top_rated": {
        
        "en": "Top rated Instructors",
        "jpn": "トップ・インストラクター",
    },
    "read_more": {
        
        "en": "Read more",
        "jpn": "もっと読む",
    },
}
  
const maxImg = document.querySelector('.right-panel img');
const select = document.querySelector('select');
const allLang = ['en', 'jpn'];

document.querySelectorAll('.left-panel img').forEach(item => item.onmouseenter = (event) => maxImg.src = event.target.src);

select.addEventListener('change', changeURLLanguage);

// перенаправить на url с указанием языка
function changeURLLanguage() {
    let lang = select.value;
    location.href = window.location.pathname + '#' + lang;
    location.reload();
}

function changeLanguage() {
    let hash = window.location.hash;
    hash = hash.substr(1);
    console.log(hash);
    if (!allLang.includes(hash)) {
        location.href = window.location.pathname + '#en';
        location.reload();
    }
    select.value = hash;
    document.querySelector('title').innerHTML = langArr['acc'][hash];
    // document.querySelector('.lng-chip').innerHTML = langArr['chip'][hash];
    for (let key in langArr) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr[key][hash];
        }

    }
}

changeLanguage();

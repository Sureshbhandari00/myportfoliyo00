function changebg() {
    var scrollValue = window.scrollY;
    var header = document.getElementById('header');
    console.log(header);
    if (scrollValue < 200) {
        header.classList.remove('sticky');

    } else {

        header.classList.add('sticky');
    }
}
window.addEventListener('scroll', changebg);


// animate number*************************************************************************************
const counterNum = document.querySelectorAll(".counter-numbers");
const speed = 300;
counterNum.forEach((curElem) => {

    const updatenumber = () => {
        const targetNumber = parseInt(curElem.dataset.number);

        const iniitalNum = parseInt(curElem.innerText);
        // console.log(iniitalNum);
        const incNum = Math.trunc(targetNumber / speed);

        if (iniitalNum < targetNumber) {
            curElem.innerText = iniitalNum + incNum;
            setTimeout(updatenumber, 10);
        }

    }
    updatenumber();
});




// text to spech applications
let speech = new SpeechSynthesisUtterance();
let voices = [];
let voiceSelect = document.querySelector("select");
window.speechSynthesis.onvoiceschanged = () => {
    voices = window.speechSynthesis.getVoices();
    speech.voice = voices[0];
    voices.forEach(((voice, i) =>
        (voiceSelect.options[i]) = new Option(voice.name, i)));
};
voiceSelect.addEventListener('change', () => {
        speech.voice = voices[voiceSelect.value];
    })
    // let btn = document.querySelector('button');
let btn = document.getElementById('mybtn');

// console.log(btn);

btn.addEventListener("click", () => {
    speech.text = document.querySelector("textarea").value;
    window.speechSynthesis.speak(speech);

});
updatenumber();

// images api strat   when user click on search button

// searchForm = document.getElementById('search-form');
// const searchBox = document.getElementById('search-box');
// const searchResult = document.getElementById('search-resut');
// // searchForm = document.getElementById('show ');
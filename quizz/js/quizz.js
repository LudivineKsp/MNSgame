const inputSecondColor = window.getComputedStyle(document.documentElement).getPropertyValue('--input-second-color');
const secondColor = window.getComputedStyle(document.documentElement).getPropertyValue('--second-color');


let seconds = 30;
const secondsElement = document.getElementById('seconds');
const timerCircle = document.querySelector('.timer-circle');

function countdown() {
  seconds--;
  secondsElement.textContent = seconds;

  const timeLeftPercentage = (seconds / 30) * 100;

  if (timeLeftPercentage <= 50 && timeLeftPercentage > 10) {
    timerCircle.style.borderColor = 'orange';
  } else if (timeLeftPercentage <= 10) {
    timerCircle.style.borderColor = 'red';
  }

  if (seconds === -1) {
    clearInterval(intervalId);
    alert('Le temps est écoulé!');
  }
}
const intervalId = setInterval(countdown, 1000);

const answerElements = document.querySelectorAll('.answer-content');
let lastClickedElement = null;

answerElements.forEach(answerElement => {
  answerElement.addEventListener('click', () => {
    if (lastClickedElement) {
      lastClickedElement.style.backgroundColor = '';
      lastClickedElement.style.border = '';
      lastClickedElement.style.borderColor = '';
    }
    answerElement.style.backgroundColor = inputSecondColor;
    answerElement.style.border = '5px solid';
    answerElement.style.borderColor = secondColor;
    lastClickedElement = answerElement;
  });
});;

const validationBtn = getElementById("validation-btn");

if(document.validationBtn.addEventListener("click", )){

}
const firstSentence=document.querySelector("#first-sentence");
const secondSentence=document.querySelector("#second-sentence");
const buttonLength=document.querySelector("#length");
buttonLength.addEventListener("click",()=>{
console.log(firstSentence.ariaValueMax.length());
});
var firstSentence=document.querySelector("#first-sentence");
const secondSentence=document.querySelector("#second-sentence");
const buttonLength=document.querySelector("#length");
buttonLength.addEventListener("click",()=>{
console.log(firstSentence.value.length);
});
const buttobUpper=document.querySelector("#upper");
buttobUpper.addEventListener("click",()=>{
console.log(firstSentence.value.toUpperCase());
});
const buttonLower=document.querySelector("#lower");
buttonLower.addEventListener("click",()=>{
console.log(firstSentence.value.toLowerCase());
});
const firstName=document.querySelector("#first-name");
const lastName=document.querySelector("#last-name");
const buttonConcate=document.querySelector("#concate");
buttonConcate.addEventListener("click",()=>{
console.log(firstName.value.concate(lastName.value));
});
const secondSentence=document.querySelector("#second-sentence");


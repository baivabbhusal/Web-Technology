var firstSentence=document.querySelector("#first-sentence");
const secondSentence=document.querySelector("#second-sentence");
const buttonLength=document.querySelector("#length");
buttonLength.addEventListener("click",()=>{
console.log(firstSentence.value.length);
});
//convert to upper case
const buttobUpper=document.querySelector("#upper");
buttobUpper.addEventListener("click",()=>{
console.log(firstSentence.value.toUpperCase());
});
//convert to lower case
const buttonLower=document.querySelector("#lower");
buttonLower.addEventListener("click",()=>{
console.log(firstSentence.value.toLowerCase());
});
//concatenate
const firstName=document.querySelector("#first-name");
const lastName=document.querySelector("#last-name");
const buttonConcate=document.querySelector("#concat");
buttonConcate.addEventListener("click",()=>{
console.log(firstName.value+lastName.value);
});
//slice
const startIndex=document.querySelector("#start-index");
const endIndex=document.querySelector("#end-index");
const buttonSlice=document.querySelector("#slice");
buttonSlice.addEventListener("click",()=>{
console.log(secondSentence.value.slice(startIndex.value,endIndex.value));
});



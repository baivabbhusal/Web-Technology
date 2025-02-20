const array=[];
const button=document.querySelector('button');
const array_display=document.querySelector(".array");
button.addEventListener('click',()=>{
    let number=parseInt(document.querySelector('#size').value);
    for(let i=0;i<number;i++){
        array.push(prompt("Enter a number"));
    }
});
console.log(array);

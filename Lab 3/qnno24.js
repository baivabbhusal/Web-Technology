const sentence="Web programming is fun to learn but at the same time programming is difficult too. Web programming is core course in BIM third semester";

const sentenceToArray=sentence.split();
var wordCount=0;
for(let i=0;i<=sentenceToArray.length;i++){
    // if(i=="programming"){
    //     wordCount+=1;
    // }
    console.log(i);
}
console.log("The word count of programming is "+wordCount);

document.getElementById("firstBox").addEventListener("click", function(){
    document.getElementById("firstBox").style.display = "none"
})

document.getElementById("scndBox").addEventListener("click", function(){
    document.getElementById("scndBox").style.display = "none"
})

document.getElementById("trdBox").addEventListener("click", function(){
    document.getElementById("trdBox").style.display = "none"

    var x = 20

    alert(x)

})


document.getElementById("txtChanger").addEventListener("click", function(){
    var userInput = document.getElementById("userInput").value
    console.log(userInput)
    document.getElementById("rplcTxt").innerHTML = userInput
})


var myArray = { }

myArray[0] = "chocolate"
myArray[1] = "strawberry"

console.log(myArray)

var tweet = ["first tweet", "second tweet"]
console.log(tweet[1])

tweet.push("third tweet")
console.log(tweet)


tweet.push("fourth tweet")
console.log(tweet)

tweet.splice(1, 2)
console.log(tweet)

tweet.splice(0, 0, "yup tweet")
console.log(tweet)

var first = 1
console.log(first)

if(first ==1){
    console.log("true")
}else{
    console.log("false")
}


document.getElementById('magicBtn').addEventListener("click", function(){
    var wordToCheck = document.getElementById('magicWord').value

    if(wordToCheck === "candy"){
        console.log("logged in successfully")
    }else{
        console.log('incorrect word')
    }
})
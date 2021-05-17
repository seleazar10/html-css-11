
document.getElementById("comBtn").addEventListener("click", function(event){
    event.preventDefault()
    alert("hi!")

})


document.getElementById("changeBtn0").addEventListener("click", function(){
    document.getElementById("txtChn").innerHTML = "Text Was Changed"
})

document.getElementById("changeBtn1").addEventListener("click", function(){
    document.getElementById("appdTxt").innerHTML=" <h1>awesome<h1>"
})

document.getElementById("changeBtn2").addEventListener("click", function(){
    document.getElementById("appdTxt").style.display = "none"
})

document.getElementById("changeBtn3").addEventListener("click", function(){
    document.getElementById("newStyling").style.color = "red"
    
})
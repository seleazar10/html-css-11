

document.getElementById('submBtnOne').addEventListener('click', function(event){
    event.preventDefault()
    var randomNumb = Math.floor(Math.random() * 2)
    console.log("random numb = " + randomNumb)
    var userInput = document.getElementById('fingersNumb').value
    console.log(userInput)


    //check to see if numbers are equal

    if(userInput == randomNumb){
        console.log('You won')
    }else{
        console.log('You lost')
    }


    //LOOP OVER FIVE
    for(var i = 0; i < 5; i++){
        console.log(i)
    }

    for(var i = 10; i > 2; i--){
        console.log(i)
    }

})

var headlines = ["headlines one", "headlines two"]

var headlinesString = ""

document.getElementById('updateBtn').addEventListener('click', function(event){
    event.preventDefault()
    for(i=0; i<headlines.length; i++){
        console.log(headlines[i])

        headlinesString = headlinesString + "<p>" + headlines[i] +"</p>"
        // console.log(headlinesString)
    }
    document.getElementById('updatedLines').innerHTML = headlinesString 


    // find average

    function average(a,b,c){
      var avgNumb =   (a * b * c) / 3
      console.log(avgNumb)
      return avgNumb
    }

   var testNumb = average(2, 8, 10)
   console.log(testNumb)
})



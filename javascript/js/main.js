//https://www.youtube.com/watch?v=zPHerhks2Vg&t=330s
var newItemCounter = 1;
var ourList = document.getElementById('our-list');
//var ourList = document.querySelector('#our-list'); //for modern browser
var ourButton = document.getElementById('our-button');
var ourHeadline = document.getElementById("our-headline");
var listItems = document.getElementById('our-list').getElementsByTagName('li');
//var listItems = document.querySelectorAll('our-list li'); //for modern browser


/*
// This code is for only the listItems that exist when the page is loaded.
// This doesn't work on the items that we create by clicking on the button.

for (i = 0; i < listItems.length; i++){
  listItems[i].addEventListener("click", activateItem);
}

function activateItem(){
  ourHeadline.innerHTML = this.innerHTML;

  for (i = 0; i < listItems.length; i++){
    listItems[i].classList.remove("active");
  }

  this.classList.add("active");
}
*/

// This code is also working when the new item created by clicking on button.

ourList.addEventListener("click", activateItem);

function activateItem(e){
  if (e.target.nodeName == "LI"){
    ourHeadline.innerHTML = e.target.innerHTML;
    for (i = 0; i < e.target.parentNode.children.length; i++){
      e.target.parentNode.children[i].classList.remove("active");
    }
    e.target.classList.add("active");
  }

}


ourButton.addEventListener("click", createNewItem);

function createNewItem(){
  ourList.innerHTML += "<li> Something New " + newItemCounter + "</li>";
  newItemCounter++;
}

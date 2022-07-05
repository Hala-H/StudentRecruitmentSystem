//SELECT ELEMENTS AND ASSIGN THEM TO VARS
var newTask = document.querySelector('#new-task');
var addTaskBtn = document.querySelector('#addTask');

var toDoUl = document.querySelector(".todo-list ul");
var completeUl =  document.querySelector(".complete-list ul");

//CREATE FUNCTIONS

//CREATING THE ACTUAL TASK LIST ITEM
var createNewTask = function(task){
 // eslint-disable-next-line no-console
 console.log("Creating task...");
  
  //SET UP THE NEW LIST ITEM
  var listItem = document.createElement("li"); //<li>
  var checkBox = document.createElement("input"); //checkbox
  var label = document.createElement("label"); // <label>
  
  
  //PULL THE INPUTED TEXT INTO LABEL
  label.innerText = task;
  
  //ADD PROPERTIES
  checkBox.type = "checkbox";
  
  //ADD ITEMS TO THE LI
  listItem.appendChild(checkBox);
  listItem.appendChild(label);
  //EVERYTHING PUT TOGETHER
  return listItem;  
  
};

//ADD THE NEW TASK INTO ACTUAL INCOMPLETE LIST
var addTask = function(){
// eslint-disable-next-line no-console
  console.log("Adding task...");
  //FOR CLARITY, GRAB THE INPUTTED TEXT AND STORE IT IN A VAR
  var listItem = createNewTask(newTask.value);
  //ADD THE NEW LIST ITEM TO LIST
  toDoUl.appendChild(listItem); 
  //CLEAR THE INPUT
  newTask.value="";
  
  //BIND THE NEW LIST ITEM TO THE INCOMPLETE LIST
  bindIncompleteItems(listItem, completeTask);

};

var completeTask = function(){
  
  //GRAB THE CHECKBOX'S PARENT ELEMENT, THE LI IT'S IN
  var listItem = this.parentNode;
  
  //CREATE AND INSERT THE DELETE BUTTON
  var deleteBtn = document.createElement("button"); // <button>
  deleteBtn.innerText ="X"; 
  deleteBtn.className = "btn-circle btn-sm bg-danger";
  listItem.appendChild(deleteBtn);
  
  //SELECT THE CHECKBOX FROM THE COMPLETED CHECKBOX AND REMOVE IT
  var checkBox = listItem.querySelector("input[type=checkbox]");
  checkBox.remove();
  
  //PLACE IT INSIDE THE COMPLETED LIST
  completeUl.appendChild(listItem); 
  
  //BIND THE NEW COMPLETED LIST
  bindCompleteItems(listItem, deleteTask);
  
};

//DELETE TASK FUNCTIONS
var deleteTask = function(){
// eslint-disable-next-line no-console
  console.log("Deleting task...");
  
  var listItem = this.parentNode;
  var ul = listItem.parentNode;
  
  ul.removeChild(listItem);
  
};

//A FUNCTION THAT BINDS EACH OF THE ELEMENTS THE INCOMPLETE LIST

var bindIncompleteItems = function(taskItem, checkBoxClick){
// eslint-disable-next-line no-console
  console.log("Binding the incomplete list...");
  
  //BIND THE CHECKBOX TO A VAR
  var checkBox = taskItem.querySelector("input[type=checkbox]");
  
  //SETUP EVENT LISTENER FOR THE CHECKBOX
  checkBox.onchange = checkBoxClick;  
}; 


//A FUNCTIONM THAT BINDS EACH OF THE ELEMTS IN THE COMPLETE LIST
var bindCompleteItems = function(taskItem, deleteButtonPress){
  // eslint-disable-next-line no-console
console.log("Binding the complete list...");
  
  //BIND THE DELETE BUTTON
  var deleteButton = taskItem.querySelector(".btn-circle btn-sm bg-danger");
   
  //WHEN THE DELETE BUTTIN IS PRESSED, RUN THE deleteTask function
  deleteButton.onclick = deleteButtonPress;
    
};


for(var i=0; i < toDoUl.children.length; i++) {
  bindIncompleteItems(toDoUl.children[i], completeTask);
}

for(var k=0; k < completeUl.children.length; k++) {
  bindCompleteItems(completeUl.children[k], deleteTask);
}

addTaskBtn.addEventListener("click", addTask);


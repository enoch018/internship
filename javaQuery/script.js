function saveData() {
  var data = "This is some data to save in local storage.";
  localStorage.setItem("myData", data);
  alert("Data saved to local storage.");
}

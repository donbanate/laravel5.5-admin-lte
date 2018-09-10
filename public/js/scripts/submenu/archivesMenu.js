function setActive() {
  if (location.pathname === "/archives") {
    let createMenu = document.getElementById("projects-menu");
    createMenu.className = "active";
  } else if (location.pathname === "/completed") {
    let listsMenu = document.getElementById("completed-projects-menu");
    listsMenu.className = "active";
  } else {
    console.warn("Submenu: className='active' is not applied");
  }
}

setActive();

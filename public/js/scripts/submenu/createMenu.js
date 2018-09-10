function setActive() {
  if (location.pathname === "/create") {
    let createMenu = document.getElementById("create-menu");
    createMenu.className = "active";
  } else if (location.pathname === "/user_lists") {
    let listsMenu = document.getElementById("lists-menu");
    listsMenu.className = "active";
  } else if (location.pathname === "/inactive_users") {
    let inactiveUsers = document.getElementById("user-inactive-menu");
    inactiveUsers.className = "active";
  } else {
    console.warn("Submenu: className='active' is not applied");
  }
}

setActive();

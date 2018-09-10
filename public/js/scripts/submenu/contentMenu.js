function setActive() {
  if (location.pathname === "/view_files") {
    let createMenu = document.getElementById("view-menu");
    createMenu.className = "active";
  } else if (location.pathname === "/upload_file") {
    let listsMenu = document.getElementById("upload-menu");
    listsMenu.className = "active";
  } else {
    console.warn("Submenu: className='active' is not applied");
  }
}

setActive();

function setActive() {
  if (
    location.pathname === "/view_files" ||
    location.pathname === "/upload_file"
  ) {
    let createMenu = document.getElementById("sidebar-my-files");
    let iconColor = document.getElementById("sidebar-my-files-color");
    let textColor = document.getElementById("sidebar-my-files-color-text");
    createMenu.className = "active"; // Sets My Files tab active
    iconColor.style.color = "#4a69bd";
    textColor.style.color = "#4a69bd";
  } else if (
    location.pathname === "/archives" ||
    location.pathname === "/completed"
  ) {
    let createMenu = document.getElementById("sidebar-archives");
    let iconColor = document.getElementById("sidebar-archives-color");
    let textColor = document.getElementById("sidebar-archives-color-text");
    createMenu.className = "active"; // Sets My Files tab active
    iconColor.style.color = "#b71540";
    textColor.style.color = "#b71540";
  } else if (
    location.pathname === "/create" ||
    location.pathname === "/user_lists" ||
    location.pathname === "/inactive_users"
  ) {
    let createMenu = document.getElementById("sidebar-manage-users");
    let iconColor = document.getElementById("sidebar-manage-users-color");
    let textColor = document.getElementById("sidebar-manage-users-color-text");
    createMenu.className = "active"; // Sets My Files tab active
    iconColor.style.color = "#1dd1a1";
    textColor.style.color = "#1dd1a1";
  } else if (
    location.pathname === "/profile" ||
    location.pathname === "/passwords"
  ) {
    let iconColor = document.getElementById("sidebar-user-settings-color");
    let textColor = document.getElementById("sidebar-user-settings-color-text");
    iconColor.style.color = "#c56cf0";
    textColor.style.color = "#c56cf0";
  } else {
    console.warn("Submenu: className='active' is not applied");
  }
  //   }else if (

  //   ){
  //     let createMenu = document.getElementById("sidebar-user-settings");
  //     let iconColor = document.getElementById("sidebar-user-settings-color");
  //     let textColor = document.getElementById("sidebar-user-settings-color-text");
  //     createMenu.className = "active"; // Sets My Files tab active
  //     iconColor.style.color = "#1dd1a1";
  //     textColor.style.color = "#1dd1a1";
  //
}

setActive();

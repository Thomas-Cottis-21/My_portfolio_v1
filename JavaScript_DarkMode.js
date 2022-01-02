let darkMode = localStorage.getItem("darkMode");
const switchTheme = document.getElementById("dark");
const enableDarkMode = () => {
    document.body.classList.add("switch-theme");
    document.getElementById("firstH3").classList.add("switchH3");
    document.getElementById("newPage").classList.add("switch-text");
    document.getElementById("menu-dwnl").classList.add("switch-menu-button");
    document.getElementById("menu-cont").classList.add("switch-menu-button");
    document.getElementById("menu-home").classList.add("switch-menu-button");
    localStorage.setItem("darkMode", "enabled");
};

const disableDarkMode = () => {
    document.body.classList.remove("switch-theme");
    document.getElementById("firstH3").classList.remove("switchH3");
    document.getElementById("newPage").classList.remove("switch-text");
    document.getElementById("menu-dwnl").classList.remove("switch-menu-button");
    document.getElementById("menu-cont").classList.remove("switch-menu-button");
    document.getElementById("menu-home").classList.remove("switch-menu-button");
    localStorage.setItem("darkMode", "disabled");
};

if (darkMode === "enabled") {
    enableDarkMode();
}

switchTheme.addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");
    
    if (darkMode !== "enabled") {
        enableDarkMode();
    }else{
        disableDarkMode();
    }
});
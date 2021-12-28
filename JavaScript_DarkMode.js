let darkMode = localStorage.getItem("darkMode");
const switchTheme = document.getElementById("darkness");

const enableDarkMode = () => {
    document.body.classList.add("switch-theme");
    localStorage.setItem("darkMode", "enabled");
};

const disableDarkMode = () => {
    document.body.classList.remove("switch-theme");
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
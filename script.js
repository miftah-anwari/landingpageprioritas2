const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const mobileMenu = document.getElementById("mobileMenu");

// Membuka menu
menuBtn.addEventListener("click", function () {
    mobileMenu.classList.add("active");
});

// Menutup menu
closeBtn.addEventListener("click", function () {
    mobileMenu.classList.remove("active");
});

// Menutup menu ketika klik di luar
document.addEventListener("click", function (event) {

    if (
        !mobileMenu.contains(event.target) &&
        !menuBtn.contains(event.target)
    ) {
        mobileMenu.classList.remove("active");
    }
;
})
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("siderbar-toggle-icon")
    .addEventListener("click", function (event) {
      event.preventDefault();
      var x = document.querySelector("#aside-container-main");
      x.classList.toggle("aside-counter");
      var y = document.querySelector(".content-wrapper");
      y.classList.toggle("content-counter");
    });
});

// for cross on small size

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("aside-header-cross")
    .addEventListener("click", function () {
      var x = document.querySelector("#aside-container-main");
      x.classList.remove("aside-counter");
      var y = document.querySelector(".content-wrapper");
      y.classList.remove("content-counter");
    });
});

// dropdown
document.addEventListener("DOMContentLoaded", function () {
  const profileIcon = document.querySelector(".profile-icon");
  const dropdownContent = document.getElementById("dropdownContent");

  profileIcon.addEventListener("click", function () {
    dropdownContent.style.display =
      dropdownContent.style.display === "block" ? "none" : "block";
  });

  // Close the dropdown when clicking outside of it
  document.addEventListener("click", function (event) {
    if (!event.target.closest(".user-profile")) {
      dropdownContent.style.display = "none";
    }
  });
});

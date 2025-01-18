document.addEventListener("DOMContentLoaded", () => {
  const dropdown = document.querySelector(".mi-be-occupation-field");
  const dropdownMenu = document.querySelector(".mi-be-occupation-dropdown");

  dropdown.addEventListener("click", () => {
    dropdownMenu.classList.toggle("open");
  });

  document.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) {
      dropdownMenu.classList.remove("open");
    }
  });
});

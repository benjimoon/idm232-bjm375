const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav_links");
const links = document.querySelectorAll(".nav_links li");
const introText = document.querySelector(".intro-text");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("nav-open");
  document.body.classList.toggle("hide");
  document.querySelector("html").classList.toggle("hide");
});
links.forEach((link) => {
  link.addEventListener("click", () => {
    navLinks.classList.toggle("nav-open");
    document.body.classList.remove("hide");
    document.querySelector("html").classList.remove("hide");
  });
});

function initTinyMce() {

  
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough| align lineheight | numlist bullist indent outdent',
});
  
}  

initTinyMce();





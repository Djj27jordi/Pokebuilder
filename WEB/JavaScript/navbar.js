document.addEventListener("DOMContentLoaded", () => {
  const currentPath = window.location.pathname.split("/").pop(); // Obtenim el nom del fitxer

  document.querySelectorAll("nav a").forEach(link => {
    const linkPath = link.getAttribute("href").split("/").pop();
    if (linkPath === currentPath) {
      link.classList.add("active");
    }
  });
});

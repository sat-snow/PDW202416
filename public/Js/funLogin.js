function LoginRedirect(event) {
  event.preventDefault(); // Evita que el formulario recargue la página
  var usuario = document.getElementById("InpUser").value;
  var password = document.getElementById("InpPassword").value;
  console.table({ usuario, password });
}

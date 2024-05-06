function index() {
    var admin = document.getElementById("admin").value;
    var password = document.getElementById("input_password").value;
    if ((admin === "dicky123" && password === "dicky123") || (admin === "admin123" && password === "admin123")) {
        window.location.href = "form.php";
        alert("Berhasil Login");
    } else {
        alert("Login Gagal, Periksa Username Dan Password Anda!");
    }
}

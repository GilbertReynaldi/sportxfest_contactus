const form = document.querySelector("form");

form.addEventListener("submit", function(event) {

    const nama = document.querySelector('input[placeholder="Nama"]').value;
    const email = document.querySelector('input[placeholder="Email"]').value;
    const subject = document.querySelector('input[placeholder="Subject"]').value;
    const pesan = document.querySelector('textarea').value;

    if (nama === "" || email === "" || subject === "" || pesan === "") {
        event.preventDefault();
        alert("Semua field harus diisi!");
        return; 
    }

    if (!email.includes("@")) {
        event.preventDefault();
        alert("Email tidak valid!");
        return;
    }
});


const contactItems = document.querySelectorAll(".contact-item");

contactItems.forEach(function(item) {
    item.addEventListener("click", function() {
        alert("Kamu klik: " + item.innerText);
    });
});
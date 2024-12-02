document.getElementById("formulario").addEventListener("submit", send_data)

function send_data(e) {
    const xhr = new XMLHttpRequest();

    xhr.onload = function() {
        const resp = document.getElementById("resp")

        resp.innerText = this.response;
    }

    /* NOTE: these three lines are important!!! */
    xhr.open("POST", "../php/index.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("name=banana&passs=passwd123");

    e.preventDefault();
}

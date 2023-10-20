const refreshPage = () => {
    location.reload()
}

function validate() {
    const input = document.getElementById("meep").value
    if (input === null || input === "") {
        alert("PUT SOMETHING IN THE DAMN BOX")
        window.location.href = "./index.php"
        return false
    }
    return true
}

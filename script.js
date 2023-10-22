const refreshPage = () => {
    location.reload()
}

function validate() {
    const input = document.getElementById("meep").value
    if (input === null || input === "") {
        alert("Box cannot be empty good sir/madam")
        window.location.href = "./index.php"
        return false
    }
    return true
}

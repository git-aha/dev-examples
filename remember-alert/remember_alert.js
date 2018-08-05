function rememberAlert() {
    var accepted = sessionStorage.getItem("alerted") || "";
    console.log(accepted);

    if (accepted != "yes") {
        console.log("session storage nicht gesetzt");
        alert("Hier gibt es Cookies und Sie sind damit einverstanden.");
        sessionStorage.setItem("alerted", "yes");
        console.log(accepted);
    }
    else {
        console.log("session storage ist gesetzt.");
    }
}

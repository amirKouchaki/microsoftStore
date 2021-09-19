const signUpBtn = document.querySelector("button")
const formElement = document.querySelector("form")
const url = "http://127.0.0.1:8000/register"
formElement.addEventListener('submit',sendData)
function sendData(e){
    e.preventDefault();
    const http = new XMLHttpRequest()

    let data = {
        name: 'amir',
        last: 'kouchaki'
    }
    data = JSON.stringify(data)

    http.open("Post", url)
    http.setRequestHeader('content-type','application/json')
    http.setRequestHeader('X-CSRF-TOKEN',document.getElementById('csrf').getAttribute('content'))
    http.send(data)
}

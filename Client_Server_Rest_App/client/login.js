const login = document.querySelector(".login")


login.addEventListener('click',envoyer)

function envoyer(){
    const formData = new FormData(document.querySelector("form"))
    var status
    fetch("http://localhost/Client_Server_Rest_APP/server/Model.php",{
        method : 'POST',
        body : formData
    }
    
    ).then( res => {
              status = res.status
              return res.text() 
          
          }
  
    ).then( data => {
        alert(data)
        if(status == 200){
            alert("SUCESS")
            location.href = "./index.html"
        }
    })
    .catch(err => {alert(err)})
  


}
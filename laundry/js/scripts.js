function Logout(){
    if(confirm('log out?')){
        location.href="include/process/logout.php";
    }
}

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})


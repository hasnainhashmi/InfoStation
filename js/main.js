setTimeout(() => {
    const navigation = document.querySelector(".links");
    let menu = document.querySelector(".menu");

    menu.addEventListener("click", () => {
        navigation.style.setProperty("--childenNumber", navigation.children.length);

        navigation.classList.toggle("active");
        menu.classList.toggle("active");
    });


}, 1000)

window.addEventListener('scroll', function () {
    let scroll = this.scrollY;
    if (scroll > 0) {
        document.querySelector("header").classList.add("shadow-active");
    } else {
        document.querySelector("header").classList.remove("shadow-active");
    }
});


function openOtpForm()
{
    let email = document.querySelector("#email").value;
    fetch(window.location.origin+"/infostation.com/sendOtp.php?email="+email)
    .then(response => response.json())
    .then(data => console.log(data));
    document.querySelector("form .form-1").style.display="none";
    document.querySelector("form .form-2").style.display="block";

}

function checkOtp()
{
    let otp = document.querySelector("#otp").value;
    fetch(window.location.origin+'/infostation.com/checkOtp.php?otp='+otp)
    .then(response => response.json())
    .then(data => {
        if(data == true)
        {
            document.querySelector("form").submit();
        }
        else{
            document.querySelector(".form-2 p").style.display="block";
        }
    });
}


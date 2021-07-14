$(document).ready(function(){
 $("#submit").click(function(){
    // alert("submit button clicked");
    let em = $("#email").val();
    let pw = $("#password").val();
    mydata = { email:em, password:pw };
    // console.log(mydata); 

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data){
            // console.log(data);
            $('#form')[0].reset();
        },
        error: function(){

        }
    });
});
});
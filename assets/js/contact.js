$("#cofounderform-submit").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var email = $("#cofounder-email").val();
 
    $.ajax({
        type: "POST",
        url: "contactcofounder.php",
        data: "cofounder email=" + email,

        success : function(text){
            if (text == "success"){
                formSuccess();
            }
            else if(text == "invalid"){
            	formError();
            }
        }
    });
}
function formSuccess(){
    $( "#success_message_cofounder" ).removeClass( "hidden" );
}
function formError(){
    $( "#error_message_cofounder" ).removeClass( "hidden" );
}
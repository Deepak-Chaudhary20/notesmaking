// $("#commentform").submit(function(event){ 
//     //prevent default php processing
//     event.preventDefault();
//     //collect user inputs
//     var datatopost = $(this).serializeArray();
// 	console.log(datatopost);
// 	window.alert('Hello World');
//     //send them to signup.php using AJAX
//     $.ajax({ // This is an inbuilt ajax function.
//         url: "comment.php",
//         type: "POST",
//         data: datatopost,
//         success: function(data){
//             if(data){
//                 $("#commentmessage").html(data);
//             }
//         },
//         error: function(){
//             $("#commentmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
//         }
    
//     });

// });
console.log("hello World");
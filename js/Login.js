$("#loginForm").on("submit", function(e) {
    e.preventDefault();
    
    // Get the username and password from the input fields
    let username = $("#username").val();
    let password = $("#password").val();
  
    // Create an object to send as data in the AJAX request
    let sendingData = {
        "action": "login",
        "username": username,
        "password": password
    };
  
    // Send the AJAX request to the login.php file
    $.ajax({
        method: "POST",
        dataType: "json",
        url: "../Api/login.php",
        data: sendingData,
        success: function(data) {
            let status = data.status;
            let response = data.data;
  
            if (status) {
                // If login is successful, redirect to the appropriate dashboard
                window.location.href = data.redirect;
            } else {
                // If login fails, show an error message using the SweetAlert library.
                Swal.fire(
                    'Error!',
                    response,
                    'error'
                );
                $("#password").val("");
            }
        },
        error: function(data) {
            // Handle error here
            // This part of the code will be executed if the AJAX request encounters an error.
        }
    });
  });
  
  
  
  
  
  
  
  
  
  
  
  // $("#loginForm").on("submit", function(e) {
  //     e.preventDefault();
      
  //     // Get the username and password from the input fields
  //     let username = $("#username").val();
  //     let password = $("#password").val();
  
      
    
  //     // Create an object to send as data in the AJAX request
  //     let sendingData = {
  //       "action": "login",
  //       "username": username,
  //       "password": password
  //     };
    
  //     // Send the AJAX request to the login.php file
  //     $.ajax({
  //       method: "POST",
  //       dataType: "json",
  //       url: "../Api/login.php",
  //       data: sendingData,
  //       success: function(data) {
  //         let status = data.status;
  //         let response = data.data;
    
  //         if (status) {
  //           // If login is successful, you can perform actions like redirecting to the dashboard or showing a success message.
  //           window.location.href = "../View/Dashboard.php";
    
  //         } else {
  //           // If login fails, show an error message using the SweetAlert library.
  //           Swal.fire(
  //             'Error!',
  //             response,
  //             'error'
  //           );
  //           $("#password").val("");
  //           // Alternatively, you can display an error message on the login form itself using the displayMessage function.
  //           // displayMessage("error", response);
  //         }
  //       },
  //       error: function(data) {
  //         // Handle error here
  //         // This part of the code will be executed if the AJAX request encounters an error.
  //       }
  //     });
  //   });
    
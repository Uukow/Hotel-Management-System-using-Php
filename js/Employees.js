loadData();
fillJobs();
let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#EmployeeModal").modal("show");
});

$("#employeeForm").on("submit", function(event) {
  event.preventDefault();

  let name = $("#name").val();
  let possition = $("#possition").val();
  let sallary = $("#sallary").val();
  let phone = $("#phone").val();
  let email = $("#email").val();
  let location = $("#location").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "name": name,
      "possition": possition,
      "sallary": sallary,
      "phone": phone,
      "email": email,
      "location": location,
      "action": "registerEmployees"
    };
  } else {
    sendingData = {
      "id": id,
      "name": name,
      "possition": possition,
      "sallary": sallary,
      "phone": phone,
      "email": email,
      "location": location,
      "action": "update_employees"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Employees.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        Swal.fire(
          'Good job!',
          response,
          'success'
        )
        btnAction = "Insert";
        setTimeout(function() {
          $("#EmployeeModal").modal("hide"); 
          $("#employeeForm")[0].reset();
        }, 3000);
        loadData();
        DisplayData();
      } else { 
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: response
        })
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
});

// function fillJobs() {
//   let sendingData = {
//     "action": "read_all_hotel_jobs",
//   };

//   $.ajax({
//     method: "POST",
//     dataType: "json",
//     url: "../Api/Employees.php",
//     data: sendingData,
//     success: function(data) {
//       let status = data.status;
//       let response = data.data;
//       let positions = [];

//       if (status) {
//         response.forEach(res => {
//           let resPositions = res.split(","); // Split the data by comma
//           resPositions.forEach(position => {
//             positions.push(position.trim()); // Trim any whitespace and add to positions array
//           });
//         });
//         $("#possition").val(positions.join(", ")); // Set the input value with positions separated by commas
//       } else {
//         displayMessage("error", response);
//       }
//     },
//     error: function(data) {
//       // Handle error here
//     }
//   });
// }


function fillJobs() {
  let sendingData = {
    "action": "read_all_hotel_jobs",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Employees.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;
      let html = "";

      if (status) {
          
        response.forEach( res => {

          html += `<option value="${res}">${res}</option>`
          
          
        })
        $("#possition").append(html);
        
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}


    
// function displayMessage(type, message) {
//   let success = document.querySelector("#alert-success");
//   let error = document.querySelector("#alert-danger");

//   if (type === "success") {
//     error.classList = "alert alert-danger d-none";
//     success.classList = "alert alert-success";
//     success.innerHTML = message;

//     setTimeout(function() {
//       $("#EmployeeModal").modal("hide");
//       success.classList = "alert alert-success d-none";
//       $("#employeeForm")[0].reset();
//     }, 3000);
//   } else {
//     error.classList = "alert alert-danger";
//     error.innerHTML = message;
//     success.classList = "alert alert-success d-none";
//   }
// }


function loadData() {
  $("#EmployeesTable tbody").html('');
  let sendingData = {
    "action": "get_employees",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Employees.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;
      let html = "";

      if (status) {
        response.forEach(res => {
          let tr = "<tr>";
          for (let r in res) {
            tr += `<td>${res[r]}</td>`;
          }

          tr += `<td><a class="btn btn-info update_info" data-update-id="${res['Id']}"><i class="fa-solid fa-pen" style="color:#fff"></i></a>&nbsp;&nbsp;<a class="btn btn-danger delete_info" data-delete-id="${res['Id']}"><i class="fa-solid fa-trash" style="color:#fff"></i></a></td>`;
          tr += "</tr>";

          html += tr;
        });
        $("#EmployeesTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchEmployeeInfo(id) {
  let sendingData = {
    "action": "get_employees_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Employees.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['Id']);
        $("#name").val(response['Name']);
        $("#possition").val(response['Possition']);
        $("#sallary").val(response['sallary']);
        $("#phone").val(response['Phone']);
        $("#email").val(response['Email']);
        $("#location").val(response['Location']);
        $("#EmployeeModal").modal("show");
      } else {
        // displayMessage("error", response);
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: response
        })
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function deleteEmployeeInfo(id) {
  let sendingData = {
    "action": "delete_employees_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Employees.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        Swal.fire(
          'Good job!',
          response,
          'success'
        );
        loadData();
      } else {
        Swal.fire(
          'Error!',
          response,
          'Error'
        );
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

$("#EmployeesTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchEmployeeInfo(id);
});

$("#EmployeesTable").on('click', "a.delete_info", function() {
  let id = $(this).data('delete-id');


  Swal.fire({
    title: 'Are you sure?',
    text: "if you want to delete this employee Check",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        deleteEmployeeInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })

  // deleteEmployeeInfo(id);
});







// Display as card


function displayMessage(type, message) {
  let alertClass = '';
  
  if (type === 'success') {
    alertClass = 'alert-success';
  } else if (type === 'error') {
    alertClass = 'alert-danger';
  } else if (type === 'info') {
    alertClass = 'alert-info';
  }

  let alertHtml = `
    <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
      ${message}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  `;

  $("#messageContainer").html(alertHtml);
}

function DisplayData() {
  $("#EmployeesContainer").html('');
  let sendingData = {
    "action": "get_employees",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Employees.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        response.forEach(res => {
          let card = `
          <div class="col-md-6 col-xxl-3" >
                <div class="card employee-card">
                  <div class="card-body">
                    <div class="text-right">

                      <h4 class="mt-3 my-1">${res['Name']} <i class="mdi mdi-check-decagram text-success"></i></h4>
                      <hr class="bg-dark-lighten my-3">

                      <h4 class="mb-0 text-primary"><i class="mdi mdi-email-outline me-1"></i>${res['Possition']}</h4>
                      <hr class="bg-dark-lighten my-3">

                      <h5 class="mb-0 text-muted"><i class="mdi mdi-email-outline me-1"></i>${res['Phone']}</h5>
                      <hr class="bg-dark-lighten my-3">

                      <h5 class="mb-0 text-muted"><i class="mdi mdi-email-outline me-1"></i>${res['Email']}</h5>
                      <hr class="bg-dark-lighten my-3">

                      <h5 class="mb-0 text-muted"><i class="mdi mdi-email-outline me-1"></i>${res['Location']}</h5>

                      <br>
                      <a class="btn btn-info update_info" data-update-id="${res['Id']}"> Update </a>&nbsp;&nbsp;<a class="btn btn-danger delete_info" data-delete-id="${res['Id']}"> Delete </a>

                    </div>
                  </div>
                </div>
                </div>
              `;
              $("#EmployeesContainer").append(card);
        });
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      displayMessage("error", "An error occurred while fetching employee data.");
    }
  });
}




$("#EmployeesContainer").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchEmployeeInfo(id);
});

$("#EmployeesContainer").on('click', "a.delete_info", function() {
  let id = $(this).data('delete-id');


  Swal.fire({
    title: 'Are you sure?',
    text: "if you want to delete this employee Check",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        deleteEmployeeInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })

  // deleteEmployeeInfo(id);
});
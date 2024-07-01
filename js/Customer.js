fillTypes();
loadData();
let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#CustomerModal").modal("show");
});

$("#customerForm").on("submit", function(event) {
  event.preventDefault();

  let cTitle = $("#cTitle").val();
  let cName = $("#cName").val();
  let cEmail = $("#cEmail").val();
  let cCountry = $("#country").val();
  let cPhone = $("#cPhone").val();
  let cTypeRoom = $("#cTypeRoom").val();
  let cBedding = $("#cBedding").val();
  let cNumRoom = $("#cNumRoom").val();
  let cMeal = $("#cMeal").val();
  let cIn = $("#cIn").val();
  let cOut = $("#cOut").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "cTitle": cTitle,
      "cName": cName,
      "cEmail": cEmail,
      "cCountry": cCountry,
      "cPhone": cPhone,
      "cTypeRoom": cTypeRoom,
      "cBedding": cBedding,
      "cNumRoom": cNumRoom,
      "cMeal": cMeal,
      "cIn": cIn,
      "cOut": cOut,
      "action": "registerCustomer"
    };
  } else {
    sendingData = {
      "id": id,
      "cTitle": cTitle,
      "cName": cName,
      "cEmail": cEmail,
      "cCountry": cCountry,
      "cPhone": cPhone,
      "cTypeRoom": cTypeRoom,
      "cBedding": cBedding,
      "cNumRoom": cNumRoom,
      "cMeal": cMeal,
      "cIn": cIn,
      "cOut": cOut,
      "action": "update_customer"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Customer.php",
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
          $("#CustomerModal").modal("hide"); 
          $("#customerForm")[0].reset();
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
  //   error: function(data) {
  //     // Handle error here
  //   }
  // });
  error: function(data) {
    let responseJSON = data.responseJSON;

    if (responseJSON && responseJSON.errorType === "MySQLDuplicateEntry") {
      // Extract the MySQL error message
      let errorMessage = responseJSON.errorMessage;

      // Check if the error message indicates a foreign key violation
      if (errorMessage.includes('foreign key constraint')) {
        // Check if the error message contains information about the foreign key constraint violation 
        if (errorMessage.includes('your_foreign_key_name')) {
          Swal.fire({
            icon: 'error',
            title: 'Duplicate Entry',
            text: 'Cannot insert duplicate entry for foreign key. The related room does not exist.',
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Duplicate Entry',
            text: errorMessage,
          });
        }
      } else {
        // Handle other types of errors
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'An error occurred while processing your request.',
        });
      }
    } else {
      // Handle other types of errors
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'An error occurred while processing your request.',
      });
    }
  }
});
});


function fillTypes() {
  let sendingData = {
    "action": "read_all_room_types",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Customer.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;
      let html = "";

      if (status) {
          
        response.forEach( res => {

          html += `<option value="${res}">${res}</option>`
          
          
        })
        $("#cTypeRoom").append(html);
        
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
  $("#CustomerTable tbody").html('');
  let sendingData = {
    "action": "get_customer",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Customer.php",
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
        $("#CustomerTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchCustomerInfo(id) {
  let sendingData = {
    "action": "get_customer_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Customer.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['Id']);
        $("#cTitle").val(response['Title']);
        $("#cName").val(response['FullName']);
        $("#cEmail").val(response['Email']);
        $("#country").val(response['Nationality']);
        $("#cPhone").val(response['Phone']);
        $("#cTypeRoom").val(response['TypeOfRoom']);
        $("#cBedding").val(response['BeddingType']);
        $("#cNumRoom").val(response['NoOfRooms']);
        $("#cMeal").val(response['MealPlan']);
        $("#cIn").val(response['CheckIn']);
        $("#cOut").val(response['CheckOut']);
        $("#CustomerModal").modal("show");
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

function deleteCustomerInfo(id) {
  let sendingData = {
    "action": "delete_customer_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Customer.php",
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

$("#CustomerTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchCustomerInfo(id);
});

$("#CustomerTable").on('click', "a.delete_info", function() {
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
        deleteCustomerInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })

  // deleteEmployeeInfo(id);
});







loadData();

let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#RoomModal").modal("show");
  
});

$("#roomsForm").on("submit", function(event) {
  event.preventDefault();

  
  let rName = $("#rName").val();
  let rPayment = $("#rPayment").val();
  let rStatus = $("#rStatus").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "rName": rName,
      "rPayment": rPayment,
      "rStatus": rStatus,
      "action": "registerRooms"
    };
  } else {
    sendingData = {
      "id": id,
      "rName": rName,
      "rPayment": rPayment,
      "rStatus": rStatus,
      "action": "update_rooms"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Rooms.php",
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
          $("#RoomModal").modal("hide"); 
          $("#roomsForm")[0].reset();
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



function fillTypes() {
  let sendingData = {
    "action": "read_all_room_types",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Rooms.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;
      let html = "";

      if (status) {
          
        response.forEach( res => {

          html += `<option value="${res}">${res}</option>`
          
          
        })
        $("#type").append(html);
        
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
  $("#RoomsTable tbody").html('');
  let sendingData = {
    "action": "get_rooms",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Rooms.php",
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

          tr += `<td><a class="btn btn-info update_info" data-update-id="${res['id']}"><i class="fa-solid fa-pen" style="color:#fff"></i></a>&nbsp;&nbsp;<a class="btn btn-danger delete_info" data-delete-id="${res['id']}"><i class="fa-solid fa-trash" style="color:#fff"></i></a></td>`;
          tr += "</tr>";

          html += tr;
        });
        $("#RoomsTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchRoomsInfo(id) {
  let sendingData = {
    "action": "get_rooms_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Rooms.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['id']);
        $("#rName").val(response['RoomName']);
        $("#rPayment").val(response['RoomPayment']);
        $("#rStatus").val(response['RoomStatus']);
        $("#RoomModal").modal("show");
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

function deleteRoomsInfo(id) {
  let sendingData = {
    "action": "delete_rooms_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Rooms.php",
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

$("#RoomsTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchRoomsInfo(id);
});

$("#RoomsTable").on('click', "a.delete_info", function() {
  let id = $(this).data('delete-id');


  Swal.fire({
    title: 'Are you sure?',
    text: "if you want to delete this Room Check",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        deleteRoomsInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })

  // deleteEmployeeInfo(id);
});







// Display as card


// function displayMessage(type, message) {
//   let alertClass = '';
  
//   if (type === 'success') {
//     alertClass = 'alert-success';
//   } else if (type === 'error') {
//     alertClass = 'alert-danger';
//   } else if (type === 'info') {
//     alertClass = 'alert-info';
//   }

//   let alertHtml = `
//     <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
//       ${message}
//       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">&times;</span>
//       </button>
//     </div>
//   `;

//   $("#messageContainer").html(alertHtml);
// }

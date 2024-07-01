loadData();

let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#CompusModal").modal("show");
  
});

$("#compusForm").on("submit", function(event) {
  event.preventDefault();

  
  let cName = $("#cName").val();
  let location = $("#location").val();
  let phone = $("#phone").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "cName": cName,
      "location": location,
      "phone": phone,
      "action": "registerCompus"
    };
  } else {
    sendingData = {
      "id": id,
      "cName": cName,
      "location": location,
      "phone": phone,
      "action": "update_compus"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Compus.php",
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
          $("#CompusModal").modal("hide"); 
          $("#compusForm")[0].reset();
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
  $("#CompusTable tbody").html('');
  let sendingData = {
    "action": "get_compus",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Compus.php",
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
        $("#CompusTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchCompusInfo(id) {
  let sendingData = {
    "action": "get_compus_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Compus.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['id']);
        $("#cName").val(response['Name']);
        $("#location").val(response['Location']);
        $("#phone").val(response['Phone']);
        $("#CompusModal").modal("show");
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

function deleteCompusInfo(id) {
  let sendingData = {
    "action": "delete_compus_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Compus.php",
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

$("#CompusTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchCompusInfo(id);
});

$("#CompusTable").on('click', "a.delete_info", function() {
  let id = $(this).data('delete-id');


  Swal.fire({
    title: 'Are you sure?',
    text: "if you want to delete this Compus Check",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        deleteCompusInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })
});





loadData();

let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#typeModal").modal("show");
  
});

$("#typeForm").on("submit", function(event) {
  event.preventDefault();

  
  let typeRoom = $("#typeRoom").val();
  let description = $("#description").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "typeRoom": typeRoom,
      "description": description,
      "action": "registerRoomType"
    };
  } else {
    sendingData = {
      "id": id,
      "typeRoom": typeRoom,
      "description": description,
      "action": "update_room_type"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/RoomType.php",
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
          $("#typeModal").modal("hide"); 
          $("#typeForm")[0].reset();
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





function loadData() {
  $("#TypeTable tbody").html('');
  let sendingData = {
    "action": "get_room_type",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/RoomType.php",
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
        $("#TypeTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchTypeInfo(id) {
  let sendingData = {
    "action": "get_room_type_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/RoomType.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['id']);
        $("#typeRoom").val(response['Type']);
        $("#description").val(response['Discription']);
        $("#typeModal").modal("show");
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

function deleteTypeInfo(id) {
  let sendingData = {
    "action": "delete_room_type_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/RoomType.php",
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

$("#TypeTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchTypeInfo(id);
});

$("#TypeTable").on('click', "a.delete_info", function() {
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
        deleteTypeInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })

});






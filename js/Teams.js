loadData();
let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#teamsModal").modal("show");
});

$("#teamsForm").on("submit", function(event) {
  event.preventDefault();

  let name = $("#name").val();
  let stId = $("#stId").val();
  let gender = $("#gender").val();
  let phone = $("#phone").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "name": name,
      "stId": stId,
      "gender": gender,
      "phone": phone,
      "action": "register_teams"
    };
  } else {
    sendingData = {
      "id": id,
      "name": name,
      "stId": stId,
      "gender": gender,
      "phone": phone,
      "action": "update_teams"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Teams.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        displayMessage("success", response);
        btnAction = "Insert";
        loadData();
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
});

function displayMessage(type, message) {
  let success = document.querySelector("#alert-success");
  let error = document.querySelector("#alert-danger");

  if (type === "success") {
    error.classList = "alert alert-danger d-none";
    success.classList = "alert alert-success";
    success.innerHTML = message;

    setTimeout(function() {
      $("#teamsModal").modal("hide");
      success.classList = "alert alert-success d-none";
      $("#teamsForm")[0].reset();
    }, 3000);
  } else {
    error.classList = "alert alert-danger";
    error.innerHTML = message;
    success.classList = "alert alert-success d-none";
  }
}

function loadData() {
  $("#teamsTable tbody").html('');
  let sendingData = {
    "action": "get_teams",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Teams.php",
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
        $("#teamsTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchTeamInfo(id) {
  let sendingData = {
    "action": "get_teams_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Teams.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['id']);
        $("#name").val(response['StudentName']);
        $("#stId").val(response['StudentId']);
        $("#gender").val(response['Gender']);
        $("#phone").val(response['Phone']);
        $("#teamsModal").modal("show");
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function deleteTeamInfo(id) {
  let sendingData = {
    "action": "delete_teams_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/Teams.php",
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

$("#teamsTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchTeamInfo(id);
});

$("#teamsTable").on('click', "a.delete_info", function() {
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
        deleteTeamInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })


});
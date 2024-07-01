loadData();

let btnAction = "Insert";

$("#AddNew").on("click", function() {
  $("#JobModal").modal("show");
  
});

$("#jobsForm").on("submit", function(event) {
  event.preventDefault();

  
  let jobTitle = $("#jobTitle").val();
  let id = $("#update_id").val();

  let sendingData = {};

  if (btnAction === "Insert") {
    sendingData = {
      "jobTitle": jobTitle,
      "action": "registerJobs"
    };
  } else {
    sendingData = {
      "id": id,
      "jobTitle": jobTitle,
      "action": "update_jobs"
    };
  }

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/jobs.php",
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
          $("#JobModal").modal("hide"); 
          $("#jobsForm")[0].reset();
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
  $("#JobsTable tbody").html('');
  let sendingData = {
    "action": "get_jobs",
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/jobs.php",
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
        $("#JobsTable tbody").html(html);
      } else {
        displayMessage("error", response);
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
}

function fetchJobsInfo(id) {
  let sendingData = {
    "action": "get_jobs_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/jobs.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status) {
        btnAction = "Update";
        $("#update_id").val(response['id']);
        $("#jobTitle").val(response['jobTitle']);
        $("#JobModal").modal("show");
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

function deleteJobsInfo(id) {
  let sendingData = {
    "action": "delete_jobs_info",
    "id": id
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/jobs.php",
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

$("#JobsTable").on('click', "a.update_info", function() {
  let id = $(this).data('update-id');
  fetchJobsInfo(id);
});

$("#JobsTable").on('click', "a.delete_info", function() {
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
        deleteJobsInfo(id),
        'Your file has been deleted.',
        'success'
      )
    }
  })

  // deleteEmployeeInfo(id);
});






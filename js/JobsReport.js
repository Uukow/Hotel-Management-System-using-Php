

$("#jobForm").on("submit", function(event) {
  event.preventDefault();


  let sendingData = {

    "action": "get_job_report"
  };

  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../Api/jobs.php",
    data: sendingData,
    success: function(data) {
      let status = data.status;
      let response = data.data;

      if (status && response.length > 0) {
        let thead = "<tr>";
        let tbody = "";

        // Get the keys from the first response object
        let keys = Object.keys(response[0]);

        // Build the table header with the keys
        keys.forEach(key => {
          thead += `<th>${key}</th>`;
        });

        thead += "</tr>";

        // Build the table rows with data
        response.forEach(res => {
          let row = "<tr>";
          keys.forEach(key => {
            row += `<td>${res[key]}</td>`;
          });
          row += "</tr>";
          tbody += row;
        });

        // Append the built HTML to the table
        $("#jobTable thead").html(thead);
        $("#jobTable tbody").html(tbody);
      } else {
        displayMessage("error", "No data found.");
      }
    },
    error: function(data) {
      // Handle error here
    }
  });
});


$("#print_statment").on("click",function(){
  printStatement();

});

function printStatement() {
  let printArea = document.querySelector("#print_area");
  let newWindow = window.open("");
  newWindow.document.write(`<html><head><title></title>`); // Fixed typo: "title" was spelled as "tite"

  newWindow.document.write(`<style media="print"> 
    /* Added a space between "media" and "=" for better readability */
    /* Your CSS styles for printing go here */

    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body{
      font-family: 'Poppins', sans-serif;
    }

    table{
      width: 100%;
    }

    th {
      background-color: #000795 !important;
      border: 1px solid rgba(134,188,37,1);
      font-weight: 700 !important;
      text-align: center;
      color: white;
      font-size: 22px !important;
      
      &:first-of-type {
        text-align: left; 
      }
    }
  }
  
  // Set these items to display: block for narrow viewports
  tbody,
  tr,
  th,
  td {
    display: block;
    padding: 0;
    text-align: left;
    white-space: normal;
  }
  
  tr {   
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-row; 
    }
  }
  
  th,
  td {
    padding: .5em;
    vertical-align: middle;





  </style>`);

  newWindow.document.write(`</head><body>`);
  newWindow.document.write(printArea.innerHTML);
  newWindow.document.write(`</body></html>`);

  newWindow.print();
  newWindow.close();
}



function exportToExcel() {
  const table = document.getElementById('jobTable');
  const worksheet = XLSX.utils.table_to_sheet(table);

  // Create a new workbook and add the worksheet to it
  const workbook = XLSX.utils.book_new();
  XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

  // Convert the workbook to a binary Excel file (xlsx format)
  const excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

  // Save the Excel file with FileSaver.js (you need to include FileSaver.js in your HTML)
  const blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
  saveAs(blob, 'output.xlsx');
}

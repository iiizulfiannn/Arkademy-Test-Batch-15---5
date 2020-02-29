<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <!-- CSS Custom -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Title Web -->
  <title>Arkademy</title>

  <style>
    .search::placeholder {
      color: white !important;
      opacity: 1 !important;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top p-0 navbar-dark bg-light shadow">
    <!-- Logo -->
    <a class="navbar-brand ml-5 py-0" href="#"><img src="assets/images/logo.png" width="110" height="77" alt=""></a>    
    <!-- Search, Add Button -->
    <form class="form-inline">
      <input style="background-color: gray; color: white;" class="search form-control form-rounded px-3 mr-5" type="search" size="100" placeholder="Search...">
      <button class="btn btn-warning btn-lg form-rounded px-5 mx-5 text-white shadow" id="btnAdd" type="button">ADD</button>
    </form>
  </nav>

  <!-- Modal Add-->
  <div class="modal fade" id="add_modal">
    <div class="modal-dialog modal-lg modal-dialog-centered form-rounded-1" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title ml-4">ADD</h1>
          <button type="button" class="close mr-4" data-dismiss="modal" aria-label="Close">
            <h1><span aria-hidden="true">&times;</span></h1>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <form >
            
            <!-- Cahier Name -->
            <div class="form-group garis-bawah mb-4">
              <select  id="add_id_cashier" name="add_id_cashier" class="form-control form-control-lg none-border">
                <!-- Container Show Option Cashier -->                
              </select>
            </div>
            <!-- Category Name -->
            <div class="form-group garis-bawah mb-4">
              <select id="add_id_category" name="add_id_category" class="form-control form-control-lg none-border">
                <!-- Container Show Option Category -->
              </select>
            </div>
            <!-- Product Name -->
            <div class="form-group garis-bawah mb-4">
              <input type="text" id="add_name" name="add_name" class="form-control form-control-lg none-border" placeholder="Name Food" required> <!--required-->
            </div>
            <!-- Price Product -->
            <div class="form-group garis-bawah mb-4">
              <input type="text" id="add_price" name="add_price" class="form-control form-control-lg none-border" placeholder="Rp 10000" required> <!--required-->
            </div>
            <!-- Modal Footer -->
            
            <div class="modal-footer">
              <button onclick="addData()" class="btn btn-warning btn-lg form-rounded px-5 mx-5 text-white shadow">ADD</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit-->
  <div class="modal fade" id="edit_modal">
    <div class="modal-dialog modal-lg modal-dialog-centered form-rounded-1" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title ml-4">EDIT</h1>
          <button type="button" class="close mr-4" data-dismiss="modal" aria-label="Close">
            <h1><span aria-hidden="true">&times;</span></h1>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <form action="" method="">
            <!-- Cahier Name -->
            <div class="form-group garis-bawah mb-4">
              <select  id="edit_id_cashier" name="id_cashier" class="form-control form-control-lg none-border">
                
              </select>
            </div>
            <!-- Category Name -->
            <div class="form-group garis-bawah mb-4">
              <select id="edit_id_category" name="id_category" class="form-control form-control-lg none-border">
                
              </select>
            </div>
            <!-- Product Name -->
            <div class="form-group garis-bawah mb-4">
              <input type="text" id="edit_name" name="name" class="form-control form-control-lg none-border" placeholder="Name Food" required>
            </div>
            <!-- Price Product -->
            <div class="form-group garis-bawah mb-4">
              <input type="text" id="edit_price" name="price" class="form-control form-control-lg none-border" placeholder="Rp 10000" required>
              <input type="hidden" id="edit_id" name="price" class="form-control form-control-lg none-border">
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
              <button class="btn btn-warning btn-lg form-rounded px-5 mx-5 text-white shadow" onclick="updateData()">EDIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Notif Delete -->
  <div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-lg modal-dialog-centered form-rounded-1" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title ml-4"></h1>
          <button type="button" class="close mr-4" data-dismiss="modal" aria-label="Close">
            <h1><span aria-hidden="true">&times;</span></h1>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body text-center mb-5 pb-5">
          <h1 id="message"></h1>
          <i class="far fa-check-circle"></i>
          <h1>Berhasil Dihapus </h1>
        </div>
      </div>
    </div>
  </div>

  

  
  <!-- Content -->
  <div class="container">
    <div class="row mt-table">
      <table class="table table-borderless form-rounded-1 shadow text-center">
        <!-- Table Header -->
        <thead class="bg-warning text-light">
          <tr>
            <th scope="col" class="col-number">No</th>
            <th scope="col">Cashier</th>
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col" class="col-action">Action</th>
          </tr>
        </thead>
        <!-- Table Body -->
        <tbody id="newRowProduct">          
            <!-- Container Show The Table -->
        </tbody>
      </table>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <script src="https://use.fontawesome.com/ef56b77cad.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- AJAX CRUD -->
  <!-- <script src="index.js" type="text/javascript"></script> -->
  <script>
    
    
    onLoad();

    //update data
    function updateData() {
      let id = $('#edit_id').val();
      let name = $('#edit_name').val();
    let price = $('#edit_price').val();
    let id_category = $('#edit_id_category').val();
    let id_cashier = $('#edit_id_cashier').val();
    $.ajax({
        type: 'POST',
        data: {id: id, name: name, price: price, id_category: id_category, id_cashier: id_cashier},
        url: 'updateProduct.php',
        success: function (result) {
            let objResult = JSON.parse(result);
            // $('#message').html(objResult.message);
            onLoad();
        }    
    });

    }

    // ADD Data
    function addData() {
      let name = $('[name="add_name"]').val();
    let price = $('[name="add_price"]').val();
    let id_category = $('[name="add_id_category"]').val();
    let id_cashier = $('[name="add_id_cashier"]').val();
    $.ajax({
        type: 'POST',
        data: {name: name, price: price, id_category: id_category, id_cashier: id_cashier},
        url: 'insertProduct.php',
        success: function (result) {
            let objResult = JSON.parse(result);
            // $('#message').html(objResult.message);
            onLoad();
        }    
    });
};

// // SELECT DATA
function selectData(id) {
  let idx=id;
  // // READ: Get Data from getCategory.php
  $.ajax({
        type: 'GET',
        data: '',
        url: 'getCashier.php',
        // menampilkan di Modal ADD - Cashier <select>
        success: function (resultCashier) {
            let objResult = JSON.parse(resultCashier);
            $.each(objResult, function (key, val) {
                $('#edit_id_cashier').append($('<option>').val(val.id).text(val.name));
            });
        },
        error: function (error) {
            console.log(error);
        }
    });

    $.ajax({
        type: 'GET',
        data: '',
        url: 'getCategory.php',
        // menampilkan di Modal ADD - Category <select>
        success: function (resultCategory) {
            let objResult = JSON.parse(resultCategory);
            $.each(objResult, function (key, val) {
                $('#edit_id_category').append($('<option>').val(val.id).text(val.name));
            });
        },
        error: function (error) {
            console.log(error);
        }
    });

  $.ajax ({
    type: 'POST',
    data: 'id='+idx,
    url: 'putId.php',
    success: function(result) {
      var objResult = JSON.parse(result);
      $('#edit_id').val(objResult.id);
      $('#edit_name').val(objResult.name);
      $('#edit_price').val(objResult.price);
      $('#edit_id_category').val(objResult.id_category);
      $('#edit_id_cashier').val(objResult.id_cashier);
      $('#edit_modal').modal('show');
    }
  });

  
}

// Delete data
function deleteData(id) {
  $.ajax({
    type: 'POST',
    data: 'id='+id,
    url: 'deleteData.php',
    success: function(result) {
      let objResult = JSON.parse(result);
      $('#message').html(objResult.message);
      $('#delete_modal').modal('show');
      onLoad();
    }
  })
}
  

// READ: Get Data from getProduct.php
function onLoad() {
    let dataHandler = $('#newRowProduct');
    dataHandler.html('');
    $.ajax({
        type: 'GET',
        data: '',
        url: 'getProduct.php',
        // menampilkan halaman utama
        success: function (resultProduct) {
            let objResult = JSON.parse(resultProduct);
            let i = 1;
            $.each(objResult, function (key, val) {
                let newRowProduct = $('<tr>');
                newRowProduct.html(`
                    <th scope="row">` + i + `</th>
                    <td>` + val.cashierName + `</td>
                    <td>` + val.productName + `</td>
                    <td>` + val.categoryName + `</td>
                    <td> Rp. ` + val.productPrice + `</td>
                    <td><button onclick="selectData(`+val.productId+`)" style="border: 0; background-color: transparent;"><i class="far hijau fa-edit"></i></button>
                        <button onclick="deleteData(`+val.productId+`)" style="border: 0; background-color: transparent;"><i class="fas merah fa-trash-alt"></i></button></td>
                `);
                dataHandler.append(newRowProduct);
                i++;
            });
        },
        error: function (error) {
            console.log(error);
        }
    })
}





// READ when Add Button on Click
$('#btnAdd').click(function () {
    // READ: Get Data from getCashier.php
    $('#add_modal').modal('show');
    function getCashier() {
    $.ajax({
        type: 'GET',
        data: '',
        url: 'getCashier.php',
        // menampilkan di Modal ADD - Cashier <select>
        success: function (resultCashier) {
            let objResult = JSON.parse(resultCashier);
            $.each(objResult, function (key, val) {
                $('#add_id_cashier').append($('<option>').val(val.id).text(val.name));
            });
        },
        error: function (error) {
            console.log(error);
        }
    });
  }
    
  function getCategory() {
    // // READ: Get Data from getCategory.php
    $.ajax({
        type: 'GET',
        data: '',
        url: 'getCategory.php',
        // menampilkan di Modal ADD - Category <select>
        success: function (resultCategory) {
            let objResult = JSON.parse(resultCategory);
            $.each(objResult, function (key, val) {
                $('#add_id_category').append($('<option>').val(val.id).text(val.name));
            });
        },
        error: function (error) {
            console.log(error);
        }
    });
  }
  })

  </script>

</body>
</html>
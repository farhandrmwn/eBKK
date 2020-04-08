<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>E-BKK</title>
</head>

<body class="container-fluid">

    <header>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0f4c81;">
                <div class="row">
                    <span class="navbar-brand ml-3 col-1">
                        <i class="fas fa-user-graduate fa-3x d-inline ml-2 "> <span class="border-right"></span></i>
                        <h5 class="card-title d-inline ml-5 h3 align-top">@yield('judul_halaman')</h5>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </span>
                </div>
                <div class="navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-5 text-uppercase">
                        <a class="nav-item nav-link mr-5 h5" href="#">Kembali<span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- content -->
    <!-- <div class="container">
        <form method="POST">
            <div class="form-row mt-5">
                <div class="form-group col-md-3 mt-5">
                    <label for="inputNis">NIS</label>
                    <input type="number" name="nis" class="form-control" id="inputNis">
                </div>
                <div class="form-group col-md-7 mt-5">
                    <label for="inputNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama">
                </div>
                <div class="form-group col-md-2 mt-5">
                    <label for="inputJk">Jenis Kelamin</label>
                    <select id="inputJk" name="jk" class="form-control">
                        <option selected>L / P</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="inputAddress">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputHp">No. Handphone</label>
                    <input type="text" name="hp" class="form-control" id="inputHp">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control">
                    <option selected>Pilih Status</option>
                    <option>Bekerja</option>
                    <option>Kuliah</option>
                    <option>Wirausaha</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUser">Username</label>
                    <input type="text" name="user" class="form-control" id="inputUser">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPass">Password</label>
                    <input type="password" name="pass" class="form-control" id="inputPass">
                </div>
            </div>
            <button type="submit" name="save" class="btn btn-primary float-right">Save</button>
        </form>

        <table class="table table-striped table-bordered data mt-5">
			<thead>
				<tr>	
                    <th>NIS</th>		
                    <th>Nama</th>
                    <th>JK</th>
					<th>Alamat</th>
					<th>No.Handphone</th>
					<th>Email</th>
                    <th>Status</th>
                    <th>Username</th>
                    <th>Password</th>
				</tr>
			</thead>
			<tbody>
				<tr>				
					<td>Andi</td>
					<td>Jakarta</td>
					<td>Web Designer</td>
					<td>21</td>
					<td>Aktif</td>
				</tr>
				<tr>				
					<td>Malas Ngoding</td>
					<td>Bandung</td>
					<td>Web Developer</td>
					<td>26</td>
					<td>Aktif</td>
				</tr>
				<tr>				
					<td>Malas Ngoding</td>
					<td>Bandung</td>
					<td>Web Developer</td>
					<td>26</td>
					<td>Aktif</td>
				</tr>
			</tbody>
		</table>

    </div> -->
    @yield('konten')


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>

</html>
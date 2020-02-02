@extends('layouts.template')

@section('title')
Data Bus
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Bus</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Data Bus</a></li>
          <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-edit"></i>
            Data Bus
          </h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <h4>Pilih Data</h4>
          <div class="row">

            <div class="col-5 col-sm-3">
              <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">

                <a class="nav-link active" id="vert-tabs-add-tab" data-toggle="pill" href="#vert-tabs-add" role="tab" aria-controls="vert-tabs-add" aria-selected="true">Data Bus</a>

                <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Data Tipe Bus</a>

                <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Data Rute</a>

                <a class="nav-link" id="vert-tabs-pivot-tab" data-toggle="pill" href="#vert-tabs-pivot" role="tab" aria-controls="vert-tabs-pivot" aria-selected="false">Data pivot</a>

              </div>
            </div>

            <div class="col-7 col-sm-9">
              <div class="tab-content" id="vert-tabs-tabContent">

                <!-- tab data bus -->
                <div class="tab-pane text-left fade show active" id="vert-tabs-add" role="tabpanel" aria-labelledby="vert-tabs-add-tab">
                  <table id="example0" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Bus</th>
                        <th>Tipe Bus</th>
                        <th>Jumlah Kursi</th>
                        <th>Detail</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($bus as $databus)
                      <tr>
                        <td>{{ $databus->nama }}</td>
                        <td>{{ $databus->tipebus }}</td>
                        <td>{{ $databus->jumlah_kursi }}</td>
                        <td> <button class="btn btn-primary" data-toggle="modal" data-target="#showdetail0" title="lihat detail" data-nama="{{ $databus->nama }}" data-tipe="{{ $databus->tipebus }}" data-kursi="{{ $databus->jumlah_kursi }}" data-desc="{{ $databus->deskripsi }}"><i class=" far fa-eye"></i></button> </td>
                        <td>
                          <button class="btn btn-success" data-toggle="modal" data-target="#editbus" title="edit data" data-nama="{{ $databus->nama }}" data-tipe="{{ $databus->tipebus }}" data-kursi="{{ $databus->jumlah_kursi }}" data-desc="{{ $databus->deskripsi }}"><i class="fas fa-pencil-alt"></i></button>
                          <button class="btn btn-danger" title="hapus data"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                    <!-- Modal detail -->
                    <div class="modal fade" id="showdetail0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Bus (Nama Bus)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <form role="form">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Bus</label>
                                  <input type="text" class="form-control" id="namabuss" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tipe Bus</label>
                                  <input type="text" class="form-control" id="tipebuss" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Jumlah Kursi</label>
                                  <input type="text" class="form-control" id="kursis" readonly>
                                </div>
                                <div class="form-group">
                                  <label>Deskripsi Bus</label>
                                  <textarea name="desc" class="form-control" id="deskripsis" rows="4" readonly></textarea>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal detail -->

                    <!-- Modal edit bus -->
                    <div class="modal fade" id="editbus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <form role="form">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Bus</label>
                                  <input type="text" class="form-control" name="nama" id="namabusss">
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Tipe Bus</label>
                                      <select class="form-control custom-select" name="id_tipebus" id="tipebusss">
                                        @foreach($tipebus as $tipe)
                                        <option value="{{ $tipe->id }}"> {{$tipe->nama}} </option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Jumlah Kursi</label>
                                      <input type="text" class="form-control" name="jumlah_kursi" id="kursiss">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Deskripsi Bus</label>
                                  <textarea name="deskripsi" class="form-control" rows="4" id="deskripsiss"></textarea>
                                </div>

                                <div class="form-group" style="margin-top: 20px;">
                                  <button type="reset" class="btn btn-secondary float-left"><i class="nav-icon fas fa-sync-alt"></i> Reset</button>
                                  <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-plus"></i> Update</button>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal edit bus -->

                  </table>
                </div>
                <!-- end tab data bus -->

                <!-- tab data tipe bus -->
                <div class="tab-pane fade show" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Tipe Bus</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Baco</td>
                        <td>
                          <button class="btn btn-success" data-toggle="modal" data-target="#edittipe" title="edit data"><i class="fas fa-pencil-alt"></i></button>
                          <button class="btn btn-danger" title="hapus data"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                    </tbody>

                    <!-- Modal edit tipe -->
                    <div class="modal fade" id="edittipe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Tipe Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <form role="form">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Tipe Bus</label>
                                  <input type="text" class="form-control" name="nama">
                                </div>

                                <div class="form-group" style="margin-top: 20px;">
                                  <button type="reset" class="btn btn-secondary float-left"><i class="nav-icon fas fa-sync-alt"></i> Reset</button>
                                  <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-plus"></i> Update</button>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal edit tipe -->

                  </table>
                </div>
                <!-- end tab data tipe bus -->

                <!-- tab data rute -->
                <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Rute</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Baco</td>
                        <td>
                          <button class="btn btn-success" data-toggle="modal" data-target="#editrute" title="edit data"><i class="fas fa-pencil-alt"></i></button>
                          <button class="btn btn-danger" title="hapus data"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                    </tbody>

                    <!-- Modal edit tipe -->
                    <div class="modal fade" id="editrute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Rute</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <form role="form">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Rute</label>
                                  <input type="text" class="form-control" name="rute">
                                </div>

                                <div class="form-group" style="margin-top: 20px;">
                                  <button type="reset" class="btn btn-secondary float-left"><i class="nav-icon fas fa-sync-alt"></i> Reset</button>
                                  <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-plus"></i> Update</button>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </table>
                </div>
                <!-- end tab data rute -->

                <!-- tab data pivot -->
                <div class="tab-pane fade" id="vert-tabs-pivot" role="tabpanel" aria-labelledby="vert-tabs-pivot-tab">
                  <table id="example4" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Bus</th>
                        <th>Tipe Bus</th>
                        <th>Rute</th>
                        <th>Harga Rp. Per Kursi</th>
                        <th>Detail</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($pivot as $datapivot)
                      <tr>
                        <td>{{ $datapivot->nama_bus }}</td>
                        <td>{{ $datapivot->tipebus }}</td>
                        <td>{{ $datapivot->rute_bus }}</td>
                        <td>{{ $datapivot->harga }}</td>
                        <td>
                          <button class="btn btn-primary" data-toggle="modal" data-target="#showdetailpivot" title="lihat detail" data-nama="{{ $datapivot->nama_bus }}" data-tipe="{{ $datapivot->tipebus }}" data-rute="{{ $datapivot->rute_bus }}" data-harga="{{ $datapivot->harga }}" data-desc="{{ $datapivot->deskripsi }}"><i class="far fa-eye"></i></button>
                        </td>
                        <td>
                          <button class="btn btn-success" data-toggle="modal" data-target="#editpivot" title="edit data"><i class="fas fa-pencil-alt"></i></button>
                          <button class="btn btn-danger" title="hapus data"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                    <!-- Modal detail -->
                    <div class="modal fade" id="showdetailpivot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <form role="form">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Bus</label>
                                  <input type="text" class="form-control" id="namabus" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tipe Bus</label>
                                  <input type="text" class="form-control" id="tipebus" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Rute</label>
                                  <input type="text" class="form-control" id="rutebus" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Harga Rp. Perkursi</label>
                                  <input type="text" class="form-control" id="hargabus" readonly>
                                </div>
                                <div class="form-group">
                                  <label>Deskripsi Bus</label>
                                  <textarea name="desc" class="form-control" id="deskripsi" rows="4" readonly></textarea>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal detail -->

                    <!-- Modal edit pivot -->
                    <div class="modal fade" id="editpivot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Rute</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <form role="form">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="inputStatus">Nama Bus</label>
                                      <select class="form-control custom-select" name="namabus">
                                        <option selected disabled>Pilih tipe</option>
                                        <option>Sleeper</option>
                                        <option>Seatbelt</option>
                                        <option>Comfortable</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="inputStatus">Tipe Bus</label>
                                      <select class="form-control custom-select" name="tipebus">
                                        <option selected disabled>Pilih tipe</option>
                                        <option>Bintang Prima A10</option>
                                        <option>Bintang Prima M70</option>
                                        <option>Bintang Prima C30</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Route</label>
                                  <select class="form-control custom-select" name="namarute">
                                    <option selected disabled>Pilih tipe</option>
                                    <option>Makassar - Bulukumba</option>
                                    <option>Bulukumba - Selayar</option>
                                    <option>Selayar - Maros</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Harga Rp. Per Kursi</label>
                                  <input type="text" class="form-control" name="harga">
                                </div>

                                <div class="form-group" style="margin-top: 20px;">
                                  <button type="reset" class="btn btn-secondary float-left"><i class="nav-icon fas fa-sync-alt"></i> Reset</button>
                                  <button type="submit" class="btn btn-info float-right"><i class="nav-icon fas fa-plus"></i> Update</button>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </table>
                </div>
                <!-- end tab data pivot -->

              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>

  </div>
</section>
@endsection

@section('js')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function() {
    $("#example0, #example1, #example2, #example3, #example4").DataTable();
  });
</script>
<script>
  // detail pivot
  $('#showdetailpivot').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var nama = button.data('nama')
    var tipe = button.data('tipe')
    var rute = button.data('rute')
    var harga = button.data('harga')
    var desc = button.data('desc')

    var modal = $(this)
    modal.find('.modal-title').text('Detail Bus ' + nama)
    modal.find('.modal-body #namabus').val(nama)
    modal.find('.modal-body #tipebus').val(tipe)
    modal.find('.modal-body #rutebus').val(rute)
    modal.find('.modal-body #hargabus').val(harga)
    modal.find('.modal-body #deskripsi').val(desc)
  })
  // end detail pivot

  // detail bus
  $('#showdetail0').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var nama = button.data('nama')
    var tipe = button.data('tipe')
    var kursi = button.data('kursi')
    var desc = button.data('desc')

    var modal = $(this)
    modal.find('.modal-title').text('Detail Bus ' + nama)
    modal.find('.modal-body #namabuss').val(nama)
    modal.find('.modal-body #tipebuss').val(tipe)
    modal.find('.modal-body #kursis').val(kursi)
    modal.find('.modal-body #deskripsis').val(desc)
  })
  // end detail bus

  // detail bus
  $('#editbus').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var nama = button.data('nama')
    var tipe = button.data('tipe')
    var kursi = button.data('kursi')
    var desc = button.data('desc')

    var modal = $(this)
    modal.find('.modal-title').text('Edit Data Bus ' + nama)
    modal.find('.modal-body #namabusss').val(nama)
    modal.find('.modal-body #tipebusss').val(2)
    modal.find('.modal-body #kursiss').val(kursi)
    modal.find('.modal-body #deskripsiss').val(desc)
  })
  // end detail bus
</script>
@endsection
@extends('layouts.master')

@section('title')
    Data Pengguna
@endsection

@section('content')
<div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">
                        <a href="" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data</a>
                    </strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Tanggal Input</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>30-07-2018 16:26</td>
                    <td>
                        <a href="" class="btn btn-warning">
                            <span class="fa fa-pencil" style="color:white"></span>
                        </a>
                        <a href="" class="btn btn-danger">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>

            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
@endsection